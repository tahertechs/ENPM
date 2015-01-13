<?php

#Home Route
Route::get('/','HomeController@index');

 #Authentication Routes
Route::get('login',['as'=>'login','uses'=>'AuthController@getLogin']);
Route::post('login',['as'=>'login','uses'=>'AuthController@postLogin']);
Route::get('register',['as'=>'register','uses'=>'AuthController@getRegister']);
Route::post('register',['as'=>'register','uses'=>'AuthController@postRegister']);
Route::controller('password', 'RemindersController');

#Users control Route
Route::resource('users','UsersController');

Route::get('test',function(){

 $user = new User;
 $user->username = 'test';
 $user->email = 'test1';
 $user->name = 'test NSE';
 $user->password = Hash::make('taher');
 $user->save();

 dd($user->username);

});