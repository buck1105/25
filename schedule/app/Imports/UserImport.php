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
            'password' => $row[4],
            'image' => $row[5],
            'phone' => $row[6],
            'birthdate' => (!empty($row[7])) ? $row[7] : now(),
            'gender' => (!empty($row[8])) ? $row[8] : 1,
            'address' => $row[9],
            'role' => $row[10],
        ]);


    }
}
