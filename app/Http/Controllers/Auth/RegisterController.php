<?php

namespace App\Http\Controllers\Auth;

use App\Model\User;
use App\Model\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
  use RegistersUsers;

  protected $redirectTo = 'admin';

  public function __construct()
  {
      $this->middleware('guest');
  }

  public function showRegistrationForm()
  {
    $categories = Category::where(['parent_id'=>0])->get();
    return view('auth.register',compact('categories'));
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

  protected function create(array $data)
  {
    return User::create([
      'firstname' => $data['firstname'],
      'lastname' => $data['lastname'],
      'username' => $data['username'],
      'phone' => $data['phone'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
    ]);
  }
}
