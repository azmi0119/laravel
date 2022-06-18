<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $table = 'villages';
    protected $fillable = ['village'];


    public function cities(){
        return $this->hasMany(City::class);
    }
}
