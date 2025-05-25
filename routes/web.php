<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\UserController;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/gallery', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/menu/category/{id}', [HomeController::class, 'menuByCategory'])->name('menu.category');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected admin routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // Categories management
    Route::resource('categories', CategoryController::class);

    // Menu management
    Route::resource('menus', MenuController::class);

    // Galeri management
    Route::resource('galeris', GaleriController::class);

    // Users management
    Route::resource('users', UserController::class)->except(['show'])->middleware('superadmin');
});