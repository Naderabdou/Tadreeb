<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    use HasFactory;
    protected $fillable=[
        'lesson_name',
        'video_link',
        'video',
        'paperwork',
        'paperwork_link',
        'lesson_desc',
        'order',
        'course_id'
    ];
    public function course(){
        return $this->belongsTo(Courses::class,'course_id');
    }
    public function users(){
        return $this->belongsToMany(User::class,'user__lessons','lesson_id','user_id');
    }
}
