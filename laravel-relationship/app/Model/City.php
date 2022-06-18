<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    protected $fillable = ['city '];


    public function states(){
        return $this->hasMany(State::class);
    }

    public function villages(){
        return $this->hasMany(Village::class);
    }
}
