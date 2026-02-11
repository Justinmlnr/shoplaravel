<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResourceController;


Route::get("/hello", function () {
    return "Hello Laravel";
});

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/about', [PageController::class, 'about'])
    ->name('about');

Route::get('/contact', [PageController::class, 'contact'])
    ->name('contact');

Route::resource('/products', ProductController::class);