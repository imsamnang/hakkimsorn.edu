<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Model\Property;
use App\Model\PropertyGallery;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
  	$user = User::where('id',Auth::user()->id)->first();
  	$properties = Property::where('user_id',$user->id)->get();
    return view('member.dashboard',compact('user','properties'));
  }

}
