<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
	public function index()
	{
		return view('ajax_crud.index');
	}
}
