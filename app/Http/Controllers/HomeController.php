<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Commune;
use App\Model\District;
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

  public function listProperties()
  {
    $properties = Property::where('user_id',auth()->user()->id)
                           ->orderBy('created_at','desc')
                           ->get();
    return view('freeads.showAllProperties',compact('properties'));
  }

  public function allProperties(Request $request)
  {
    $province_id = $request->input('province');
    $category_by_properties = Category::where(['parent_id'=>5])->Published()->get();
    $categories = Category::where(['parent_id'=>0])->published()->get();
    $provinces = Province::pluck('name_en','id');
    if ($province_id!=0) {
      $allProperties = Property::published()
                              ->where('province_id',$province_id)
                              ->orderBy('created_at','desc')
                              // ->get();
                              ->paginate($this->limit);      
      $district_id = $request->input('district');
      // return $district_id;
      $districts = District::where("province_id",$province_id)
                            ->pluck("name_en","id");
      if($district_id){
        $commune_id = $request->input('commune');
        $communes = Commune::where("district_id",$district_id)
                                ->pluck("name_en","id");
        $allProperties = Property::published()
                                ->where("province_id",$province_id)
                                ->where('district_id',$district_id)
                                ->orderBy('created_at','desc')
                                // ->get();
                                ->paginate($this->limit);
        // return $allProperties;
        if($commune_id){
          $allProperties = Property::published()
                                          ->where("province_id",$province_id)
                                          ->where('district_id',$district_id)
                                          ->where('commune_id',$commune_id)
                                          ->orderBy('created_at','desc')
                                          // ->get();
                                          ->paginate($this->limit);
          // return $allProperties;                                                        
        }                                
      }

    } else {
      $allProperties = Property::published()
                                ->orderBy('created_at','desc')
                                // ->get();
                                ->paginate($this->limit);
    }
    return view('front.all_properties',compact('categories','category_by_properties','provinces','allProperties','province_id','districts','district_id','communes','commune_id'));
  }

  public function allPropertiesGrid(Request $request)
  {
    $province_id = $request->input('province');
    $category_by_properties = Category::where(['parent_id'=>5])->Published()->get();
    $categories = Category::where(['parent_id'=>0])->published()->get();
    $provinces = Province::pluck('name_en','id');
    if ($province_id!=0) {
      $allProperties = Property::published()
                              ->where('province_id',$province_id)
                              ->orderBy('created_at','desc')
                              // ->get();
                              ->paginate($this->limit);      
      $district_id = $request->input('district');
      // return $district_id;
      $districts = District::where("province_id",$province_id)
                            ->pluck("name_en","id");
      if($district_id){
        $commune_id = $request->input('commune');
        $communes = Commune::where("district_id",$district_id)
                                ->pluck("name_en","id");
        $allProperties = Property::published()
                                ->where("province_id",$province_id)
                                ->where('district_id',$district_id)
                                ->orderBy('created_at','desc')
                                // ->get();
                                ->paginate($this->limit);                                
        // return $allProperties;
        if($commune_id){
          $allProperties = Property::published()
                                          ->where("province_id",$province_id)
                                          ->where('district_id',$district_id)
                                          ->where('commune_id',$commune_id)
                                          ->orderBy('created_at','desc')
                                          // ->get();
                                          ->paginate($this->limit);
          // return $allProperties;                                                        
        }                                
      }

    } else {
      $allProperties = Property::published()
                                ->orderBy('created_at','desc')
                                // ->get();
                                ->paginate($this->limit);      
    }
    return view('front.all_properties-grid',compact('categories','category_by_properties','provinces','allProperties','province_id','districts','district_id','communes','commune_id'));
  }  
}
