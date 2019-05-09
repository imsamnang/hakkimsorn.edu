<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Property;
use App\Model\Province;
use App\Model\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  protected $limit = 10;

  public function index()
  {
    $categories = Category::where(['parent_id'=>0])->get();
    $properties = Property::OrderBy('created_at','desc')->get();
    $provinces = Province::get();
    $category_by_properties = Category::where(['parent_id'=>4])->get();
    return view('front.property',compact('properties','provinces','categories','category_by_properties'));
  }

  public function property_by_province($id)
  {
    $property_by_province = Property::where('province_id',$id)->paginate($this->limit);
    return view('front.property_by_province',compact('property_by_province'));
  }

}
