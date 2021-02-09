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

//admin Dashboard
Route::get('/admin',[\App\Http\Controllers\Backend\DashboardController::class,'index'])->name('admin.dashboard');

//admin users
Route::get('/admin/users',[\App\Http\Controllers\Backend\UserController::class,'index'])->name('admin.user');

//admin login
Route::get('/admin/login',[\App\Http\Controllers\Backend\LoginController::class,'index'])->name('admin.login');
Route::post('/admin/login',[\App\Http\Controllers\Backend\LoginController::class,'submitLogin']);
