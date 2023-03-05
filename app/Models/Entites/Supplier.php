<?php

namespace App\Models\Entites;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'principal',
        'phone'
    ];

}

