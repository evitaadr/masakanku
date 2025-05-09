<?php


// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\Auth\AuthenticatedSessionController as LoginCtrl;
// use App\Http\Controllers\Auth\RegisteredUserController     as RegCtrl;
// use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GaleriController;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/gallery', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/menu/category/{id}', [HomeController::class, 'menuByCategory'])->name('menu.category');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
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
});

// Route::get('/', fn () => view('home')); // atau dashboard public

// Guest
// Route::middleware('guest')->group(function () {
//     Route::get ('/login',    fn () => view('auth.login'))->name('login');
//     Route::post('/login',    [LoginCtrl::class, 'store']);

//     Route::get ('/register', fn () => view('auth.register'))->name('register');
//     Route::post('/register', [RegCtrl::class, 'store']);
// });

// // Halaman Utama
// Route::get('/', [HomeController::class, 'index']);

// Halaman Menu & Paket
// Route::get('/menu', function () {
//     return view('menu'); // Mengarah ke resources/views/menu.blade.php
// });

// // Route Login
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// // Rute yang dilindungi middleware
// Route::middleware(['auth.session'])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');

//     // Rute admin lainnya bisa ditambahkan di sini
// >>>>>>> Stashed changes


// Auth
// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
//     Route::post('/logout',   [LoginCtrl::class, 'destroy'])->name('logout');
// });

// // sidebar targets
// Route::get('/admin/menu',   [AdminController::class, 'menu'])->name('admin.menu');
// Route::get('/admin/galeri', [AdminController::class, 'galeri'])->name('admin.galeri');
