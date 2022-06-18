<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';
    protected $fillable = ["shop_name", "description", "address", "latitude", "longitude", "image"];
}
