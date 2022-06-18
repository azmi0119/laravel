<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product\Product;

class ProductController extends Controller
{
    public function index(){
        $data['dataList'] = Product::all();
        dd($data['dataList']);
        return view('ecommerce.ecommerce-index')->with();
    }
}
