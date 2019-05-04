<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
	public function district()
	{
		return $this->belongsTo(District::class,'district_id','id');
	}
}
