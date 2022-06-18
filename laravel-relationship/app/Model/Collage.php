<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Collage extends Model
{
    protected $table = 'collages';

    protected $fillable = ['student_id','collage'];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
