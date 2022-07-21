<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Specialist;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'specialist_id',
        'name',
        'email',
        'password',
        'image',
        'phone',
        'role',
        'birthdate',
        'gender',
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


   /**
    * User has one Specialist.
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
   public function specialist()
   {
       // hasOne(RelatedModel, foreignKeyOnRelatedModel = user_id, localKey = id)
       return $this->belongsTo(Specialist::class, 'specialist_id', 'id');
   }
}
