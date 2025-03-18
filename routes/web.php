<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/order-items', function () {
    return view('order-items');
});

Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
