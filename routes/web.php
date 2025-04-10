<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/products/create','products.create')->name('products.create');

Route::post('/products/store',function(){
    return dd('here');
})->name('products.store');