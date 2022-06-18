<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HTMLTOPDF extends Model
{
    protected $table = 'html_to_pdf';
    protected $fillable = ['name','role_number','collage'];
}
