<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\ScopesAdmin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
   public function index(){
       $user = User::findORFail(auth()->user()->id);
       $test= $user->course()->get();
       $active=   $test->where('status','active');
       $unactive= $test->where('status','unactive');
       $paginate_courses = Courses::paginate(6);
       $scope = ScopesAdmin::all();


       return view('user.dashboard',compact('paginate_courses','active','unactive','scope'));

   }
   public function authCourse(){
       $paginate_courses = Courses::paginate(6);

       return view('user.index',compact('paginate_courses'));

   }
   public function search(Request $request){
       if ($request->ajax()){
          $data= $courses=ScopesAdmin::findorFail($request->name)->courses;
           $output = '';
           if (count($data) > 0){

               $user = User::findORFail(auth()->user()->id);
               $test= $user->course()->get();
               $active=   $test->where('status','active');
               $unactive= $test->where('status','unactive');
               $scope_name=ScopesAdmin::findorFail($request->name);
               $name=$scope_name->name;
               foreach ($data as $row) {
                   $output .= '<div class="block col-md-4">';

                   $output .= '<figure>';
                   $output .= '<div><img src="/storage/'.$row->img.'" alt="img05" class="img-responsive"></div>
';

                   $output .= '<figcaption class="text-right">';

                   $output .= '<h1> اسم الكورس  :   <span>' . $row->name . '</span></h1>';
                   $output .= '<h1> اسم المدرس  :   <span>' . $row->user->name . '</span></h1>';
                   $output .= '<h1> عدد الطلبة المشتركة  :   <span>' . $row->user_sup->count() . '</span></h1>';
                   $output .= '<h1> تاريخ بداية الكورس  :   <span>' . \Carbon\Carbon::parse($row->created_at)->translatedFormat('l j F Y ') . '</span></h1>';
                   $output .= '<h1>تقييم الكورس  :   <span></span></h1>';
                   if ($active->contains($row->id) || $unactive->contains($row->id)){
                       $output .= '<a href="user/subscription/show/'.$row->id.'"><i class="fa fa-eye"></i> مشاهدة الكورس </a>';

                   }else{
                       $output .= '<a href="user/courses/show/'.$row->id.'"><i class="fa fa-eye"></i>  اشتراك ف الكورس </a>';

                   }


                   $output .= '</figure>';
                   $output .= '</figcaption>';
                   $output .= '</div>';

               }


           }else{
               $output .= '<div class="flash_empty text-center">' ;

               $output .='<h1 class="animated shake">' ;
               $output .='<i class="fa fa-frown-o"></i>
                                    عفواً لا يوجد لديك دورات في هذا القسم' ;
               $output .='</h1>' ;

               $output  .= '</div>';
           }
           return Response($output);




       }



   }



   public function ajax(Request $request)
   {
       if ($request->ajax()) {
           $data = Courses::where('name', 'LIKE', $request->name . '%')->get()
              ;


           $output = '';

           if (count($data) > 0) {


               $user = User::findORFail(auth()->user()->id);
               $test= $user->course()->get();
               $active=   $test->where('status','active');
               $unactive= $test->where('status','unactive');
               foreach ($data as $row) {
                   $output .= '<div class="block col-md-4">';

                   $output .= '<figure>';
                   $output .= '<div><img src="/storage/'.$row->img.'" alt="img05" class="img-responsive"></div>
';

                   $output .= '<figcaption class="text-right">';

                   $output .= '<h1> اسم الكورس  :   <span>' . $row->name . '</span></h1>';
                   $output .= '<h1> اسم المدرس  :   <span>' . $row->user->name . '</span></h1>';
                   $output .= '<h1> عدد الطلبة المشتركة  :   <span>' . $row->user_sup->count() . '</span></h1>';
                   $output .= '<h1> تاريخ بداية الكورس  :   <span>' . \Carbon\Carbon::parse($row->created_at)->translatedFormat('l j F Y ') . '</span></h1>';
                   $output .= '<h1>تقييم الكورس  :   <span></span></h1>';
                   if ($active->contains($row->id) || $unactive->contains($row->id)){
                       $output .= '<a href="user/subscription/show/'.$row->id.'"><i class="fa fa-eye"></i> مشاهدة الكورس </a>';

                   }else{
                       $output .= '<a href="user/courses/show/'.$row->id.'"><i class="fa fa-eye"></i>  اشتراك ف الكورس </a>';

                   }


                   $output .= '</figure>';
                   $output .= '</figcaption>';
                   $output .= '</div>';

               }


           } else {

               $output .= '<div class="flash_empty text-center">' ;

                   $output .='<h1 class="animated shake">' ;
                   $output .='<i class="fa fa-frown-o"></i>
                                    عفواً لا يوجد لديك دورات في هذا القسم' ;
                   $output .='</h1>' ;

               $output  .= '</div>';
           }

           return Response($output);
       }}}




