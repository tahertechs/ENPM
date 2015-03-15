<?php namespace Admin;

class DashboardController extends \BaseController{

	public function getIndex(){

		$posts = \Post::orderBy('created_at','desc')->paginate(10);

		$questions = \Question::orderBy('created_at','desc')->paginate(10);

		$users = \User::orderBy('created_at','desc')->paginate(10);

		return \View::make('admin.index',compact('posts','users','questions'));
	}
}