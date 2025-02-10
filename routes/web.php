<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\StoryController; 

Route::get('/', [LandingpageController::class, 'index']);
Route::get('/menu', [LandingpageController::class, 'menu']);
Route::get('/services', [LandingpageController::class, 'service']);
Route::get('/blog', [LandingpageController::class, 'blog']);
Route::get('/about', [LandingpageController::class, 'about']);
Route::get('/contact', [LandingpageController::class, 'contact']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('loginAction');


Route::middleware(['auth'])->group(function () {
    Route::resource('banner', BannerController::class);
    Route::resource('story', StoryController::class); 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});