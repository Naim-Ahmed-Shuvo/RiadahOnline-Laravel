<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'checkout_id',
        'service_id',
        'service_name',
        'service_qty',
        'subtotal',
        'vat',
        'total',
        'status',
    ];

    function checkout(){
        return $this->hasOne(Checkout::class,'id','checkout_id');
    }
}
