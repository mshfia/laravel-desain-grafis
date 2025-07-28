<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\KaryaController;

Route::get('/kontributor/upload', [KaryaController::class, 'create'])->name('karya.create');
Route::post('/kontributor/upload', [KaryaController::class, 'store'])->name('karya.store');

// =====================
// Login & Logout
// =====================

// Tampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Logout
Route::post('/home', function () {
    Auth::logout();
    Session::flush();
    return redirect('/home');
})->name('logout');

// Halaman kontributor, hanya untuk yang sudah login
Route::get('/kontributor', [LoginController::class, 'kontributorPage'])->name('kontributor')->middleware('auth');
Route::get('/kontributor', [KaryaController::class, 'kontributorPage'])->name('kontributor')->middleware('auth');

// =====================
// Register
// =====================
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// =====================
// Halaman Statis Lain
// =====================
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [KaryaController::class, 'homePage'])->name('home');

Route::get('/portfolio', [KaryaController::class, 'portfolioPage'])->name('portfolio');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');
