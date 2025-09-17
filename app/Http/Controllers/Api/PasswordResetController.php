<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;

class PasswordResetController extends Controller
{
    public function sendResetCode(Request $request)
    {
        $executed = RateLimiter::attempt(
            'reset-code:' . $request->ip(),
            $perMinute = 3,
            function() {}
        );

        if (!$executed) {
            return response()->json([
                'message' => 'Too many reset attempts. Please try again later.'
            ], 429);
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $resetCode = rand(1000, 9999);
        $cacheKey = 'reset_code_' . $request->email;

        Cache::put($cacheKey, $resetCode, now()->addMinutes(10));


        try {
            Mail::raw("Your password reset code is: {$resetCode}", function ($message) use ($request) {
                $message->to($request->email)
                    ->subject('Your Password Reset Code');
            });
        } catch (\Exception $e) {
            Log::error("Failed to send reset email: " . $e->getMessage());
            return response()->json([
                'message' => 'Failed to send reset code. Please try again.'
            ], 500);
        }

        Log::info("Password reset code sent for {$request->email}: {$resetCode}");

        return response()->json([
            'message' => 'A reset code has been sent to your email.',
            'expires_in' => 10
        ], 200);
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'token' => 'required|digits:4',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $cacheKey = 'reset_code_' . $request->email;
        $storedCode = Cache::get($cacheKey);

        Log::debug('Password reset attempt', [
            'email' => $request->email,
            'cache_key' => $cacheKey,
            'stored_code' => $storedCode,
            'request_token' => $request->token,
            'cache_driver' => config('cache.default')
        ]);

        if (!$storedCode) {
            return response()->json([
                'message' => 'Reset code not found or expired. Please request a new one.'
            ], 400);
        }

        if ($storedCode != $request->token) {
            return response()->json([
                'message' => 'Invalid reset code. Please check the code and try again.'
            ], 400);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found.'
            ], 404);
        }

        $user->password = bcrypt($request->password);
        $user->save();

        Cache::forget($cacheKey);

        Log::info("Password reset successful for user: {$user->email}");

        return response()->json([
            'message' => 'Password has been successfully reset.'
        ], 200);
    }
}
