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

  public function property()
  {
  	return $this->hasOne(Property::class,'type_id','property_type_id');
  }

  public function cateType()
  {
  	return $this->hasOne(Category::class,'id','type');
  }

  // public function cateSub()
  // {
  // 	return $this->hasOne(Category::class,'type_id','sub_type');
  // }
}
