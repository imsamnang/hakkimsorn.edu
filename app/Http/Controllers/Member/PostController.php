<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Commune;
use App\Model\District;
use App\Model\Operator;
use App\Model\Property;
use App\Model\PropertyGallery;
use App\Model\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
  protected $operator_name1 = '';
  protected $operator_name2 = '';
  protected $operator_name3 = '';

  public function getDistrictList(Request $request)
  {
    $districts = District::where("province_id",$request->province_id)
    ->pluck("name_en","id");
    return response()->json($districts);
  }

  public function getCommuneList(Request $request)
  {
    $communes = Commune::where("district_id",$request->district_id)
    ->pluck("name_en","id");
    return response()->json($communes);
  }

  public function index()
  {
  	$categories = Category::where(['parent_id'=>0])->get();
  	return view('freeads.index',compact('categories'));
  }

  public function create($id)
  {
    $provinces = Province::pluck('name_en','id');
    $subcategory = Category::where(['id'=>$id])->first();
		$category = Category::where('id',$subcategory->parent_id)->first();
    $categories = Category::where(['parent_id'=>0])->get();
  	return view('freeads.create',compact('subcategory','category','provinces','categories'));
  }

	public function saveProperties(Request $request)
  {
    if (Auth::check()){
      $property = new Property();
      $property->user_id = auth()->user()->id;
      $property->category_id = $request->category_id;
      $property->parent_id = $request->parent_id;
      $property->title = $request->title;
      $property->slug = str_slug($request->title);
      $property->size = $request->size;
      $property->price = $request->price;
      $property->description = $request->description;
      $property->name = $request->name;
      $property->phone1 = $request->phone_1;
      $property->phone2 = $request->phone_2;
      $property->phone3 = $request->phone_3;
      $property->email = $request->email;
      $property->province_id = $request->province_id;
      $property->district_id = $request->district_id;
      $property->commune_id = $request->commune_id;
      $property->location = $request->location;
      if($property->save()){
        $property->imageGalleryUpload('imageGalleries',new PropertyGallery(),'property/galleries/',$property->id,'property_id');
      }
        return redirect()->route('member.home');
        alert()->success('SuccessAlert','Property Update Successfully!')->autoClose(2000);
    } else {      
      return redirect()->route('login');
    }
  }
  
  public function editProperties($id)
  {
    $categories = Category::where(['parent_id'=>0])->get();
    $property = Property::findOrFail($id);
    $images = PropertyGallery::where('property_id',$property->id)->get();
    $provinces = Province::pluck('name_en','id');
    $districts = District::where('province_id',$property->province_id)->get();
    $communes = Commune::where('district_id',$property->commune->district_id)->get();

    $subcategory = Category::where(['id'=>$property->parent_id])->first();
    $category = Category::where('id',$property->category_id)->first();

    return view('freeads.edit',compact('property','subcategory','category','provinces','districts','communes','images','categories'));
  }

  public function updateProperties(Request $request, $id)
  {
    $property = Property::findOrFail($id);
    $imageGalleries = PropertyGallery::where('property_id',$property->id)->get();
    foreach ($imageGalleries as $key => $image) {
      $old_images[] = $image->gallery_image;
    }
    $property->user_id = auth()->user()->id;
    $property->category_id = $request->category_id;
    $property->parent_id = $request->parent_id;
    $property->title = $request->title;
    $property->size = $request->size;
    $property->price = $request->price;
    $property->description = $request->description;
    $property->name = $request->name;
    $property->phone1 = $request->phone_1;
    $property->phone2 = $request->phone_2;
    $property->phone3 = $request->phone_3;
    $property->email = $request->email;
    $property->province_id = $request->province_id;
    $property->district_id = $request->district_id;
    $property->commune_id = $request->commune_id;
    $property->location = $request->location;
    if($property->save()){
      if($request->hasFile('imageGalleries')){
        $dir = 'uploads/property/galleries/';
        foreach ($imageGalleries as $key => $image) {
          $image->delete();
          File::delete($dir.$image->gallery_image);
        }
        $property->imageGalleryUpload('imageGalleries',new PropertyGallery(),'property/galleries/',$property->id,'property_id');
      }
    }
      alert()->success('SuccessAlert','Property Update Successfully!')->autoClose(2000);
      return redirect()->route('member.home');      
  }

  public function deleteProperties(Request $request)
  {
    if($request->ajax()){      
      $property = Property::findOrFail($request->id);
      $imageGalleries = PropertyGallery::where('property_id',$property->id)->get();
      if($property->delete()){
        $dir = 'uploads/property/galleries/';
        foreach ($imageGalleries as $key => $image) {
          $image->delete();
          File::delete($dir.$image->gallery_image);
        }
      }
      return response(['message'=>'Student Deleated Succeessfully']);
    }
  }

  public function showProperties($slug)
  {
    // $property = Property::findOrFail($id);
    $categories = Category::where(['parent_id'=>0])->get();
    $property = Property::where('slug',$slug)->first();
    $cellcards = Operator::pluck('cellcard')->toArray();
    $smarts = Operator::pluck('smart')->toArray();
    $metfones = Operator::pluck('metfone')->toArray();
    $qbs = Operator::pluck('qb')->toArray();
    $operator1 = substr($property->phone1, 0,3);
    $operator2 = substr($property->phone2, 0,3);
    $operator3 = substr($property->phone3, 0,3);

    if(in_array($operator1,  $cellcards)){
      $operator_name1 = 'Cellcard';
    } else if(in_array($operator1,  $smarts)){
      $operator_name1 = 'Smart';
    } else if(in_array($operator1,  $metfones)){
      $operator_name1 = 'Metfone';
    } else if(in_array($operator1,  $qbs)){
      $operator_name1 = 'Qb';
    } else {
      $operator_name1 = 'Other';
    }

    if(in_array($operator2,  $cellcards)){
      $operator_name2 = 'Cellcard';
    } else if(in_array($operator2,  $smarts)){
      $operator_name2 = 'Smart';
    } else if(in_array($operator2,  $metfones)){
      $operator_name2 = 'Metfone';
    } else if(in_array($operator2,  $qbs)){
      $operator_name2 = 'Qb';
    } else {
      $operator_name2 = 'Other';
    }

    if(in_array($operator3,  $cellcards)){
      $operator_name3 = 'Cellcard';
    } else if(in_array($operator3,  $smarts)){
      $operator_name3 = 'Smart';
    } else if(in_array($operator3,  $metfones)){
      $operator_name3 = 'Metfone';
    } else if(in_array($operator3,  $qbs)){
      $operator_name3 = 'Qb';
    } else {
      $operator_name3 = 'Other';
    } 
    $random_properties = Property::inRandomOrder()->take(15)->get();
    // return $random_properties;
    $images = PropertyGallery::where('property_id',$property->id)->get();
    return view('freeads.show',compact('property','images','categories','cellcards','smarts','metfones','qbs','operator_name1','operator_name2','operator_name3','random_properties'));
  }

  public function listProperties()
  {
    $properties = Property::where('user_id',auth()->user()->id)
                           ->orderBy('created_at','desc')
                           ->get();
    return view('freeads.showAllProperties',compact('properties'));
  }

  public function allProperties()
  {
    return view('freeads.all_properties');
  }

}
