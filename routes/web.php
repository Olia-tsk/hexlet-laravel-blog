<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello there";
});

Route::get('posts', function () {
    // logic
})->name('posts.store');

Route::get('about', function () {
    $tags = ['education', 'programming', 'php', 'oop'];
    return view('about', ['tags' => $tags]);
})->name('about');
