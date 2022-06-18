<?php

namespace App\Http\Controllers\Simplecrud;

use Illuminate\Http\Request;
use App\simplecrud\SimpleCrud;
use App\Http\Controllers\Controller;

class SimpleCrudController extends Controller
{
    public function index(){
        $data = SimpleCrud::get();
        return view('admin.crud-type.simple-crud.index',compact('data'));
    }

    public function create(Request $request){
        return view('admin.crud-type.simple-crud.create');
    }

    public function store(Request $request){

        $data = new SimpleCrud();
        $data->name = $request->name ;
        $data->father_name = $request->father_name ;
        $data->degisnation = $request->degisnation ;
        $data->email = $request->email ;
        $data->college = $request->college ;
        $data->occupation = $request->occupation ;
        $data->income = $request->income ;
        $data->course = $request->course ;
        $data->address = $request->address ;
        $data->gender = $request->gender ;

        $data->save();
        return redirect('index');
    }

    public function show(Request $request){
        $id = $request->id;
        $data = SimpleCrud::find($id);
        return view('admin.crud-type.simple-crud.edit', compact('data'));
    }

    public function update(Request $request){
        $data = SimpleCrud::find($request->form_id);
        $data->name = $request->name;
        $data->father_name = $request->father_name;
        $data->degisnation = $request->degisnation;
        $data->email = $request->email;
        $data->college = $request->college;
        $data->occupation = $request->occupation;
        $data->income = $request->income;
        $data->course = $request->course;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->update();
        
        return redirect('index');
    }

    public function destroy(Request $request){
        $id = $request->id;
        $data = SimpleCrud::find($id);
        $data->delete();
        return redirect()->back();
    }

}

 