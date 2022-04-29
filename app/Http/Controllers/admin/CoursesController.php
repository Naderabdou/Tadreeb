<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\courese\CoursesRequest;
use App\Models\Courses;
use App\Models\ScopesAdmin;
use App\Models\User;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(){
      $course=  Courses::latest()->paginate(6);
      return view('admin.course.index',compact('course'));

    }
    public function create(){
        $scope=ScopesAdmin::all();
        $course=Courses::all();
        $instructor= User::where('role','=','instructor')->get();


        return view('admin.course.create',compact('scope','course','instructor'));
    }
    public function store(CoursesRequest $request){
      $data=  $request->validated();
         Courses::create($data);
        $message= 'تم الإضافة بنجاح' ;
        return redirect()->route('admin.course.index')->with('message',$message);
    }
    public function destroy($id){
        Courses::destroy($id);
        $message=' تم الحذف بنجاح';
        return redirect()->back()->with('message', $message);
    }
    public function status(Request $request,$id){

        $status=Courses::findorFail($id);
        $status->status=$request->status;
        $status->save();

        $message=' تم التغير بنجاح';

        return redirect()->back()->with('message', $message);;
    }
}
