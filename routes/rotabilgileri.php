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

Route::get('/', function () { return view('welcome'); });


Route::put('posta', function () {
    //
})->middleware('auth', 'role:admin');

// role ile yönlendirme
Route::put('ankara', function () {

//
})->middleware('auth', 'role:admin');


// Auth yönlendirmeleri routing/route de



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
Route::get('/home', 'Frontend\HomeController@index')->name('home');



Route::get('/', function () { return view('welcome');});

Auth::routes();


Route::get('posta', function () { echo 'hoşgeldin admin'; })->middleware('auth', 'role:aşk');

Route::get('/home', 'Frontend\HomeController@index')->name('home');






Route::get('teacher/logout', 'Backend\Auth\TeacherLoginController@getLogout');
Route::get('teacher/login', 'Backend\Auth\TeacherLoginController@showLoginForm');
Route::post('teacher/login', 'Backend\Auth\TeacherLoginController@login')->name('teacher.login');

Route::get('student/logout', 'Backend\Auth\StudentLoginController@getLogout');
Route::get('student/login', 'Backend\Auth\StudentLoginController@showLoginForm');
Route::post('student/login', 'Backend\Auth\StudentLoginController@login')->name('student.login');