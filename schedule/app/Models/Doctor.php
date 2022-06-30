<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';

    protected $fillable = ['name', 'email', 'password', 'avatar', 'phone', 'birthdate', 'gender', 'address'];

    public function getRoleNameAttribute()
    {
        if ($this->role == 1) {
            return "Bác sĩ";
        }
        return "Y tá";
    }

    public function getGenderNameAttribute()
    {
        if ($this->gender == 0) {
            return "Nam";
        }
        return "Nữ";
    }

}
