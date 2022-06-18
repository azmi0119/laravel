<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CountryController extends Controller
{
    public function index(Request $request){
        $data['country'] = DB::table('countries')->get();

        return view('Dropdown.country-state-city', $data);
    }

    public function getState(Request $request){
        $cid = $request->post('cid');

        $state = DB::table('states')->where('country_id', $cid)->get();

        $html = '<option value="" data-section1="">Select State</option>';

        foreach ($state as $list) {
            $html .= '<option value="'.$list->id.'" data-section1="">'.$list->name.'</option>';
            echo $html;
        }
    }

    public function getCity(Request $request){
        $sid = $request->post('sid');
        $city = DB::table('cities')->where('state_id', $sid)->get();
        $html = '<option value="">Select City</option>';

        foreach ($city as $value) {
               
            $html .= '<option value="'.$value->id.'">'.$value->name.'</option>';
            echo $html;
        }
    }
}
