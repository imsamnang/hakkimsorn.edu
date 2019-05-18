<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Category;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/manage_ads';

    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'userLogout']);
    }

    protected function credentials(Request $request)
    {
      if(is_numeric($request->get('email'))){
        return ['phone'=>$request->get('email'),'password'=>$request->get('password')];
      }
      elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
        return ['email' => $request->get('email'), 'password'=>$request->get('password')];
      }
      return ['username' => $request->get('email'), 'password'=>$request->get('password')];
    }
        
    public function userLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    public function showLoginForm()
    {
      $categories = Category::where(['parent_id'=>0])->get();
      return view('auth.login',compact('categories'));
    }
}
