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

// Admin
Route::get('/admin/produk', function () {
    return view('adminproduk.index');
});

// login
Route::get('/login', function () {
    return view('auth.login');
});

//register
Route::get('/register', function () {
    return view('auth.register');
});