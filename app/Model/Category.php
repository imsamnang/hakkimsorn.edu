<?php

namespace App\Model;

use App\Model\Category;
use App\Model\Upload as upload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends upload
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	protected $table = 'categories';
	protected $primaryKey = 'id';
	protected $fillable = [
		'parent_id',
		'category_name',
		'description',
		'is_active',
		'image'
	];

	public function childs()
	{
		return $this->hasMany(Category::class,'parent_id','id')->published();
	}

  public function scopePublished($query)
  {
    return $query->where('is_active',1);
  }

  public function type()
  {
  	return $this->belongsTo(PropertyType::class,'type_id','id');
  }

  public function subtype()
  {
  	return $this->belongsTo(PropertyType::class,'sub_type_id','type_id');
  }

  public function properties()
  {
  	return $this->hasMany(Property::class,'parent_id','id');
  }



}
