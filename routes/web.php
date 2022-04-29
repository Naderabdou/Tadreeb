<?php

use App\Models\Courses;
use App\Models\User;
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

Route::get('/','DashboardController@authCourse')->name('user_login');
Route::get('search/advanced','SearchController@name')->name('search.name');

Route::group(['prefix'=>'user','as'=>'user.','middleware'=>['auth']],function (){
    Route::resource('/dashboard','DashboardController');
    Route::resource('/profile','UserProfileController');
    Route::get('/show/profile','UserProfileController@profile')->name('profile');
    Route::post('update/password','UserProfileController@update_password')->name('update.password');
    Route::resource('courses','CoursesController');
    Route::get('courses/delete/{id}','CoursesController@delete')->name('delete.course');
    Route::get('courses/all','CoursesController@all')->name('courses.all');

    Route::resource('scopes','ScopesController');
    Route::get('scope/delete/{id}/{user_id}','ScopesController@delete')->name('scope.delete');
    Route::resource('/lessons','LessonsController');
    Route::resource('/cv','CvController');
    Route::resource('/exam','ExamController');
    Route::get('/exam/delete/{id}','ExamController@delete')->name('delete.exam');
    Route::resource('/subscription','Subscription');
    Route::get('/subscription/delete/{id}/{user_id}','Subscription@delete')->name('subscription.delete');
    Route::post('/paypal','PaypalController@pay')->name('paypal');
    Route::get('/success/{user_id}/{course_id}','PaypalController@success')->name('success');
    Route::get('/error','PaypalController@error')->name('error');
    Route::resource('/comments','CommentsController');
    Route::resource('/alerts','AlertsController');
    Route::get('/alerts/delete/{id}','AlertsController@delete')->name('delete.alerts');

    Route::post('show/lesson','LessonsController@active')->name('active.lesson');
    Route::post('answer','ExamController@answer')->name('answer');
    Route::get('view/certf/{id}/{course_id}','ExamController@certf')->name('certf');
    Route::get('download/certf/{id}','ExamController@download')->name('download.certf');
    Route::post('message','MessageController@message')->name('message');
    Route::post('search/scope','DashboardController@search')->name('search');
    Route::post('search','DashboardController@ajax')->name('search.name');
    Route::get('rate','RateController@rate')->name('rate');






});
require __DIR__.'/auth.php';
