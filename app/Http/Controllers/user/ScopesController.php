<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Users_Scopes;
use Illuminate\Http\Request;

class ScopesController extends Controller
{

    public function store(Request $request){




     /*  $date=[];


        for ($i=0; $i<count($request->scope); $i++){
            array_push($date,['name'=>$request->scope[$i] , 'user_id'=>$request->id]);

        };*/





         $user=User::findorFail($request->id);
         $user->scopes()->syncWithoutDetaching($request->scope_id);
        $message=' تم الإضافة بنجاح';

        return redirect()->back()->with('message', $message);

    }

    public function delete($id,$user_id){

        $user=User::findorFail($user_id);
        $user->scopes()->detach($id);
        $message=' تم الحذف بنجاح';

        return redirect()->back()->with('message', $message);
    }
}
