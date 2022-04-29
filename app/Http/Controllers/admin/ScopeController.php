<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ScopesAdmin;
use Illuminate\Http\Request;

class ScopeController extends Controller
{
    public function index(){
        $scope= ScopesAdmin::all();
        return view('admin.scope.index',compact('scope'));
    }
    public function store(Request $request){
        $data = $request->validate([
            'name'=>'string|required'
        ]);
        ScopesAdmin::create($data);
        $message= 'تم الإضافة بنجاح' ;
        return redirect()->back()->with('message',$message);
    }
    public function destroy($id){
        ScopesAdmin::destroy($id);
        $message= 'تم الحذف بنجاح' ;
        return redirect()->back()->with('message',$message);

    }
    public function update(Request $request , $id){
      $scope=  ScopesAdmin::findorFail($id);
        $data = $request->validate([
            'name'=>'string|required'
        ]);
        $scope->update($data);
        $message= 'تم التعديل بنجاح' ;
        return redirect()->back()->with('message',$message);

    }
}
