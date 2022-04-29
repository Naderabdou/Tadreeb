<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\CV;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function store(Request $request){
      $data=  $request->validate([
            'cv_link'=>'nullable|url',
            'cv'=>'nullable|string',
          'instructor_id'=>'string'
        ]);

      CV::create($data);
        $message=' تم الاضافة بنجاح';

        return redirect()->back()->with('message', $message);

    }
}
