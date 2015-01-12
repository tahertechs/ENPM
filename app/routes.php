<?php

Route::get('/','HomeController@index');

Route::get('/env',function(){

    dd( getenv('local'));
	//return App::environment();
});
