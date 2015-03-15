<?php

class Faculty extends Eloquent{

	protected $table = 'faculties';

	protected $fillable = array('name');

	public function university(){

		return $this->belongsTo('University');
	}


}