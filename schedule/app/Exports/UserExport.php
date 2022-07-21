<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UserExport implements FromCollection,  WithHeadings, WithStyles, ShouldAutoSize
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
            'image',
            'phone',
            'birthdate',
            'gender',
            'address'
        ];
    }

    // implements WithMapping
    // public function map($user): array {
    //     return [ $user->name, $user->email, ];
    // }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }

    // public function columnWidths(): array
    // {
    //     return [
    //         'id' => 34,
    //     ];
    // }

    public function collection()
    {
        $select_doctor = [
            'id',
            'specialist_id',
            'name',
            'email',
            'image',
            'phone',
            'birthdate',
            'gender',
            'address'
        ];
        return User::query()->where('role', 1)->orWhere('role', 2)->select($select_doctor)->get();
    }
}
