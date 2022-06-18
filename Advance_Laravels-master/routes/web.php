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
    return view('index');
});


Route::get('/social-login', function () {
    return view('social-login.social-login');
});

Route::get('/payment-system', function () {
    return view('payment-system.payment-index');
});


Route::get('/ecommerce-system', 'Cart\CartController@index');

Route::get('/queue-mail', function () {
    return view('queue-mail.queue-email');
});


Route::get('product-list', 'Product\ProductController@index');

