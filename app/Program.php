<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $table = 'programmes';
    protected $fillable = ['programme_id', 'code', 'name', 'category_id'];
}
