<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\Exam\ExamRequest;
use App\Models\Courses;
use App\Models\Exam_Answer;
use App\Models\ExamInstructor;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Question;
use Illuminate\Http\Request;

class ExamController extends Controller
{
   public function store(ExamRequest $request){


       $data=$request->validated();

         $question = Question::create(
             [
                 'question'=>$data['question'],
                 'course_id'=>$data['course_id'],
                 'instructor_id'=>$data['instructor_id']
             ]
         );

      $adata=[];

      if (count($data['answer'] )== count($data['type'])){
          for ($i=0; $i<count($request->answer); $i++){
              array_push($adata,['answer'=>$data['answer'][$i],'type'=>$data['type'][$i],'created_at'=>now(),'updated_at'=>now()]);
          }
      }
      $question->answer()->createMany($adata);


       $message=' تم الإضافة بنجاح';
       return redirect()->back()->with('message', $message);



   }
   public function delete($id){
       Question::destroy($id);
       $message=' تم الحذف بنجاح';

       return redirect()->back()->with('message', $message);
   }

   public function update(ExamRequest $request , $id){
       $data=$request->validated();

       Question::destroy($id);
       $question = Question::create(
           [
               'question'=>$data['question'],
               'course_id'=>$data['course_id'],
               'instructor_id'=>$data['instructor_id']
           ]
       );

       $adata=[];

       if (count($data['answer'] )== count($data['type'])){
           for ($i=0; $i<count($request->answer); $i++){
               array_push($adata,['answer'=>$data['answer'][$i],'type'=>$data['type'][$i],'created_at'=>now(),'updated_at'=>now()]);
           }
       }
       $question->answer()->createMany($adata);
       $message = ' تم التعديل بنجاح';

       return redirect()->back()->with('message', $message);






   }
   public function show($id){
       $questions= Courses::findorFail($id)->questions()->get();
       return view('user.courses.exam',compact('questions'));

   }
   public function answer(Request $request){
     $data= $request->validate([
          'user_id'=>'',
          'course_id'=>'',
          'answer'=>'required',
          'question'=>''
      ]);
     Exam_Answer::create($data);
       $message = ' تم الإجابة بنجاح يرجا الانتظار لكم يتم التصحيح واستلام الشهادة';

       return redirect()->route('user.subscription.show',$data['course_id'])->with('message',$message);
   }
   public function certf($id,$course_id){
       $course= Courses::findorFail($course_id);
     $d=  $course->questions->map(function ($e){
          return $e;
       })
     ;
     $answer_id=[];
     foreach ($d as $ds ){
         foreach ($ds->answer as $answer){
             if ($answer->type === 'Right'){
                array_push($answer_id,$answer->id);
             }

         }
     }

       $certf= Exam_Answer::findorFail($id);
       $answer_user =  $certf->answer;
global $x;
  $iq= count($certf->question);
       $answer=array_filter($answer_id);
       for ($i = 0; $i< count($answer); $i ++){
           if ($answer[$i] === (int) $answer_user[$i]){
               $x++;
          ;
           }

       }
       global  $degree;
      if ($iq === $x){
          $degree= 'ممتاز';
      }elseif ($x >= $iq * 3/4 && $iq * 1/2<= $x){
          $degree = 'جيد جدا';

      }elseif ($x <= $iq * 1/2 && $x >= $iq * 1/4 ){
          $degree = 'جيد';
      }else{
          $degree = 'ساااقط';
      }













       return view('user.courses.certif',compact('certf','degree'));

   }
  /* public function download($id){
       $certf= Exam_Answer::findorFail($id);
       $pdf = PDF::loadView('user.courses.downloadcertif', compact('certf'));
       return $pdf->inline($certf->CourseExam->name.'.pdf');
   }*/
}
