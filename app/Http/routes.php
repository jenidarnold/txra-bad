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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Play', 'prefix' =>'play'], function()
{
	// League
	Route::get('basics', array('as' => 'play.basics', 'uses' => 'PlayController@basics'));	
	Route::get('rules', array('as' => 'play.rules', 'uses' => 'PlayController@rules'));	
});

Route::group(['namespace' => 'Members', 'prefix' =>'members'], function()
{
	// League
	Route::get('index', array('as' => 'members.index', 'uses' => 'MemberController@index'));	
	Route::get('profile', array('as' => 'profile.show', 'uses' => 'MemberController@show'));	
});