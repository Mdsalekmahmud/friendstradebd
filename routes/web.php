<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



    Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/cat/products/{category}', [PageController::class, 'catProducts'])->name('catProducts');
Route::get('/product/{product}', [PageController::class, 'productDetails'])->name('productDetails');
