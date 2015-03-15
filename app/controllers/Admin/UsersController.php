<?php namespace Admin;

class UsersController extends \BaseController{

	public function index(){
		$users = \User::orderBy('created_at','desc')->paginate(10);
		return \View::make('admin.users.index',compact('users'));
	}

	public function create(){
		return 'YES posts';
	}

	public function store(){
		return 'YES posts';
	}

	public function edit(){
		return 'YES posts';
	}

	public function update(){
		return 'YES posts';
	}

	public function delete(){
		return 'YES posts';
	}


	public function destroy(){
		return 'YES posts';
	}

}