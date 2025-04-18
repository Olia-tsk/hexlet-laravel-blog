<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello there";
});

Route::get('posts', function () {
    // logic
})->name('posts.store');

Route::get('about', function () {
    return view('about');
})->name('about');
