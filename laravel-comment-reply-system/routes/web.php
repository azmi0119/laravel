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


Route::get('posts','PostController@index')->name('posts.index');
Route::get('/show/{id}','PostController@show')->name('posts.show');
Route::get('/create','PostController@create')->name('posts.create');
Route::post('/store','PostController@store')->name('posts.store');

Route::post('/comment-store','CommentController@store')->name('comments.store');