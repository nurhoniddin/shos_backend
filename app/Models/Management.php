<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname_uz',
        'fname_kiril',
        'fname_ru',
        'fname_en',
        'birthday_uz',
        'birthday_kiril',
        'birthday_ru',
        'birthday_en',
        'education_uz',
        'education_kiril',
        'education_ru',
        'education_en',
        'work_ex_uz',
        'work_ex_kiril',
        'work_ex_ru',
        'work_ex_en',
    ];
}
