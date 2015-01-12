<?php

Route::get('/','HomeController@index');

Route::get('/env',function(){
	return App::environment();
});
