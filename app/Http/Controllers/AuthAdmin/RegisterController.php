<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

  use RegistersUsers;

  protected $redirectTo = '/home';

  public function __construct()
  {
    $this->middleware('guest:admin');
  }

  public function showRegistrationForm()
  {
      return view('authAdmin.register');
  }

  protected function validator(array $data)
  {
    return Validator::make($data, [
      'firstname' => 'required|string|max:255',
      'lastname' => 'required|string|max:255',
      'username' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6|confirmed',
    ]);
  }

  protected function createAdmin(Request $request)
  {
    $this->validator($request->all())->validate();
    $admin = Admin::create([
      'firstname' => $request['firstname'],
      'lastname' => $request['lastname'],
      'username' => $request['username'],
      'email' => $request['email'],
      'password' => Hash::make($request['password']),
    ]);
    return redirect()->intended('admin/login');
  }


}
