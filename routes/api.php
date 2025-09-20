<?php

use App\Http\Controllers\Api\FavoriteController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\PasswordResetController;
use App\Http\Controllers\Api\PropertyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [LoginController::class, 'register']);
Route::post('password/email', [PasswordResetController::class, 'sendResetCode']);
Route::post('password/reset', [PasswordResetController::class, 'resetPassword']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/properties', [PropertyController::class, 'index']);
    Route::get('/properties/{id}', [PropertyController::class, 'show']);
    Route::get('/last-visited', [PropertyController::class, 'lastVisited']);

    Route::get('/favorites', [FavoriteController::class, 'index']);
    Route::post('/add-to-favorites', [FavoriteController::class, 'store']);
    Route::post('/remove-from-favorites', [FavoriteController::class, 'remove']);
});
