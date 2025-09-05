<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServicesController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index'])->name('home');
// Route for service details page
Route::get('/service/{id}', [ServicesController::class, 'show'])->name('service.show');

