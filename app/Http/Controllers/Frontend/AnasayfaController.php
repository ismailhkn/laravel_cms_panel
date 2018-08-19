<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Controller;

class AnasayfaController extends Controller
{
    public function index(){
        return view('frontend.anasayfa');
    }
}
