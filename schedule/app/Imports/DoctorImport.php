<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class DoctorImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        dd('dasdasda');
//        return new User([
//            'specialist_id' => $row['specialist_id'],
//            'name' => $row['name'],
//            'email' => $row['email'],
//            'password' => bcrypt($row['password']),
//            'image' => $row['image'],
//            'phone' => $row['phone'],
//            'birthdate' => $row['birthdate'],
//            'gender' => $row['gender'],
//            'address' => $row['address'],
//            'role' => $row['role'],
//        ]);
    }
}
