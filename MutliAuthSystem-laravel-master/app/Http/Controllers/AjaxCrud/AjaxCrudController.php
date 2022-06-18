<?php

namespace App\Http\Controllers\AjaxCrud;

use App\AajaxModel\AjaxCrud;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxCrudController extends Controller
{
    public function index(){
        $data = AjaxCrud::get();
        return view('crud-type.ajax-crud.index', compact('data'));
    }

    public function create(Request $request){
        return view('crud-type.ajax-crud.create');
    }
}
