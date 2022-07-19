<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'specialists';

     /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
     protected $fillable = ['id','name', 'description'];
 }
