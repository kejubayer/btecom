<?php

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

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class,'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\Frontend\HomeController::class,'contact'])->name('contact');
Route::get('/products/show', [App\Http\Controllers\Frontend\ProductController::class,'show'])->name('product.show');

