<?php

namespace App\simplecrud;

use Illuminate\Database\Eloquent\Model;

class SimpleCrud extends Model
{
    protected $table = 'simple_cruds';

    protected $fillable = ['name','father_name','degisnation','email','college','occupation','income','course','address','gender'];
}
 