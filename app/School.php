<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $table = 'schools';
    protected $fillable = ['code', 'type_of_school', 'name', 'address', 'postcode', 'state', 'district', 'city', 'tel_no', 'fax_no', 'email', 'location', 'school_category', 'enrollment', 'no_of_teachers', 'longitude', 'latitude', 'created_by', 'updated_by', 'deleted_at', 'deleted_by'];
}
