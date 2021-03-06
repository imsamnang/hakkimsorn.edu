<?php

namespace App\Model;

use App\Model\Upload as Eloquent;
use Illuminate\Database\Eloquent\Model;

class Property extends Eloquent
{
	protected $primaryKey = 'id';
	protected $table = 'properties';
	protected $fillable = [
		'user_id',
		'category_id',
		'parent_id',
		'title',
		'size',
		'price',
		'description',
		'name',
		'phone',
		'email',
		'province',
		'district',
		'commune',
		'location',
	];

	public function user()
	{
		return $this->belongsTo(User::class,'user_id','id');
	}

	public function province()
	{
		return $this->belongsTo(Province::class,'province_id','id');
	}

	public function district()
	{
		return $this->belongsTo(District::class,'district_id','id');
	}

	public function commune()
	{
		return $this->belongsTo(Commune::class,'commune_id','id');
	}

	public function category()
	{
		return $this->belongsTo(Category::class,'category_id','id');
	}

	public function parent()
	{
		return $this->belongsTo(Category::class,'parent_id','id');
	}

  public function galleries()
  {
		return $this->hasMany(PropertyGallery::class,'property_id','id');
  }

 //  public function propertyType()
	// {
	// 	return $this->belongsTo(propertyType::class,'property_type_id','type_id');
	// }

  public function scopePublished($query)
  {
    return $query->where('is_active',1);
  }

  public function scopeSearch($query, $parent_id, $location, $search)
  {
  	return $query->where('parent_id','=',$parent_id)
  							->where('province_id','=', $location)
  							->where('title','like','%' .$search. '%');
  }

}
