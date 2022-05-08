<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\courese\CoursesRequest;
use App\Models\Admin;
use App\Models\Courses;
use App\Models\ScopesAdmin;
use App\Models\User;
use App\Notifications\NewCourseNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    public function index(){
        $user = User::findORFail(auth()->user()->id);
        $test= $user->course()->get();
        $active=   $test->where('status','active');
        $unactive= $test->where('status','unactive');
        $paginate_courses = Courses::paginate(6);

        $scope = ScopesAdmin::all();


        return view('user.dashboard',compact('paginate_courses','scope','active','unactive'));
    }
    public function create(){
        $scope=ScopesAdmin::pluck('name','id');
        $course=User::findorFail(auth()->user()->id)->courses()->get();


        return view('user.courses.create',compact('scope','course'));
    }
    public function store(CoursesRequest $request){

      $data=  $request->validated();

        if ($request->has('img')) {
            $path = Storage::disk('public')->putFile('/courses/image', $request->img);
            $data['img'] = $path;
        }
        if ($request->has('video')) {
            $path = Storage::disk('public')->putFile('/courses/video', $request->video);
            $data['video'] = $path;
        }
        Courses::create($data);


        $message=' تم الاضافة بنجاح';

        return redirect()->route('user.profile')->with('message', $message);

    }
    public function update($id,CoursesRequest $request){
        $data=$request->validated();
        $course_update= Courses::findorFail($id);
        if ($request->has('img')) {
            $path = Storage::disk('public')->putFile('/courses/image', $request->img);
            $data['img'] = $path;
        }
        if ($request->has('video')) {
            $path = Storage::disk('public')->putFile('/courses/video', $request->video);
            $data['video'] = $path;
        }
        $course_update->update($data);
        $message = ' تم التعديل بنجاح';

        return redirect()->back()->with('message', $message);

    }
    public function delete($id){
        Courses::destroy($id);
        $message = ' تم حذف بنجاح';

        return redirect()->back()->with('message', $message);
    }
    public function show($id){

            $course= Courses::findorFail($id);


            return view('user.courses.show',compact('course','id'));







    }

}
