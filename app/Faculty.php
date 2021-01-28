<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    //
    protected $table = 'faculties';
    protected $fillable = ['faculty_id', 'code', 'name', 'category_id'];
}
