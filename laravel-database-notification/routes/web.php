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
Route::get('/push-notification', 'HomeController@sendNotification')->name('send.db.notification');

Route::get('send', 'NotificationController@send');
Route::get('/send-database-notification','InvoiceController@sendMailNotification');
Route::get('/send-to-mail','MailNotificationController@mailNotification');


// Route::get('/database-notification',@sendNotification');
Route::post('/database-notification', 'DatabaseNotification\DemoNotificationController@sendNotification')->name('send.db.notification');

Route::get('markasread', function() {
    \Auth::user()->notifications->markAsRead();
    return redirect()->back();
})->name('markAsRead');
 