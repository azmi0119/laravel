<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\TestController;

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

Route::get('/user-list', function(){
    $data = User::all();

    return view('user-list', compact('data'));

});

Route::get('email-test', function(){
  
    $details['email'] = 'your_email@gmail.com';
  
    dispatch(new App\Jobs\SendEmailJob($details));
  
    dd('Queue Email has been sent sucessfully ');
});

// Route::post('delete-user-list', 'TestController@delete');

Route::post('/delete-user-list', function(Request $request) {

    // dd($request->checkbox);

    $ids = $request->checkbox;
   

    // $deleted = User::where('id',$ids)->delete();
    
    $deleted = \DB::table("users")->whereIn('id',explode(",",$ids))->delete();

    
    if($deleted) {
        return response()->json(['success' => 'Data has been deleted successfully !']);
    } else {
        return redirect()->back();
    }


})->name('user.delete');