<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new User([
            'specialist_id' => $row[1],
            'name' => $row[2],
            'email' => $row[3],
            'image' => $row[4],
            'phone' => $row[5],
            'birthdate' => (!empty($row[6])) ? $row[6] : now(),
            'gender' => (!empty($row[7])) ? $row[7] : 1,
            'address' => (!empty($row[8])) ? $row[8] : 'Ha Noi',
            'role' => 1,
        ]);


    }
}
