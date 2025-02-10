<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\MenuController; 

Route::get('/', [LandingpageController::class, 'index']);
Route::get('/p_menu', [LandingpageController::class, 'menu']);
Route::get('/p_blog', [LandingpageController::class, 'blog']);
Route::get('/p_about', [LandingpageController::class, 'about']);
Route::get('b_blog_page/{id}', [LandingpageController::class, 'blogPage']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('loginAction');


Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('banner', BannerController::class);
    Route::resource('story', StoryController::class);
    Route::resource('menu', MenuController::class); 
    Route::resource('category', CategoryController::class); 
    Route::resource('blog', BlogController::class); 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});