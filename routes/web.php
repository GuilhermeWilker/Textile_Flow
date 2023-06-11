<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/income', [IncomeController::class, 'index'])->name('income');

Route::post('/income', [IncomeController::class, 'store'])->name('income.store');

Route::get('/stock', [StockController::class, 'index'])->name('stock');

Route::get('/items/search', [StockController::class, 'search'])->name('items.search');

Route::put('/stock/{id}', [StockController::class, 'update'])->name('stock.update');
