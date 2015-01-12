<?php

Route::get('/','HomeController@index');

Route::get('/env',function(){

    dd( getenv('DB_HOST'));
	//return App::environment();
});
