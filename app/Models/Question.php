<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable=[
        'question',
        'course_id',
        'instructor_id'
    ];
    public function answer(){
        return $this->hasMany(ExamInstructor::class,'question_id');
    }
    public function courses(){
        return $this->belongsTo(Courses::class,'course_id');
    }
    public static function boot() {
        parent::boot();

        static::deleting(function($Question) { // before delete() method call this
            $Question->answer()->delete();
            // do the rest of the cleanup...
        });
    }


}
