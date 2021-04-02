<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_uz',
        'title_cyril',
        'title_ru',
        'title_en',
        'description_uz',
        'description_cyril',
        'description_ru',
        'description_en',
        'body_uz',
        'body_cyril',
        'body_ru',
        'body_en',
        'image',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
