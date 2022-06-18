<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['name'];


    public function students(){
        return $this->belongsToMany(Student::class);
    }
}
