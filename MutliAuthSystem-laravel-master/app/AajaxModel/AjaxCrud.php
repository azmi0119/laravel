<?php

namespace App\AajaxModel;

use Illuminate\Database\Eloquent\Model;

class AjaxCrud extends Model
{
    protected $fillable = ['name','father_name','degisnation','email','college','occupation','income','course','address','gender'];
}
