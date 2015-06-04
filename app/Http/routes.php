<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
	Route::get('/', 'HomeController@index');

	Route::get('home', 'HomeController@index');

	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);

	Route::resource('neighborhoods', 'NeighborhoodController');

	Route::post('neighborhoods/search', ['as' => 'neighborhoods/search', 'uses'=>'NeighborhoodController@search']);
	Route::get('neighborhoods/delete/{id}', ['as' =>  'neighborhoods/delete', 'uses' => 'NeighborhoodController@destroy']);
	Route::get('neighborhoods/restore/{id}', ['as' =>  'neighborhoods/restore', 'uses' => 'NeighborhoodController@restore']);

	Route::resource('members', 'MemberController');

	
	Route::get('members/delete/{id}', ['as' =>  'members/delete', 'uses' => 'MemberController@destroy']);
	Route::get('members/restore/{id}', ['as' =>  'members/restore', 'uses' => 'MemberController@restore']);
	
	
	Route::get('neighborhood_id/{neighborhood_id}', ['as' => 'neighborhood_id', 'uses' => 'ExcelController@index']);