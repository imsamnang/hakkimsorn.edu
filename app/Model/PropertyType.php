<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
  protected $table = 'property_type';

  public function childs()
  {
  	return $this->hasMany(PropertyType::class,'parent_id','id');
  }

  // public function property()
  // {
  // 	return $this->hasOne(Property::class,'type_id','property_type_id');
  // }

  public function cateType()
  {
  	return $this->hasMany(Category::class,'type_id','parent_id');
  }

  public function cateSub()
  {
    return $this->hasMany(Category::class,'sub_type_id','type_id');
  }

  // public function cateSub()
  // {
  // 	return $this->hasOne(Category::class,'type_id','sub_type');
  // }
}
