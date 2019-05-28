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

  public function index(Request $request)
  {
    $search = $request->input('q');
    $parent_id = $request->input('category');
    $province_id = $request->input('location');
    $categories = Category::where(['parent_id'=>0])->published()->get();
    if ($search and $parent_id!=0 and $province_id!=0) {
      $properties = Property::OrderBy('created_at','desc')
                            ->search($parent_id,$province_id,$search)
                            ->get();
    } elseif ($search and $parent_id!=0 and $province_id0=0) {
      $properties = Property::OrderBy('created_at','desc')
                            ->where('parent_id',$parent_id)
                            ->where('title','like','%'.$search.'%')
                            ->get();  
    } elseif ($search and $parent_id==0 and $province_id!=0) {
      $properties = Property::OrderBy('created_at','desc')
                            ->where('province_id',$province_id)
                            ->where('title','like','%'.$search.'%')
                            ->get();  
    } elseif ($search and $parent_id==0 and $province_id==0) {
      $properties = Property::OrderBy('created_at','desc')
                            ->where('title','like','%'.$search.'%')
                            ->get();  
    } elseif ($search=='' and $parent_id!=0 and $province_id!=0) {
      $properties = Property::OrderBy('created_at','desc')
                            ->where('province_id',$province_id)
                            ->where('parent_id',$parent_id)
                            ->get();  
    } else {
      $properties = Property::OrderBy('created_at','desc')->get();
    }


    $provinces = Province::get();
    $category_by_properties = Category::where(['parent_id'=>5])->get();
    return view('front.property',compact('properties','provinces','categories','category_by_properties','search','parent_id','location'));
  }

  public function property_by_province($id)
  {
    $categories = Category::where(['parent_id'=>0])->published()->get();
    $property_by_province = Property::where('province_id',$id)->paginate($this->limit);
    return view('front.property_by_province',compact('property_by_province','categories'));
  }

  public function test()
  {
    $a=0;
    $b=2;
    $c='';
    if ($a!==0 and $b!=0 and $c =='') {
      return "True";
    } else {
      return "false";
    }
  }

}
