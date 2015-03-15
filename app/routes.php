<?php

Route::get('/','PagesController@index');
Route::get('home',['as'=>'home','uses'=>'PagesController@home']);
#AuthController
Route::controller('account','AuthController');
#PostsController
Route::resource('posts','PostsController');
Route::post('download','PostsController@download');
Route::get('delete/{id}',['as'=>'posts.delete','uses'=>'PostsController@delete']);
Route::get('me/posts',['as'=>'posts.list','uses'=>'PostsController@getUserPosts']);
#QuestionsController
Route::resource('questions','QuestionsController');
Route::get('delete/{id}',['as'=>'questions.delete','uses'=>'QuestionsController@delete']);
Route::get('me/questions',['as'=>'questions.list','uses'=>'QuestionsController@getUserQuestions']);
#AnswersController
Route::post('answers/{id}',['as'=>'answers.store','uses'=>'AnswersController@store']);
#SettingsController
Route::controller('settings','SettingsController');
#UsersController
Route::get('members',['as'=>'users.index','uses'=>'UsersController@index']);
Route::get('@{username}',['as'=>'users.show','uses'=>'UsersController@show']);
#SocialController
Route::get('login/facebook',['as'=>'facebook','uses'=>'SocialController@loginWithFacebook']);
Route::get('login/twitter', ['as'=>'twitter' ,'uses'=>'SocialController@loginWithTwitter']);
Route::get('login/google', ['as'=>'google' ,'uses'=>'SocialController@loginWithGoogle']);
Route::get('login/linkedin', ['as'=>'linkedin' ,'uses'=>'SocialController@loginWithLinkedin']);

// Route::controller('password', 'RemindersController');



// admin Routes
Route::group(['before' => 'admin', 'prefix' => 'admin','namespace' => 'Admin'], function() {

	Route::get('/', ['as'=>'admin.dashboard','uses'=>'DashboardController@getIndex']);

	#usersController
	Route::resource('users','UsersController');
	Route::get('delete/{id}',['as'=>'admin.users.delete','uses'=>'UsersController@delete']);

	#PostsController
	Route::resource('posts','PostsController');
	Route::get('delete/{id}',['as'=>'admin.posts.delete','uses'=>'PostsController@delete']);

	#QuestionsController
	Route::resource('questions','QuestionsController');
	Route::get('delete/{id}',['as'=>'admin.questions.delete','uses'=>'QuestionsController@delete']);

	#UniversityController
	Route::resource('universities','UniversityController');
	Route::get('delete/{id}',['as'=>'admin.universities.delete','uses'=>'UniversityController@delete']);
	Route::post('faculty',['as'=>'admin.faculties.store','uses'=>'UniversityController@postFaculty']);


});
