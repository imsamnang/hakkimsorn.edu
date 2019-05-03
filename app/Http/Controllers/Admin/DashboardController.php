<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

  public function __construct()
  {
  	$this->middleware('auth:admin');
  }

  public function index()
  {
		$categories = Category::where(['parent_id'=>0])->get();
     return view('admin.dashboard',compact('categories'));
  }

}
