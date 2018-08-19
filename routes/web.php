<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::put('ankara', function ($id) {
    //
})->middleware('auth', 'role:admin');


Auth::routes();
Route::get('teacher/login', 'Backend\Auth\TeacherLoginController@showLoginForm');
Route::post('teacher/login', 'Backend\Auth\TeacherLoginController@login')->name('teacher.login');
Route::get('student/login', 'Backend\Auth\StudentLoginController@showLoginForm');
Route::post('student/login', 'Backend\Auth\StudentLoginController@login')->name('student.login');
Route::group(['prefix' => 'teacher','middleware' => 'assign.guard:admin,admin/login'],function(){

    Route::get('home',function ()
    {
        return view('adminhome');
    });
});


Route::group(['prefix' => 'student','middleware' => 'assign.guard:subadmin,subadmin/login'],function(){
    Route::get('home',function ()
    {
        return view('subadminhome');
    });
});
Route::get('/home', 'HomeController@index')->name('home');