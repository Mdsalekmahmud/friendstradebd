<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/cat/products/{category}', [PageController::class, 'catProducts'])->name('catProducts');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');
Route::get('/{product:slug}', [PageController::class, 'productDetails'])->name('productDetails');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::post('/cart/add', [App\Http\Controllers\CartController::class, 'cartAdd'])->name('cart.add');
Route::post('/cart/update/{id}', [App\Http\Controllers\CartController::class, 'cartUpdate'])->name('cart.update');
Route::delete('/cart/remove/{itemId}', [App\Http\Controllers\CartController::class, 'cartRemove'])->name('cart.remove');
