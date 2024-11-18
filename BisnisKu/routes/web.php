<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/form', function () {
    return view('form');
});

Route::get('register', function () {
    return view('register');
});

Route::get('/konsultasi', function () {
    return view('konsultasi');
});
