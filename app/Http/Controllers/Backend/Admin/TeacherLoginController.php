<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Backend\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class TeacherLoginController extends Controller
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
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:teacher,admin/home')->except('logout');
    }

    public function redirectTo()
    {
        return 'admin/home';
    }

    public function showLoginForm()
    {
        return view('auth.adminlogin');
    }

    protected function guard()
    {
        return Auth::guard('teacher');
    }

    public function getLogout()
    {
        Auth::guard('teacher')->logout();
        return redirect()->route('/');
    }
}