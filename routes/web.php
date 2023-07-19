<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class,'index'])->name('products.index')->middleware('auth');

Route::post('/products', [ProductController::class,'store'])->name("product.store");
Route::put('/products/{product}',[ProductController::class,'update'])->name('product.update');
Route::delete('/products/{product}',[ProductController::class,'destroy'])->name('product.destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
