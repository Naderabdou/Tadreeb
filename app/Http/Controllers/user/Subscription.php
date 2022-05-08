<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\String\u;

class Subscription extends Controller
{
    public function store(Request $request){
     $user= User::findorFail($request->user_id);
     $user->course()->syncWithoutDetaching($request->course_id);
        $message=' تم الاشتراك بنجاح ';

        return redirect()->route('user.profile')->with('message', $message);

    }
public function delete($id , $user_id){

     $user=   User::findorFail($user_id);
     $user->course()->detach($id);
    $message=' تم الانسحاب من الدورة بنجاح';

    return redirect()->back()->with('message', $message);

}
public function show($id){

            $course= Courses::findorFail($id);
            $rate= $course->rate;

          $rating_count=  $rate->map(function ($e){
              if ($e->user_id === auth()->user()->id)

               return $e->rate;
            })->toArray();
          $rating = array_filter($rating_count);
          global $count_rate;
          foreach ($rating as $rate){
              $count_rate = (int) $rate;
          }

            $id= $course->AnswerUser->map(function ($e){
                return $e->user_id;
            })->toArray();

            return view('user.courses.Subscription',compact('course','id','count_rate','rating'));


}
}
