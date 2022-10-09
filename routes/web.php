<?php
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CustomAuthController;

use Illuminate\Support\Facades\Route;

use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;


Route::get('/', [EntradaController::class, 'index'])->name('content.welcome');
Route::get('entradas/{id}', [EntradaController::class, 'show'])->name('content.entrada');
Route::get('categorias/{id}', [EntradaController::class, 'showPorCategoria'])->name('content.categoria');
    

    
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


   