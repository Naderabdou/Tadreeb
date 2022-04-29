<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable=[
      'name',
      'prerequisite',
      'video',
      'video_link',
      'courses_desc',
      'gender_student',
      'courses_type',
      'courses_cost',
      'Certificate_name',
      'Donor',
      'Certification_type',
      'Certification_cost',
      'instructor_id',
      'status',
      'Scope_id',
        'img',
        'start_date',
        'end_date'
    ];
    protected $casts=[
        'gender_student'=>'json'
    ];

    public function user(){
        return $this->belongsTo(User::class,'instructor_id');
    }
    public function scope(){
        return $this->belongsTo(ScopesAdmin::class,'Scope_id');
    }
    public function lessons(){
        return $this->hasMany(Lesson::class,'course_id');
    }
    public function questions(){
        return $this->hasMany(Question::class,'course_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user__courses', 'user_id', 'course_id');
    }
    public function alerts (){
        return $this->hasMany(Alert::class,'course_id');
    }
    public function AnswerUser(){
        return $this->hasMany(Exam_Answer::class, 'course_id');
    }
    public  function user_sup(){
        return $this->hasMany(User_Courses::class , 'course_id');
    }
    public function rate(){
        return $this->hasMany(Rate::class,'course_id');
    }



}
