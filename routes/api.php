<?php

use App\Http\Controllers\Api\FavoriteController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\MobileCmsController;
use App\Http\Controllers\Api\PasswordResetController;
use App\Http\Controllers\Api\PropertyCategoriesController;
use App\Http\Controllers\Api\PropertyController;
use App\Http\Controllers\Api\PropertyPlanController;
use App\Http\Controllers\Api\PropertySubCategoriesController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\BannerImageController;
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
    Route::get('/property/categories', [PropertyCategoriesController::class, 'index']);
    Route::post('/property/sub-categories', [PropertySubCategoriesController::class, 'index']);
    Route::get('/property/plans', [PropertyPlanController::class, 'index']);
    Route::post('/properties', [PropertyController::class, 'index']);
    Route::post('/property/add', [PropertyController::class, 'store']);
    Route::get('user/properties', [PropertyController::class, 'postedProperties']);
    Route::get('/properties/{id}', [PropertyController::class, 'show']);
    Route::get('/last-visited', [PropertyController::class, 'lastVisited']);

    Route::get('/favorites', [FavoriteController::class, 'index']);
    Route::post('/add-to-favorites', [FavoriteController::class, 'store']);
    Route::post('/remove-from-favorites', [FavoriteController::class, 'remove']);

    Route::get('/privacy-policy', [MobileCmsController::class, 'privacy']);
    Route::get('/terms-condition', [MobileCmsController::class, 'terms']);
    Route::get('/about-us', [MobileCmsController::class, 'about']);
    Route::get('/support', [MobileCmsController::class, 'support']);

    Route::get('/banner-image', [BannerImageController::class, 'index']);
    Route::get('/prices', [SettingController::class, 'index']);

});
