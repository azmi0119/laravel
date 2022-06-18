<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['user_id','post'];

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
