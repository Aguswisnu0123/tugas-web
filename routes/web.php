<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('content-menu/admindashboard');
});

Route::get('/dashboard2', function () {
    return view('content-menu/admindashboard2');
});

Route::get('/produk', [ProductController::class, 'index'])->name('dataproduk');
Route::post('/produk/create', [ProductController::class, 'create'])->name('produk.create');
Route::delete('/produk/delete/{id}', [ProductController::class, 'destroy'])->name('hapus');
Route::put('/produk/edit/{id}', [ProductController::class, 'update'])->name('produk.edit');

Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::post('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
Route::put('/category/edit/{id}', [CategoryController::class, 'update'])->name('category.edit');

Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::post('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::delete('/customer/delete/{id}', [CustomerController::class, 'destroy'])->name('customer.delete');
Route::put('/customer/edit/{id}', [CustomerController::class, 'update'])->name('customer.edit');