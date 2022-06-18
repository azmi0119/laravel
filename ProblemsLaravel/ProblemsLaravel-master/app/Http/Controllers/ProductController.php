<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $product = Product::create([
            'name' => 'name',
            'price' => 'price',
            'year' => 'year',
            'product_type' => 'product_type'
        ]);

        return response()->json([
            'success' => 'Observer are created successfully ! Please check your Database'
        ]);
    }
}
 