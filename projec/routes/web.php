<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');