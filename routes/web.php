<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::get("/hello", function () {
    return "Hello Laravel";
});

Route::get('/', [PageController::class, 'home'])
    ->name('products.home');

Route::get('/about', [PageController::class, 'about'])
    ->name('products.about');

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('products.show');



Route::get("contact", function () {
    return view('contact');
});
Route::get("about", function () {
    return view('about');
});