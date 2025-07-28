<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/portfolio', function () {
    return view('portfolio.index');
})->name('portfolio');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login',[LoginController::class,'handlelogin'])->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');