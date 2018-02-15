<?php 
	Route::get('show-my-name/{name}',function($name){
	return "welcome ".$name;
	});
