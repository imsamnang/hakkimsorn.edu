<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
	public function communes()
	{
		return $this->hasMany(Commune::class,'district_id','id');
	}

	public function provice()
	{
		return $this->belongsTo(Province::class,'province_id','id');
	}

	public function properties()
	{
		eturn $this->hasMany(Property::class,'id','district_id');
	}	
}
