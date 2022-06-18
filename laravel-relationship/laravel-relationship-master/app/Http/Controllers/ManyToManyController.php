<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class ManyToManyController extends Controller
{
    
    public function index(){
        return view('many-to-many.many-to-many');
    }

    public function list(){
         
        return view('many-to-many.many-to-many-list');
    }
}
