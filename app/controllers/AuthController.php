<?php

class AuthController extends \BaseController {

	public function getLogin()
	{
		return View::make('auth.login');
	}

	public function postLogin()
	{
		return 'post form';
	}

	public function getRegister()
	{
		return View::make('auth.register');
	}

	public function postRegister()
	{
		return 'post register form';
	}





}
