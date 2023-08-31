<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CostumerController;


Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', [UserController::class, 'index']);

// Cliente
Route::get('/clientes', [CostumerController::class, 'index'])->name('admin.cliente');
Route::get('/novo-cliente', [CostumerController::class, 'creating']);
Route::post('/cliente', [CostumerController::class, 'create'])->name('cliente.form');

// Produto
Route::get('/produtos', [ProductController::class, 'index'])->name('admin.produto');
Route::get('/produto-novo', [ProductController::class, 'creating']);
Route::post('/produto', [ProductController::class, 'create'])->name('produto.form');

// Aluguel
Route::get('/alugueis', [RentController::class, 'index'])->name('admin.aluguel');
Route::get('/novo-aluguel', [RentController::class, 'creating']);
Route::post('/aluguel', [RentController::class, 'create'])->name('aluguel.form');

// Categoria
Route::get('/categorias',[CategoryController::class, 'index'])->name('admin.categoria');
Route::get('/nova-categoria', [CategoryController::class, 'creating']);
Route::post('/categoria', [CategoryController::class, 'create'])->name('categoria.form');
Route::get('/categorias/{id}/produtos', [CategoryController::class, 'products']);


Route::get('/home', [HomeController::class, 'index'])->name('home');
