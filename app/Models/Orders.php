<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'chec_id',
        // 'service_id',
        // 'service_name',
        // 'service_qty',
        // 'subtotal',
        // 'vat',
        // 'total',
    ];

    function checkout(){
        // return $this->hasOne(Checkout::class,'id','chec_id');
    }
}
