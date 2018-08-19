<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        return view('home');
    }


    /*
        public function someAdminStuff(Request $request)
        {
            $request->user()->authorizeRoles('admin');
            return view('some.view');
        }
        */
}