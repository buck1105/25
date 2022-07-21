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
        // dd(date('Y/m/d', strtotime($row[6])));
        return new User([
            'specialist_id' => $row[2],
            'name' => $row[3],
            'email' => $row[4],
            'image' => $row[5],
            'phone' => $row[6],
            'birthdate' => (!empty($row[7])) ? date('Y/m/d', strtotime($row[7])) : now(),
            'gender' => (!empty($row[8])) ? $row[8] : 1,
            'address' => (!empty($row[9])) ? $row[9] : 'Ha Noi',
            'role' => 1,
        ]);


    }

    public function batchSize(): int { return 100; }
}


// specialist_id`, `name`, `email`, `image`, `phone`, `birthdate`, `gender`, `address`, `role`, `updated_at`, `created_at
