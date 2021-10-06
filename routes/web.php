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
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/pages/formpesan', function () {
    return view('formpesan');
});
Route::get('/pages/pembayaran', function () {
    return view('pembayaran');
});
Route::get('/pages/contact', function () {
    return view('contact');
});
Route::get('/pages/about', function () {
    return view('about');
});