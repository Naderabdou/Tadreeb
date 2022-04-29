<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function rate(Request $request){
        if ($request->ajax()){
            Rate::create([
                'rate'=>$request->name,
                'user_id'=>$request->user_id,
                'course_id'=>$request->course_id

            ]);
           $data= Rate::where('user_id','=',$request->user_id)->get();
            $output = '';
           if (count($data) > 0){
              for ($i=0; $i<$request->name; $i++){




                  $output .= '<li>';
                  $output .= '<a class="rate">';

                  $output .= '<i class="fa fa-star active "></i>';

                  $output .= '</a>';


                  $output .= '</li>';


              }
               return Response($output);

        }}
}}
