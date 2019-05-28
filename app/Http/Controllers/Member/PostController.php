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
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PostController extends Controller
{
  protected $operator_name1 = '';
  protected $operator_name2 = '';
  protected $operator_name3 = '';
  protected $operator1 = '';
  protected $operator2 = '';
  protected $operator3 = '';

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
  	$categories = Category::where(['parent_id'=>0])->published()->get();
  	return view('freeads.index',compact('categories'));
  }

  public function indexEdit($id)
  {
    $categories = Category::where(['parent_id'=>0])->published()->get();
    return view('freeads.index',compact('categories'));
  }

  public function create($cate_id)
  {
    $provinces = Province::pluck('name_en','id');
    $subcategory = Category::where(['id'=>$cate_id])->first();
    $view_name = $subcategory->form_name;
		$category = Category::where('id',$subcategory->parent_id)->first();
    $categories = Category::where(['parent_id'=>0])->get();
  	return view($view_name,compact('subcategory','category','provinces','categories'));
  }

	public function saveProperties(Request $request)
  {
    if (Auth::check()){
      $property = new Property();
      $property->user_id = auth()->user()->id;
      $property->category_id = $request->category_id;
      $property->parent_id = $request->parent_id;
      $property->title = $request->title;
      $property->slug = $this->make_slug($request->title);
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
  
  public function editProperties($id,$cat_id)
  {
    $categories = Category::where(['parent_id'=>0])->published()->get();
    $property = Property::findOrFail($id);
    $images = PropertyGallery::where('property_id',$property->id)->get();
    $provinces = Province::pluck('name_en','id');
    $districts = District::where('province_id',$property->province_id)->get();
    $communes = Commune::where('district_id',$property->commune->district_id)->get();

    $subcategory = Category::where(['id'=>$cat_id])->first();
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
    $property->slug = $this->make_slug($request->title);
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
    $categories = Category::where(['parent_id'=>0])->published()->get();
    $property = Property::where('slug',$slug)->first();
    $cellcards = Operator::pluck('cellcard')->toArray();
    $smarts = Operator::pluck('smart')->toArray();
    $metfones = Operator::pluck('metfone')->toArray();
    $qbs = Operator::pluck('qb')->toArray();
    $operator1 = substr($property->phone1, 0,3);
    $operator2 = substr($property->phone2, 0,3);
    $operator3 = substr($property->phone3, 0,3);
    $phone1 = $property->phone1;
    $phone2 = $property->phone2;
    $phone3 = $property->phone3;

    if ($property->phone1!='') {      
      $operator1 = substr($property->phone1, 0,3);
    } else {
      $operator1='';
    }
    if ($property->phone2!='') {      
      $operator2 = substr($property->phone2, 0,3);
    } else {
      $operator2='';
    }
    if ($property->phone3!='') {      
      $operator3 = substr($property->phone3, 0,3);
    } else {
      $operator3='';
    }

    if($operator1){
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
    } else {
      $operator_name1 = '';
    }

    if($operator2){
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
    } else {
      $operator_name2 = '';
    }

    if($operator3){
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
    } else {
      $operator_name3 = '';
    }
    $blogKey = 'blog_' .$property->id;
    if(!Session::has($blogKey)){
        $property->increment('view_count');
        Session::put($blogKey,1);
    }
    $random_properties = Property::inRandomOrder()->take(15)->get();
    // return $operator_name3;
    $images = PropertyGallery::where('property_id',$property->id)->get();
    return view('freeads.show',compact('property','images','categories','operator_name1','operator_name2','operator_name3','random_properties','phone1','phone2','phone3'));
  }

  function make_slug($string) {
    return preg_replace('/\s+/u', '-', trim($string));
  }


}
