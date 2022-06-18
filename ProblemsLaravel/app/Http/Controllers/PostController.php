<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PostController extends Controller
{
    public function myPost(Request $request)
    {
        
        $posts = User::paginate(5);

        if ($request->ajax()) {
            $view = view('data',compact('posts'))->render();
            return response()->json(['html'=>$view]);
        } 

        return view('my-post',compact('posts'));
    }

}
