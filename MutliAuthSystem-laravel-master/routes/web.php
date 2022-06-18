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



Route::group(['middleware' => ['auth','isAdmin']], function(){
    Route::get('/dashboard', function(){
        return view('admin.dashboard');
    });
});

// All simple crud routes start here
Route::get('index', 'Simplecrud\SimpleCrudController@index');
Route::get('create', 'Simplecrud\SimpleCrudController@create');
Route::post('store', 'Simplecrud\SimpleCrudController@store');
Route::get('destroy/{id}','Simplecrud\SimpleCrudController@destroy');
Route::get('edit/{id}','Simplecrud\SimpleCrudController@show');
Route::post('update','Simplecrud\SimpleCrudController@update');
// All simple crud routes close here

// All Ajax crud routes start here
Route::get('ajax-index','AjaxCrud\AjaxCrudController@index');
Route::get('ajax-create', 'AjaxCrud\AjaxCrudController@create');
// All Ajax crud routes close here


// E-commerce related route start here
Route::get('add-to-card-index', function(){
    return view('e-commerce.add-to-cart.add-to-cart-index');
});
Route::get('place-order-index', function(){
    return view('e-commerce.order.place-order-index');
});
// E-commerce related route close here

// Rating related route start here
Route::get('simple-rating-index', function(){
    return view('rating-type.simple-rating.simple-rating-index');
});
Route::get('ajax-rating-index', function(){
    return view('rating-type.ajax-rating.ajax-rating-index');
});
// Rating related route close here

// Filter related route start here
Route::get('simple-filter-index', function(){
    return view('filter-type.simple-filter.simple-filter-index');
});
Route::get('ajax-filter-index', function(){
    return view('filter-type.ajax-filter.ajax-filter-index');
});
// Filter related route close here

// loading related route start here
Route::get('simple-load-index', function(){
    return view('data-loading-type.simple-load-data.simple-load-index');
});
Route::get('ajax-load-index', function(){
    return view('data-loading-type.ajax-load-data.ajax-load-index');
});
Route::get('lazy-load-index', function(){
    return view('data-loading-type.lazy-load-data.lazy-load-index');
});
// loading related route close here

// social login related route start here
Route::get('socila-login-index', function(){
    return view('socila-login-type.socila-login.socila-index-index');
});
// social login route close here

// map related route start here
Route::get('simple-map', function(){
    return view('map-type.simple-map');
});
// map route close here

// image download related route start here
Route::get('simple-image-download', function(){
    return view('download.image.simple-image-download');
});
// image download route close here

// video download related route start here
Route::get('simple-video-download', function(){
    return view('download.video.simple-video-download');
});
// video download route close here


/*****************ADMIN ROUTES*******************/
Route::Group(['prefix' => 'admin'], function () { 
    Route::get('/index_admin', function () {
        return view('admin.index_admin');
        })->name('pagee');
        Route::get('/appointment-list', function () {
        return view('admin.appointment-list');
        })->name('appointment-list');
        Route::get('/specialities', function () {
        return view('admin.specialities');
        })->name('specialities');
        Route::get('/doctor-list', function () {
        return view('admin.doctor-list');
        })->name('doctor-list');
        Route::get('/patient-list', function () {
        return view('admin.patient-list');
        })->name('patient-list');
        Route::get('/reviews', function () {
        return view('admin.reviews');
        })->name('reviews');
        Route::get('/transactions-list', function () {
        return view('admin.transactions-list');
        })->name('transactions-list');
        Route::get('/settings', function () {
        return view('admin.settings');
        })->name('settings');
        Route::get('/invoice-report', function () {
        return view('admin.invoice-report');
        })->name('invoice-report');
        Route::get('/profile', function () {
        return view('admin.profile');
        })->name('profile');
        Route::get('/login', function () {
        return view('admin.login');
        })->name('login');
        Route::get('/register', function () {
        return view('admin.register');
        })->name('register');
        Route::get('/forgot-password', function () {
        return view('admin.forgot-password');
        })->name('forgot-password');
        Route::get('/lock-screen', function () {
        return view('admin.lock-screen');
        })->name('lock-screen');
        Route::get('/error-404', function () {
        return view('admin.error-404');
        })->name('error-404');
        Route::get('/error-500', function () {
        return view('admin.error-500');
        })->name('error-500');
        Route::get('/blank-page', function () {
        return view('admin.blank-page');
        })->name('blank-page');
        Route::get('/components', function () {
        return view('admin.components');
        })->name('components');
        Route::get('/form-basic-inputs', function () {
        return view('admin.form-basic-inputs');
        })->name('form-basic');
        Route::get('/form-input-groups', function () {
        return view('admin.form-input-groups');
        })->name('form-inputs');
        Route::get('/form-horizontal', function () {
        return view('admin.form-horizontal');
        })->name('form-horizontal');
        Route::get('/form-vertical', function () {
        return view('admin.form-vertical');
        })->name('form-vertical');
        Route::get('/form-mask', function () {
        return view('admin.form-mask');
        })->name('form-mask');
        Route::get('/form-validation', function () {
        return view('admin.form-validation');
        })->name('form-validation');
        Route::get('/tables-basic', function () {
        return view('admin.tables-basic');
        })->name('tables-basic');
        Route::get('/data-tables', function () {
        return view('admin.data-tables');
        })->name('data-tables');
        Route::get('/invoice', function () {
        return view('invoice');
        })->name('invoice');
        Route::get('/calendar', function () {
        return view('admin.calendar');
        })->name('calendar');

        
        /*****************ALL PROBLEMS ROUTES*******************/

        // All simple crud routes start here
        Route::get('simple-index', function(){
            return view('admin.crud-type.simple-crud.index');
        });
        // All simple crud routes close here

        // All simple crud routes start here
        Route::get('ajax-index', function(){
            return view('admin.crud-type.ajax-crud.index');
        });
        // All simple crud routes close here

    });

/********************ADMIN ROUTES END******************************/