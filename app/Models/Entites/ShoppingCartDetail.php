<?php

namespace App\Models\Entites;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customers_seq'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}

