<?php 

class AnswersController extends BaseController{


	public function store($id)
	{	
		$rules = array(
			'answer'=> 'required',
		);

		$validation = Validator::make(Input::all(), $rules);

		if ($validation->fails()) {
			return Redirect::back()->withErrors($validation)->withInput();
		} 
		else {

			$answer = Answer::create([
				'answer'		  => Input::get('answer')
			]);	

			$answer->author()->associate(Auth::user())->save();
			$answer->question()->associate(Question::find($id))->save();

			Flash::success('You have successifully create a answer... ');

			return Redirect::back();

		}


	}





}