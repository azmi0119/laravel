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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'ProductController@index');  
Route::get('cart', 'ProductController@cart')->name('cart');
Route::get('add-to-cart/{id}', 'ProductController@addToCart')->name('add.to.cart');
Route::patch('update-cart', 'ProductController@update')->name('update.cart');
Route::delete('remove-from-cart', 'ProductController@remove')->name('remove.from.cart');