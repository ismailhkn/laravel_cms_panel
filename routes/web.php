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

Route::get('/', function () { return view('welcome');});

Auth::routes();


Route::get('posta', function () { echo 'hoşgeldin admin'; })->middleware('auth', 'role:aşk');

Route::get('/home', 'Frontend\HomeController@index')->name('home');