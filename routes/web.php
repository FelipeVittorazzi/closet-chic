<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', [UserController::class, 'index']);

Route::resource('products', ProductController::class);
Route::get('/produto-novo', [ProductController::class, 'creating']);
Route::post('/product', [ProductController::class, 'create']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
