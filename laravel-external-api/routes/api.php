<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomApi\CrudController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("index", [CrudController::class, 'index']);
Route::post("store", [CrudController::class, 'store']);
Route::get("show/{id}", [CrudController::class, 'show']);
Route::post("delete/{id}", [CrudController::class, 'destroye']);

