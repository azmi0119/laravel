<?php

use Illuminate\Support\Facades\Route;
// use Intervention\Image\ImageMangetStatic;
use Intervention\Image\Facades\Image as Image;
use App\Helpers\ImageFilter;
use Illuminate\Http\Request;
use App\Task;
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

Route::get('/imag', function () {
    // $img = Image::make('office.jpg');
    // $img->crop(100, 100, 25, 25);            // It use of crop the image 
    // $img->save('new_office.png', 5);         // it is save of image with new name and second args is quality of image 
    // $img->blur();                            // It is use for blur of image
    // $img->blur(15);                          // It is use for blur image with amount for bluring to image    
    // $img->save('blur.jpg', 5);


    // How we can call with won class 
    // $img = Image::make('office.jpg');
    // $img->filter(new ImageFilter());


    // How to create a image caching 
    $img = Image::cache(function($image){
        $img = $image->make('office.jpg');
        $img->filter(new ImageFilter());
    });

  
    return Image::make($img)->response();


});

// Home Page
Route::get('/', function(){
    return view('home');
});

// Load More data with ajax 
Route::get('/load-more-data', 'LoadMoreController@index');
Route::post('/delete-load-more-data/{id}', 'LoadMoreController@deleteRecord');
// End here routes Load More data with ajax 


// Infinite scroll load more data with ajax 
Route::get('/scroll-load-more-data', 'LoadMoreController@scrollLoadMoreData');
Route::post('/delete-scroll-more-data/{id}', 'LoadMoreController@deleteScrollRecord');
// End here routes Infinite scroll load more data with ajax 


// Dependent Country, State and City with ajax
Route::get('/country-state-city', 'CountryController@index');
Route::post('/getState', 'CountryController@getState');
Route::post('/getCity', 'CountryController@getCity');
// End here route Dependent Country, State and City

// Fetch third party api for routes
Route::get('/posts', 'ExternalApiController@fetchAPI');         // Fetch all data 
Route::get('/posts/{id}', 'ExternalApiController@singlData');   // Single Data Fetch

// Add New Reocr in external API
Route::get('/posts-add', 'ExternalApiController@addRecord');
// Fetch third party api for routes



//  ------------------------------- Yajra - DataTableAjax ------------------------------------ 
Route::get('simple-yajra-table', 'YajraBox\DataTableController@index')->name('datatables.index');
Route::get('yajra-index', 'YajraBox\DataTableController@anyData')->name('datatables.data');

// Eid and Add Column with Data Table 
Route::get('yajra-edit-add-column', 'YajraBox\DataTableController@modifyColumn')->name('datatables.col_modify');


Route::get('/student-form', 'StudentController@index');
Route::post('/store-input-fields', 'StudentController@store');


// Add more data 

Route::get('/add-more-field', function () {
    return view('add-more-field');
})->name('task');

Route::post('/',function(Request $request) {
    
    $request->validate([
       'task_name' => 'required',
       'cost' => 'required'
    ]);
    
    $count = count($request->task_name);

    for ($i=0; $i < $count; $i++) { 
      $task = new Task();
      $task->task_name = $request->task_name[$i];
      $task->cost = $request->cost[$i];
      $task->save();
    }

    return redirect()->back();
});


// close here add more data

// Multiple field validation 
Route::get('contact', 'ContactsController@showContactForm');
Route::post('contact', 'ContactsController@contact');

// Close here multiple field validation

// Upload multiple image start here
Route::get('file','FileController@create');
Route::post('file','FileController@store');
// Upload multipel image close here


// resize image before uploading start here
Route::get('resizeImage', 'ImageController@resizeImage');
Route::post('resizeImagePost', 'ImageController@resizeImagePost')->name('resizeImagePost');
// resize image before uploading end here


// Share a link with social media 
Route::get('social-share', 'SocialShareController@index');

// Next Page   -     Previous Page
Route::get('users', 'UserController@index');

// Infinit Scrolling 
Route::get('my-post', 'PostController@myPost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Dome PDF Generator
Route::get('generate-pdf','PDFController@generatePDF');

// Multipe checkbox value insert with dropdown
Route::get('multi-checkbox','MutiCheckboxDeropdown@index');
Route::post('multi-checkbox-post','MutiCheckboxDeropdown@store')->name('postData');

// Pie chart
Route::get('echarts','EchartController@echart');

// nearest location 
Route::get('shop', 'ShopController@index');
Route::get('shop-create', 'ShopController@create');
Route::post('store-shop', 'ShopController@store');

// upload image with progress bar
Route::get('ajax-file-upload-progress-bar', 'UploadFileController@index')->name('imageUpload');
Route::post('store', 'UploadFileController@store');

// image upload
Route::get('image', 'ImagesController@index');
Route::post('save', 'ImagesController@save');

Route::get('multiple-image', 'ImagesController@indexView');
Route::post('multiple-save', 'ImagesController@store');

Route::get('photo', 'ImagesController@indexPhoto');
Route::post('save-photo', 'ImagesController@photoStore');

//fullcalender
Route::get('fullcalendar','FullCalendarController@index');
Route::post('fullcalendar/create','FullCalendarController@create');
Route::post('fullcalendar/update','FullCalendarController@update');
Route::post('fullcalendar/delete','FullCalendarController@destroy');

// Dropzone File Upload 
Route::get('/dropzone', 'DropzoneFileUploadController@index');
Route::post('store', 'DropzoneFileUploadController@uploadImages');
Route::post('delete', 'DropzoneFileUploadController@deleteImage');

// --------------------------------------------- Invoke Controller --------------------------------------------------------------
Route::get('invoke/{pages}','InvokeController')
       ->name('page')
       ->where('pages','home|about|contact|terms');
// --------------------------------------------- Invoke Controller --------------------------------------------------------------


// --------------------------------------------- query practice ----------------------------------------------------------------

Route::get('/first-last-row', function() {
    $data = App\Student::get();

    if (view()->exists('first-last-row-data')) { 
        return view('first-last-row-data', compact('data'));    
    } else {
        dd('view not exists');
    }    
});

// Example one

Route::get('/users', function() {
    $whereDate = App\User::whereDate('created_at', '2020-10-21')->get();
    $whereMonth = App\User::whereMonth('created_at', '11')->get();
    $whereDay = App\User::whereDay('created_at', '31')->get(); 
    $whereYear = App\User::whereYear('created_at', '2020')->get(); 
    $whereTime = App\User::whereTime('created_at', '23:00:15')->get();
    dd($whereYear);
});

// --------------------------------------------- Post Observer ----------------------------------------------------------------
Route::group(['prefix' => 'observer'], function() {
    Route::get('/post-index', 'PostOberserverController@index');
    Route::post('/add-post', 'PostOberserverController@store')->name('add.post');
    Route::get('product', 'ProductController@index');
});


// --------------------------------------------- fallback Route ---------------------------------------------------------------

Route::fallback(function() {
    return "This page is not find please give correct path of file";
});


// --------------------------------------------- upload image and preview ---------------------------------------------------------------
Route::get('image-preview', 'AjaxUploadController@index');
Route::post('upload', 'AjaxUploadController@store');

// --------------------------------------------- Helper Function Test Rote --------------------------------------------------------------
Route::get('/print_r_test', 'TestHelperController@index');