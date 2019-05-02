<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = 'admin';

    public function __construct()
    {
       $this->middleware('guest:admin')->except(['logout']);
    }
    public function redirectTo()
    {
        return 'admin';
    }
    protected function guard()
    {
        return \Auth::guard('admin');
    }
    public function showLoginForm()
    {
        return view('authAdmin.login');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('admin');
    }    
}
