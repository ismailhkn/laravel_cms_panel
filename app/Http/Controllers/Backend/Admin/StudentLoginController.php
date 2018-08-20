<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Backend\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class StudentLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'subadmin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:student,subadmin/home')->except('logout');
    }

    public function redirectTo()
    {
        return 'subadmin/home';
    }

    protected function guard()
    {
        return Auth::guard('student');
    }

    public function showLoginForm()
    {
        return view('backend.admin.login');
    }

    public function getLogout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('/');
    }

}