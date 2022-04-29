<?php

use App\Http\Controllers\admin\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/welcome',function (){
   return view('welcome');
})->name('admin');


Route::get('login-admin', [AuthController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('login-admin', [AuthController::class, 'login'])->name('admin.login');
Route::get('logout-admin', [AuthController::class, 'logout'])->name('logout.admin');
Route::get('register-admin', [AuthController::class, 'registerForm'])->name('admin.register.form');
Route::post('register-admin', [AuthController::class, 'register'])->name('admin.register');
Route::get('logout-admin', [AuthController::class, 'logout'])->name('logout.admin');

Route::group(['prefix'=>'ad','as'=>'admin.','middleware'=>'admin'],function (){
   Route::get('/',function (){
      return view('admin.dashboard');
   })->name('dashboard') ;


   Route::resource('/student','StudentController');
    Route::resource('/instructor','InstructorsController');
    Route::post('status/users/{id}','InstructorsController@status')->name('status');
    Route::post('status/course/{id}','CoursesController@status')->name('status.course');
    Route::get('instructor/subscription/{id}','InstructorsController@sub')->name('instructor.subscription');
    Route::resource('/scope','ScopeController');

    Route::resource('/course','CoursesController');




});


