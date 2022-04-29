<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamInstructor extends Model
{
    use HasFactory;
    protected $fillable=[
        'question_id',
        'answer',

        'type',
    ];


    public function questions(){
        return $this->belongsTo(Question::class , 'question_id');
    }


}
