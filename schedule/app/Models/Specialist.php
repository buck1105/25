<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\User;
use Nicolaslopezj\Searchable\SearchableTrait;


class Specialist extends Model
{
    use HasFactory;
    use SearchableTrait;

    // protected $searchable = [
    //     'columns' => [
    //         'specialists.name' => 10,
    //         'specialists.description' => 5,
    //         'specialists.id' => 5,
    //     ]
    // ];

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


    /**
     * Specialist has many Users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = specialist_id, localKey = id)
        return $this->hasMany(User::class);
    }
}
