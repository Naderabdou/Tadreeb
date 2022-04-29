<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function name(Request $request){
        if ($request->ajax()) {
            $data = Courses::where('name', 'LIKE', $request->name . '%')->get()
            ;


            $output = '';

            if (count($data) > 0) {



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
                        $output .= '<a href="/register"><i class="fa fa-eye"></i> انشاء حساب </a>';




                    $output .= '</figure>';
                    $output .= '</figcaption>';
                    $output .= '</div>';

                }
                /*
                 * <div class="flash_empty text-center">
                                                <h1 class="animated shake">
                                                    <i class="fa fa-frown-o"></i>
                                                    عفواً لا يوجد لديك دورات في هذا القسم
                                                </h1>
                                            </div>
                 */

            } else {

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
}
