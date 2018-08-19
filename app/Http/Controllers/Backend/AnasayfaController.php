<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\Controller;

class AnasayfaController extends Controller
{
    public function index(){
        return view('backend.anasayfa');
    }
}
