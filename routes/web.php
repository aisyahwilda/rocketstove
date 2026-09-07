<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

Route::get('/rocket-stove', function () {
    return view('rocket-stove');
});

Route::get('/edukasi', function () {
    return view('edukasi');
});

Route::get('/dokumentasi', function () {
    return view('dokumentasi');
});
