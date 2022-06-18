<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExternalApiController extends Controller
{
    
    // Access the external API means third party API 
    public function fetchAPI(){
        $data = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $data->json();
        // return view('External.api-index');
    }

    public function singlData(Request $request, $id){
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json();
    }

    // Post Request 
    public function addRecord(){
        $addPost = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => 'New Title',
            'body' => 'New Body Description'
        ]);

        return $addPost->json();
    }
}
