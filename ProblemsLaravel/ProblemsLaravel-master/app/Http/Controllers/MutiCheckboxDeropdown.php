<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class MutiCheckboxDeropdown extends Controller
{
    public function index() {
        return view('multiple-checkbox-dropdown');
    }

    public function store(Request $request) {
        // $input = $request->all();
        // $input['name'] = $input['name'];
        // $input['message'] = $input['message'];
        // $input['cat'] = json_encode($input['cat']);
        

        Post::create([
            'name' => $request->name,
            'message' => $request->message,
            'cat' => json_encode($request->cat)
        ]);
       
        dd('Post created successfully.');
    }
}
