<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student;
use App\Model\Result;
use App\Model\Collage;

class OneController extends Controller
{
    public function index(){
        $sinleData = Student::find(1);
        // dd($sinleData[0]->result);
        $allData = Student::with('result')->get();
        // dd($allData);


        $singleData = Result::find(1);
        // dd($singleData);
        $allData = Result::get();
        // dd($allData);

        $singlData = Student::find(1);
        // dd($singlData);
        // dd($singlData[1]->collage);

        $allData = Student::with('collage')->get();
        // dd($allData);
    }    

    
}
