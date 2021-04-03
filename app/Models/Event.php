<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_uz',
        'title_kiril',
        'title_ru',
        'title_en',
        'description_uz',
        'description_kiril',
        'description_ru',
        'description_en',
        'body_uz',
        'body_kiril',
        'body_ru',
        'body_en',
        'address_uz',
        'address_kiril',
        'address_ru',
        'address_en',
        'image'
    ];
}
