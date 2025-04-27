<?php

use App\Livewire\Cart;
use App\Livewire\ProductList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', ProductList::class)->name('products');
Route::get('/cart', Cart::class)->name('cart');