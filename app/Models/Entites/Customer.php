<?php

namespace App\Models\Entites;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "user_id",
        'name',
        'phone',
        'address',
        'sex'
    ];


    protected $rules = [
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:14|unique',
        'address' => 'string|max:255',
        'sex' => 'string|max:2',
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

}

