<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\StateImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{

    public function import(Request $request) {
        $file = $request->file;
        if(isset($file)) {
            Excel::import(new StateImport, $file);
            return back()->with('success','Data imported successfully!');
        }

        return redirect()->route('home')->with('error','Please select a excel file !');
    }
}
