<?php


Route::get('/', function () { return redirect('admin/anasayfa'); });
Route::get('/anasayfa', 'AnasayfaController@index');
