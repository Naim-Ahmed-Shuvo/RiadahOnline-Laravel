<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_ar',
        'cat_id',
        'description',
        'description_ar',
        'image',
        'tags',
        'price',
        'information',
        'vendor',
        'reviews',
        'information_ar'
    ];
}
