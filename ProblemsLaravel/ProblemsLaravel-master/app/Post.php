<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['title','description','name','slug','unique_id','message','cat'];

    public function setTitleAttribute($value) {
        
        $this->attributes['title'] = ucwords($value);
    }
}
 