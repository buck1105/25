<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'specialist_id',
        'gender',
        'image',
        'role',
        'birthdate',
        'address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getGenderNameAttribute()
    {
        if ($this->gender == 0) {
            return "Nam";
        }
        return "Nữ";
    }

    public function getSpecialistNameAttribute()
    {
        if ($this->specialist_id == 0) {
            return "Đa khoa";
        }
        elseif ($this->specialist_id==1){
            return "Nha khoa";
        }
        return "Ung bướu";
    }
}
