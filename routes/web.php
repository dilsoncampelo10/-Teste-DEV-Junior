<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/inserir/cliente',[CustomerController::class,'index'])->name('insert.customer');
Route::post('/inserir/cliente',[CustomerController::class,'store'])->name('save.customer');

Route::get('/clientes',[CustomerController::class,'show'])->name('show.customers');

Route::get('/editar/cliente/{id}',[CustomerController::class,'edit'])->name('edit.customer');
Route::put('/editar/cliente',[CustomerController::class,'update'])->name('udpate.customer');

Route::delete('/delete/cliente/{id}',[CustomerController::class,'destroy'])->name('delete.customer');