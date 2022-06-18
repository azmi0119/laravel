<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class TestHelperController extends Controller
{
    public function index() {
        $data = Post::all();
        p($data);
    }
}
