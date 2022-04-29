<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Courses extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'course_id'
    ];
    protected $hidden=[
        'pivot'
    ];
    public function course_user(){
        return $this->belongsTo(Courses::class , 'course_id');
    }
}
