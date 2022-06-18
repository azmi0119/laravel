<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;

class PostOberserverController extends Controller
{
    public function index() {
        $post = Post::get();
        // d($post);
        return view('observer.post-observer.index', compact('post'));
    } 

    public function store(PostRequest $request) {

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->name = $request->cat;
        $post->message = $request->message; 
        $post->cat = $request->cat;
        $post->save();
        
        return redirect()->back();
    }
}
 