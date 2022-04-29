<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Alert;
use App\Models\Courses;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AlertsController extends Controller
{
    public function store(Request $request){
      $data=  $request->validate([
           'title'=>'required|string',
           'body'=>'required|string',
           'course_id'=>'',
           'instructor_id'=>''
        ]);
      Alert::create($data);
        $message=' تم الإضافة بنجاح';
        return redirect()->back()->with('message', $message);
    }
    public function show($id){
       $course= Courses::findorFail($id);
       return view('user.courses.alert',compact('course'));

    }
    public function update($id,Request $request){
        $data=  $request->validate([
            'title'=>'required|string',
            'body'=>'required|string',
            'course_id'=>'',
            'instructor_id'=>''
        ]);
       $alert= Alert::findorFail($id);
       $alert->update($data);
        $message=' تم التعديل بنجاح';
        return redirect()->back()->with('message', $message);
    }
    public function delete($id){
        Alert::destroy($id);
        $message=' تم الحذف بنجاح';
        return redirect()->back()->with('message', $message);

    }
}
