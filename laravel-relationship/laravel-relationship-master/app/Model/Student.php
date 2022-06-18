<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'students';
    protected $fillable = ['name','email','phone'];


    public function result(){
        return $this->hasOne(Result::class);
    }

    public function collage(){
        return $this->hasOne(Collage::class);
    }


    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }
     
}
