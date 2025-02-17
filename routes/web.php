<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentMethodController;

// Route::get('/', function () {
//     return view('underconstruction');
// });

Route::resource('/', App\Http\Controllers\HomeController::class);
Route::resource('/home', App\Http\Controllers\HomeController::class);
Route::resource('/shop', App\Http\Controllers\ShopController::class);
Route::resource('/about', App\Http\Controllers\AboutController::class);
Route::resource('/contact', App\Http\Controllers\ContactController::class);
Route::resource('/shoping-cart', App\Http\Controllers\ShopingCartController::class);
Route::resource('/admin', App\Http\Controllers\AdminController::class);
Route::resource('/paket', App\Http\Controllers\PaketController::class);
Route::resource('/courier', App\Http\Controllers\KurirController::class);
Route::resource('/payment_method', App\Http\Controllers\PaymentMethodController::class);
Route::get('/detail_payment_method/{id}/{payment_methode}', [PaymentMethodController::class, 'add'])->name('add');
Route::post('/detail_payment_method', [PaymentMethodController::class, 'tambah'])->name('tambah');
Route::resource('/owner', App\Http\Controllers\OwnerController::class);
