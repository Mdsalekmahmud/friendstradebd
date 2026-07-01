<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/cat/products/{category}', [PageController::class, 'catProducts'])->name('catProducts');
Route::get('/product/{product}', [PageController::class, 'productDetails'])->name('productDetails');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
