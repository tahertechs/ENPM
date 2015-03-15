<?php namespace Admin;

class PostsController extends \BaseController{

	public function index(){
		$posts = \Post::orderBy('created_at','desc')->paginate(10);
		return \View::make('admin.posts.index',compact('posts'));
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