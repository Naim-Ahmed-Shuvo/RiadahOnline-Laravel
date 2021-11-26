<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSlider extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'title_ar',
        'image',
        'sub_title',
        'sub_title_ar',
    ];
}
