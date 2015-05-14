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



get('/mandrill', function() {


});