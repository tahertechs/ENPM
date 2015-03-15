<?php

class Answer extends Eloquent{

	protected $fillable = array('answer','best');

	public static $rules = array('answer'=>'required|min:3');

	public function author(){

		return $this->belongsTo('User','author_id');
	}
	
	public function question(){

		return $this->belongsTo('Question','question_id');
	}
}