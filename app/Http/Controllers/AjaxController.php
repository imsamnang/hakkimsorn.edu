<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
	public function index()
	{
		return view('ajax_crud.index');
	}

	public function readData()
	{
		$admins = Admin::get();
		// return response($admin);
		return view('ajax_crud.list', compact('admins'));
	}

	public function store(Request $request)
	{
		if($request->ajax())
		{
			$admin = Admin::create($request->all());
			return response($this->find($admin->id));
			// return response($request->all());
		}
	}

	public function find($id)
	{
		return Admin::findOrFail($id);
	}

	public function destroy(Request $request)
	{
		if($request->ajax()){
			Admin::destroy($request->id);
			return response(['message'=>'Student Deleated Succeessfully']);
		}
	}

	public function edit(Request $request)
	{
		if($request->ajax()){
			$admin = Admin::findOrFail($request->id);
			return response($admin);
		}
	}

	public function update(Request $request)
	{
		if($request->ajax()){
			$admin = Admin::findOrFail($request->id);
			$admin->update($request->all());
			return response($this->find($admin->id));
		}
	}

	public function findPage()
	{
		return Admin::paginate(3);
	}

	public function pagination()
	{
		$admins = $this->findPage();
		return view('ajax_crud.pagination',compact('admins'));
	}

	public function studentPage()
	{
		$admins = $this->findPage();
		return view('ajax_crud.studentPage',compact('admins'));
	}
}
