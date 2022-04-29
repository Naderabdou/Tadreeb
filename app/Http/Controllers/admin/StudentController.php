<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\StudentsRequest;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
   public function index(){
       $users= User::where('role','=','student')->latest()->paginate(6);
       return view('admin.students.index',compact('users'));

   }
   public function create(){
       $countries= City::all();

       return view('admin.students.create',compact('countries'));
   }
   public function store(StudentsRequest $request){
       $data= $request->validated();
       $data['password']=Hash::make($request->password);
       User::create($data);
       $message= 'تم الإضافة بنجاح' ;
       return redirect()->route('admin.student.index')->with('message',$message);

   }
   public function destroy($id){

       User::destroy($id);
       $message=' تم الحذف بنجاح';
       return redirect()->back()->with('message', $message);

   }

}

