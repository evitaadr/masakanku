<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

// Halaman Menu & Paket
Route::get('/menu', function () {
    return view('menu'); // ini mengarah ke resources/views/menu.blade.php
});
