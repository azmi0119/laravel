<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
            'name','price','year','slug','product_type',
    ];
}
