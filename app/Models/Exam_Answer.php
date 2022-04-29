<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam_Answer extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'question',
        'course_id',
        'answer'
    ];
    protected $casts=[
        'question'=>'json',
        'answer'=>'json'
    ];
    public function CourseExam(){
        return $this->belongsTo(Courses::class, 'course_id');
    }
    public function UserExam(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
