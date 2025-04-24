<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController as LoginCtrl;
use App\Http\Controllers\Auth\RegisteredUserController     as RegCtrl;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home')); // atau dashboard public

// Guest
Route::middleware('guest')->group(function () {
    Route::get ('/login',    fn () => view('auth.login'))->name('login');
    Route::post('/login',    [LoginCtrl::class, 'store']);

    Route::get ('/register', fn () => view('auth.register'))->name('register');
    Route::post('/register', [RegCtrl::class, 'store']);
});

// Auth
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
    Route::post('/logout',   [LoginCtrl::class, 'destroy'])->name('logout');
});

// // sidebar targets
// Route::get('/admin/menu',   [AdminController::class, 'menu'])->name('admin.menu');
// Route::get('/admin/galeri', [AdminController::class, 'galeri'])->name('admin.galeri');