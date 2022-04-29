<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Lesson extends Model
{
    use HasFactory;
    protected  $fillable=[
        'lesson_id',
        'user_id',
        'course_id',
        'status'
    ];

}
