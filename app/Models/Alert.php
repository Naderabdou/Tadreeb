<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'body',
        'course_id',
        'instructor_id'
    ];
    public function user(){
        return $this->belongsTo(User::class,'instructor_id');

    }
    public function course(){
        return $this->belongsTo(Courses::class,'course_id');
    }
}
