<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    //
    protected $table = 'campus';
    protected $fillable = ['campus_id', 'code', 'name', 'category_id'];
}
