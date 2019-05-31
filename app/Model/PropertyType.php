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
}
