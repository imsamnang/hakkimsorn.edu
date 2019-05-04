<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
	public function districts()
	{
		return $this->hasMany(District::class,'province_id','id');
	}
}
