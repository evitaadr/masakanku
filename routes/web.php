<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

Route::get('/', function () {
    return view('welcome');
=======
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

// Halaman Menu & Paket
Route::get('/menu', function () {
    return view('menu'); // ini mengarah ke resources/views/menu.blade.php
>>>>>>> 08dd60e597e9842cc036fdc239fe7a50c893c507
});
