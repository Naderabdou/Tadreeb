<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\StudentsRequest;
use App\Models\City;
use App\Models\Courses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class InstructorsController extends Controller
{
    public function index(){
        $users= User::where('role','=','instructor')->latest()->paginate(6);
        return view('admin.instructor.index',compact('users'));

    }
    public function create(){
        $countries= City::all();

        return view('admin.instructor.create',compact('countries'));
    }
    public function store(StudentsRequest $request){
        $data= $request->validated();
        $data['password']=Hash::make($request->password);
        User::create($data);
        $message= 'تم الإضافة بنجاح' ;
        return redirect()->route('admin.instructor.index')->with('message',$message);

    }
    public function destroy($id){

        User::destroy($id);
        $message=' تم الحذف بنجاح';
        return redirect()->back()->with('message', $message);

    }
    public function status(Request $request,$id){

        $status=User::findorFail($id);
        $status->status=$request->status;
        $status->save();

        $message=' تم التغير بنجاح';

        return redirect()->back()->with('message', $message);;
    }
    public function edit($id){
       $courses= User::findorFail($id)->courses()->latest()->paginate(6);
       return view('admin.instructor.courses',compact('courses'));

    }
    public function sub($id){
      $sup=  Courses::findorFail($id)->user_sup()->latest()->paginate(6);
        return view('admin.instructor.subscription',compact('sup'));

    }

}
