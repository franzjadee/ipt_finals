<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mainpage', function () {
    return view('mainpage'); 
})->name('mainpage');

Route::get('/aboutpage', function () {
    return view('aboutpage'); 
})->name('aboutpage');
