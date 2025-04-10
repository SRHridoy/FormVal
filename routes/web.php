<?php

use App\Http\Controllers\StoreProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/products/create','products.create')->name('products.create');

Route::post('/products/store',StoreProductController::class)->name('products.store');