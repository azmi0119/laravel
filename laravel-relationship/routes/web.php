<?php

use Illuminate\Support\Facades\Route;
use App\Model\Student;
use App\Model\Result;
use App\Model\Tag;
use App\Model\Post;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/one','OneController@index');

Route::get('/many-to-many', 'ManyToManyController@index')->name('many.to.many');

Route::get('/many-to-many-list', 'ManyToManyController@list')->name('many-to-many-list');


Route::get('/tags', function(){

    $post = Post::find(3);

    $tags = Tag::find(3);

    $post->tags()->attach($tags);

    $post = Post::with('tags')->get();

    $tag = Tag::with('posts')->get();
    
});