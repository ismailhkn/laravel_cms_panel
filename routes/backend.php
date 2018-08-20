<?php


Route::get('/', function () { return redirect('admin/anasayfa'); });
Route::get('/anasayfa', 'AnasayfaController@index');


// Burası tüm fonksiyonlara ulaşacak süper admin
Route::get('teacher/logout', 'Auth\TeacherLoginController@getLogout');
Route::get('teacher/login', 'Auth\TeacherLoginController@showLoginForm');
Route::post('teacher/login', 'Auth\TeacherLoginController@login')->name('teacher.login');









// Registration Routes...
Route::get('/register', 'Admin\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Admin\RegisterController@register');



// Burası admin kullanıcıları
Route::get('/logout', 'Admin\StudentLoginController@getLogout');
Route::get('/login', 'Admin\StudentLoginController@showLoginForm');
Route::post('/login', 'Admin\StudentLoginController@login')->name('login');


// Password Reset Routes...
$this->get('password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Admin\ResetPasswordController@reset');