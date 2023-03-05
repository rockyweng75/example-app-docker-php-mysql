<?php

namespace App\Models\Entites;
use Illuminate\Database\Eloquent\Model;

class Produect extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'suppliers_seq',
        'version',
        'price'
    ];

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
}

