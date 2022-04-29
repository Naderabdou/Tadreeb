<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\profile\UpdateProfileUserRequest;
use App\Models\City;
use App\Models\Courses;
use App\Models\ExamInstructor;
use App\Models\Lesson;
use App\Models\ScopesAdmin;
use App\Models\User;
use App\Models\User_Courses;
use App\Models\Users_Scopes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\Tags\Covers;

class UserProfileController extends Controller
{
    public function profile()

    {


        $id=Auth::user()->id;


        /// scope user //
        $scope=User::findorFail($id)->scopes()->get();
        //// end ///

         /// cv instructor ///
        $cv=User::findorFail($id)->cv()->get();
        //// end ////


        //// get interested id user ///
        $scopeId=[];
       foreach ($scope as $scope_id){
        array_push($scopeId, $scope_id->id);
        ///// end /////


}// $courses_scope=Courses::whereJsonContains('gender_student',$type)->whereIn('Scope_id',$scopeId)->get();

        ///// courses active ////
        $courses_active=ScopesAdmin::with(['courses'=>function($q){
        $type=Auth::user()->gender;
        $d= $q->whereJsonContains('gender_student',$type)->where('status','=','active')->get();
}       ])->has('courses')->whereIn('id',$scopeId)->get();
       ///// end courses active ////



$paginate_courses = Courses::paginate(6)->items();

       ///// courses un active ///
        $courses_unactive=ScopesAdmin::with(['courses'=>function($q){
            $type=Auth::user()->gender;
            $d= $q->whereJsonContains('gender_student',$type)->where('status','=','unactive')->get();
        }])->has('courses')->whereIn('id',$scopeId)->get();
        ///// end courses un active/////



      /// all city ///
       $countries = City::all();
       $city = City::pluck('name', 'id');
       /// end ///




       /// all interested is admin created ///
       $scopeAdmin=ScopesAdmin::all();
       /// end interested ////


        //// pluck interested for update course //
        $scope_admin=ScopesAdmin::pluck('name','id');
        /// end ////




        /// course instructor ///
        $course=User::findorFail($id)->courses()->with(['questions'=>function($q){
        $q->with('answer');
         }])->get();
        ///// end course instructor ///










        $user = User::findORFail($id);
        //// answer exam user ///
        $certf= $user->Answer;
        ///////


        ///// get instructor_id  from courses subscribed
        $sup=  $user->course->map(function ($e){

            return $e->Scope_id;
        })->toArray() ;
        ///// end ///

        ///// get course active_id  from courses subscribed
         $active=  $user->course->map(function ($e){

                if ($e->status == 'active'){
                return $e->id;
            }
        })->toArray() ;


        //// get course inactive_id  from courses subscribed

        $inactive=  $user->course->map(function ($e){
            if ( $e->status == 'unactive'){
                return $e->id;
            }
        })->toArray() ;
        ////// end ///
        //// courses current ///

        $current_courses= ScopesAdmin::with(['courses'=>function($q) use($active){
            $q->whereIn('id',array_filter($active));
        }])->whereIn('id',$sup)->has('courses')->get();
        //// end  ////



        $finish_courses= ScopesAdmin::with(['courses'=>function($q) use($active){
            $q->with('AnswerUser')->has('AnswerUser')->whereIn('id',array_filter($active));
        }])->whereIn('id',$sup)->has('courses')->get();


         //// coming course ///
        $coming_courses=ScopesAdmin::with(['courses'=>function($q) use($inactive){
            $q->whereIn('id',$inactive);

        }])->whereIn('id',$sup)->has('courses')->get();
        /// end ///


       //// test //
        $test= $user->course()->get();







      //$test2= $user->course()->with('AnswerUser')->has('AnswerUser')->get();

      $active=   $test->where('status','active');
$e=Courses::all();
      $unactive= $test->where('status','unactive');
        return view('user.profile.index', compact('user','test','finish_courses', 'countries','certf','city','scopeAdmin','scope','course','scope_admin','courses_active','cv','courses_unactive','coming_courses','current_courses','active','unactive',
        'paginate_courses'));
    }

    public function update(UpdateProfileUserRequest $request, $id)
    {
        $date = $request->validated();
        $update_profile = User::findOrFail($id);
        if ($request->has('img')) {
            $path = Storage::disk('public')->putFile('/profile', $request->img);
            $date['img'] = $path;
        }


        $update_profile->update($date);
        $message = ' تم التعديل بنجاح';

        return redirect()->back()->with('message', $message);

    }

    public function update_password(Request $request)
    {
        $request->validate([
            'old_pass' => 'required',
            'new_pass' => 'required|string|min:6|confirmed',
            'new_pass_confirmation' => 'required',
        ]);
        $user = Auth::user();

        if (!Hash::check($request->old_pass, $user->password)) {

            return back()->with('error', 'Current password does not match!');
        }
        $user->password = Hash::make($request->new_pass);
        $user->save();
        $message = ' تم التعديل بنجاح';


        return redirect()->back()->with('message', $message);

    }
}
