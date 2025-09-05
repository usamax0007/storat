<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = session('locale', 'ar');

        // Ensure the locale is valid
        if (!in_array($locale, ['ar', 'en'])) {
            $locale = 'ar';
            session(['locale' => $locale]);
        }

        app()->setLocale($locale);

        // Also set the config locale
        config(['app.locale' => $locale]);

        // Log the locale being set for debugging
        \Log::info('SetLocale middleware: Setting locale to ' . $locale);

        return $next($request);
    }
}
