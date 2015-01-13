<?php

#Home Route
Route::get('/','HomeController@index');

 #Authentication Routes
Route::get('register',['as'=>'register','uses'=>'AuthController@getRegister']);
Route::post('register',['as'=>'register','uses'=>'AuthController@postRegister']);
Route::get('login',['as'=>'login','uses'=>'AuthController@getLogin']);
Route::post('login',['as'=>'login','uses'=>'AuthController@postLogin']);
Route::get('logout',['as'=>'logout','uses'=>'AuthController@getLogout']);

Route::controller('password', 'RemindersController');

#Users control Route
Route::resource('users','UsersController');
