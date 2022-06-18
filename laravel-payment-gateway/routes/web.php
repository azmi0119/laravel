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

/* Strip Payment Getway start here */
Route::get('/stripe-payment','StripeController@handleGet');
Route::post('/stripe-payment','StripeController@handlePost')->name('stripe.payment');
/* Strip Payment Getway close here */


/* Razorpay Payment Getway start here */
Route::get('/razorpay-payment','RazorpayPaymentController@index');
Route::post('razorpay-payment','RazorpayPaymentController@store')->name('razorpay.payment.store');
/* Razorpay Payment Getway close here */

/* PayU Mony payment Getway start here */ 
// Route::get('subscribe-process', ['as' => 'subscribe-process','uses' => 'SigninController@SubscribProcess']);

Route::get('subscribe-process', 'SigninController@SubscribProcess');

// Route::get('subscribe-cancel', ['as' => 'subscribe-cancel','uses' => 'SigninController@SubscribeCancel']);

Route::get('subscribe-cancel','SigninController@SubscribeCancel');

// Route::get('subscribe-response', ['as' => 'subscribe-response','uses' => 'SigninController@SubscribeResponse']);

Route::get('subscribe-response', 'SigninController@SubscribeResponse');

/* PayU Mony Payment Getway Close here */