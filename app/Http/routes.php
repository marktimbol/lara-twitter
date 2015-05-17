<?php

get('/', [
	'as' => 'page.home',
	'uses' => 'PagesController@home'
	]);

post('/auth/register', [
	'as' => 'auth.register',
	'uses' => 'AuthController@postRegister'
	]);

get('/auth/login', [
	'as' => 'auth.login',
	'uses' => 'AuthController@getLogin'
	]);

post('/auth/login', [
	'as' => 'auth.login',
	'uses' => 'AuthController@postLogin'
	]);

/***** PROFILE *****/

Route::group(['middleware' => 'auth'], function(){

	get('user/profile', [
		'as' => 'user.profile',
		'uses' => 'UsersController@profile'
		]);	

	post('user/post-status', [
		'as' => 'status.post',
		'uses' => 'StatusController@store'
		]);

	get('user/logout', function() {

		Auth::logout();
		
		return redirect()->route('page.home');
	});

});
