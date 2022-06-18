<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExternalApi\CrudController;



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


Route::get('/posts', [CrudController::class, 'index']); 
Route::get('/posts/{id}', [CrudController::class, 'show']); //->name('single.post'); 

Route::get('/save/posts/', [CrudController::class, 'store']);