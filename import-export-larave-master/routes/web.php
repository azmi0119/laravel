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

Route::post('/import','ImportController@import')->name('import');
Route::get('/export','ExportController@stateExport')->name('state.export');

// pdf Route
Route::get('generate-pdf', 'PDFController@generatePDF')->name('simple.pdf');
Route::post('html-to-pdf', 'PDFController@htmlToPDF')->name('html.to.pdf');
