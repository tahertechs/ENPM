<?php

class Question extends Eloquent{

	protected $fillable = array('title','description','slug','answered');

	public static $rules = array('title'=>'required|min:5');

	public function author(){

		return $this->belongsTo('User','author_id');
	}
	
	public function answers(){

		return $this->hasMany('Answer','question_id');
	}

	public function questionBelongsToUser($id){

		$user = Auth::user();
		
		$question = Question::find($id);

		if($question->author->id == $user->id){

			return true;
		}

		return false;

	}

}