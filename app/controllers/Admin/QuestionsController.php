<?php namespace Admin;

class QuestionsController extends \BaseController{

	public function index(){
		$questions = \Question::orderBy('created_at','desc')->paginate(10);
		return \View::make('admin.questions.index',compact('questions'));
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