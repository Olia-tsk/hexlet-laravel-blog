<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello there";
});

Route::get('posts', function () {
    // logic
})->name('posts.store');

Route::get('about', [PageController::class, 'about'])->name('about');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');

