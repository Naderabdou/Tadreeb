<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\lessons\LessonsRequest;
use App\Models\Lesson;
use App\Models\User;
use App\Models\User_Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LessonsController extends Controller
{
   public function store(LessonsRequest $request){

       $data=$request->validated();
       if ($request->has('paperwork')) {
           $path = Storage::disk('public')->putFile('/lessons/paperwork', $request->paperwork);
           $data['paperwork'] = $path;
       }
       if ($request->has('video')) {
           $path = Storage::disk('public')->putFile('/lessons/video', $request->video);
           $data['video'] = $path;
       }
       Lesson::create($data);

       $message=' تم الإضافة بنجاح';
       return redirect()->back()->with('message', $message);

   }
   public function update($id , LessonsRequest $request){
       $lesson = Lesson::findorFail($id);
       $data= $request->validated();
       $lesson->update($data);
       $message = ' تم التعديل بنجاح';

       return redirect()->back()->with('message', $message);


   }
   public function destroy($id){
      Lesson::destroy($id);
       $message=' تم الحذف بنجاح';

       return redirect()->back()->with('message', $message);
}
public function show($id){
    $lesson = Lesson::findorFail($id);
    $auth= auth()->user()->id;
  $id= $lesson->users->map(function ($e){

            return $e->id;



   })->toArray();

    return view('user.courses.lesson',compact('lesson','id'));
}
public function active(Request $request){
       User_Lesson::create($request->all());
    $message=' تمت المشاهدة بنجاح';

    return redirect()->back()->with('message', $message);





}

}
