<?php namespace Admin;

//using Validator;

class UniversityController extends \BaseController{

	public function index(){
		$universities = \University::orderBy('created_at','desc')->paginate(10);
		return \View::make('admin.universities.index',compact('universities'));
	}

	//Bu pek gerek kalmadi suan
	public function create(){
		return \Redirect::route('admin.universities.index');
	}

	public function store(){
		$rules = array(
			'name'=> 'required',
		);

		$validation = \Validator::make(\Input::all(), $rules);

		if ($validation->fails()) {
			return \Redirect::back()->withErrors($validation)->withInput();
		} 
		else {

			$university = \University::create([
				'name'		  => \Input::get('name'),
				'slug'		  => \Str::slug(\Input::get('name')),
				'address' => \Input::get('address')
			]);	

			\Flash::success('You have successifully Add University... ');

			return \Redirect::route('admin.universities.index');

		}
	}


	public function show($slug){
		$university = \University::where('slug','=', $slug)->first();
		if($university){

			$faculties  = $university->faculties()->paginate(10);
			return \View::make('admin.universities.show',compact('university','faculties'));			
		}
		return \Redirect::route('admin.universities.index');
	}

	public function postFaculty(){

		$slug = \Input::get('slug');

		$university = \University::where('slug','=', $slug)->first();

		if($university){

			$rules = array(
				'name'=> 'required',
			);

			$validation = \Validator::make(\Input::all(), $rules);

			if ($validation->fails()) {
				return \Redirect::back()->withErrors($validation)->withInput();
			} 
			else {

				$faculty = \Faculty::create([
					'name'		  => \Input::get('name'),
				]);	

				$faculty->university()->associate($university)->save();

				\Flash::success('You have successifully Add Faculty to this Univesity... ');

				return \Redirect::back();

			}
		}
		return \Redirect::back();
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