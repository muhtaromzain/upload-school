<?php

namespace App\Imports;

use App\Faculty;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportFaculty implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Faculty([
            //
            'faculty_id' => @$row[0],
            'code' => @$row[1],
            'name' => @$row[2],
            'category_id' => @$row[3],
        ]);
    }
}
