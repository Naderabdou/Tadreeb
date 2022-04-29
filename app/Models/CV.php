<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;
    protected $fillable=[
      'cv_link',
      'cv',
        'instructor_id'
    ];
    public function user(){
        return $this->hasOne(User::class,'instructor_id');
    }

}
