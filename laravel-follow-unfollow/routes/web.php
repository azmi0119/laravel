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


Route::get('add-to-log', 'HomeController@myTestAddToLog');
Route::get('logActivity', 'HomeController@logActivity');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('users', 'HomeController@users')->name('users');
Route::get('user/{id}', 'HomeController@user')->name('user.view');
Route::post('follow', 'HomeController@follwUserRequest')->name('follow');