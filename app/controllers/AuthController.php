<?php

class AuthController extends \BaseController {

	public function getRegister()
	{
		return View::make('auth.register');
	}


	public function postRegister()
	{
		$rules = array(
			'name'=>'required|min:3',
			'username'=>'required|min:3|unique:users',
			'email'=>'required|email|unique:users',
			'password'=> 'required|min:3',
			'password_confirmation' =>'required|min:3|same:password'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->passes()) {

			$user = new User;
			$user->name = Input::get('name');
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->remember_token = Input::get('_token');
			$user->save();

			Session::flash('message','Successifully Registered...!Login Now!');

			return Redirect::route('login');
		}
		else {
			return Redirect::route('register')->withInput()->withErrors($validator);
		}

	}


	public function getLogin()
	{
		return View::make('auth.login');
	}

	public function postLogin()
	{
		$rules = array(
			'email'    => 'required|email',
			'password' => 'required|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {

			return Redirect::route('login')->withInput()->withErrors($validator);

		} else {

			$credentials = array(
				'email'     => Input::get('email'),
				'password'  => Input::get('password')
			);

			if (Auth::attempt($credentials))
			{

				Session::flash('notifySuccess','Welcome Aboard...'. Auth::user()->email);

				return Redirect::intended('/');
			}
			else{

				Session::flash('notifyError','Something Weired happen..Try Again Later!');
				return Redirect::intended('/');
			}
		}

	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}


}
