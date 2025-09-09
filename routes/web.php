<?php

use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServicesController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/service/{slug}', [ServicesController::class, 'show'])->name('service.show');
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');

