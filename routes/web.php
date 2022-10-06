<?php
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EntradaController::class, 'index'])->name('welcome');
Route::get('entradas/{id}', [EntradaController::class, 'show'])->name('entrada');
Route::get('categorias/{id}', [EntradaController::class, 'showPorCategoria'])->name('categoria');