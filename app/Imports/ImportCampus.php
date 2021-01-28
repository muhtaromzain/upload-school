<?php

namespace App\Imports;

use App\Campus;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportCampus implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Campus([
            //
            'campus_id' => @$row[0],
            'code' => @$row[1],
            'name' => @$row[2],
            'category_id' => @$row[3],
        ]);
    }
}
