<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    protected $table = 'results';
    protected $fillable = ['student_id','marks'];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
