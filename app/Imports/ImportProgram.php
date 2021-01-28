<?php

namespace App\Imports;

use App\Program;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportProgram implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Program([
            //
            'programme_id' => @$row[0],
            'code' => @$row[1],
            'name' => @$row[2],
            'category_id' => @$row[3],
        ]);
    }
}
