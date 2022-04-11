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

Route::get('/', function () {
    return view('home');
});

//index produk
Route::get('/produk', function () {
    return view('produk.index');
});

//detailproduk
Route::get('/detailproduk', function () {
    return view('produk.detailproduk');
});

// Admin
Route::get('/admin/produk', function () {
    return view('adminproduk.index');
});