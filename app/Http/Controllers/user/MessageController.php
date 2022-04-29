<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\User;
use App\Notifications\NewMessageNotify;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(Request $request){
         $course= Courses::findorFail($request->course_id);
        $users= $course->user_sup;
        if (count($users) > 0){
            $data= $request->massage;
            $user_id=  $users->map(function ($e){
                return $e->user_id;
            })->toArray();


            $user= User::whereIn('id',$user_id)->get();

            foreach($user as $users){
                Notification::route('mail' , $users->email) //Sending mail to subscriber
                ->notify(new NewMessageNotify($data,$users,$course)); //With new post

                $message = ' تم الإرسال بنجاح';

                return redirect()->back()->with('message', $message);


            }
        }else{
            $message = 'لا يوجد متدربين اشتركوا في هذا الدورة حتي الآن';

            return redirect()->back()->with('message', $message);


        }

}}
