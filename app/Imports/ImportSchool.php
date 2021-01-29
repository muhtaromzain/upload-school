<?php

namespace App\Imports;

use App\School;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportSchool implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new School([
            //
            'district' => @$row[1],
            'type_of_school' => @$row[2],
            'code' => @$row[3],
            'name' => @$row[4],
            'address' => @$row[5],
            'postcode' => @$row[6],
            'city' => @$row[7],
            'tel_no' => @$row[8],
            'fax_no' => @$row[9],
            'email' => @$row[10],
            'location' => @$row[11],
            'school_category' => @$row[12],
            'enrollment' => @$row[13],
            'no_of_teachers' => @$row[14],
            'longitude' => @$row[15],
            'latitude' => @$row[16],
            'state' => @$row[17],
        ]);
    }
}
