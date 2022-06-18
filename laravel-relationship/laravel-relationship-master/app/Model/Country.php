<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $fillable = ['country '];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function states(){
        return $this->hasMany(State::class);
    }
}
