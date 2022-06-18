<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';

    protected $fillable = ['state '];


    public function countries(){
        return $this->hasOne(Country::class);
    }

    public function cities(){
        return $this->hasMany(City::class);
    }
}
