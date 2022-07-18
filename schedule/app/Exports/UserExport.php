<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */


    public function headings(): array
    {
        return [
            'id',
            'specialist_id',
            'name',
            'email',
            'password',
            'image',
            'phone',
            'birthdate',
            'gender',
            'address'
        ];
    }

    public function collection()
    {
        $select_doctor = [
            'id',
            'specialist_id',
            'name',
            'email',
            'password',
            'image',
            'phone',
            'birthdate',
            'gender',
            'address'
        ];
        return User::query()->where('role', 1)->select($select_doctor)->get();
    }
}
