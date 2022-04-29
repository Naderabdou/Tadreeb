<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function show($id){
     $course  = Courses::findorFail($id);
        return view('user.courses.comments',compact('course'));
}
}
