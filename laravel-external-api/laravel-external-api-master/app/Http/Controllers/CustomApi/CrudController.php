<?php

namespace App\Http\Controllers\CustomApi;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CrudController extends Controller
{
    public function index() {
        $data = User::all();
        return $data->toJson();
    }

    public function store(Request $request) {
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;

        if($data->save()) {
            return response()->json(['message' => "Registration successfully"], 200);
        }
    }

    public function show($id) {
        $data = User::find($id);
        return $data->toJson();
    }

    public function destroye(Request $request, $id) {
        $data = User::find($request->$id);
        if($data) {
            if($data->delete()) {
                return response()->json(['message' => "Data deleted successfully"], 200);   
            }
        }
    }
}
