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
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::group(['namespace' => 'Play', 'prefix' =>'play'], function()
{
	Route::get('basics', array('as' => 'play.basics', 'uses' => 'PlayController@basics'));	
	Route::get('rules', array('as' => 'play.rules', 'uses' => 'PlayController@rules'));	
	Route::get('instructors', array('as' => 'play.instructors', 'uses' => 'PlayController@instructors'));	
});

Route::group(['namespace' => 'Programs', 'prefix' =>'programs'], function()
{
	Route::get('juniors', array('as' => 'programs.juniors', 'uses' => 'JuniorsController@index'));	
	Route::get('instructors', array('as' => 'programs.instructors', 'uses' => 'InstructorsController@index'));	
	Route::get('awards', array('as' => 'awards.index', 'uses' => 'AwardsController@index'));	
});

Route::group(['namespace' => 'Members', 'prefix' =>'members'], function()
{
	Route::get('listing', array('as' => 'members.listing', 'uses' => 'MemberController@index'));	
	Route::get('profile', array('as' => 'members.show', 'uses' => 'MemberController@show'));	
});

Route::group(['namespace' => 'About', 'prefix' =>'about'], function()
{
	Route::get('board', array('as' => 'board.index', 'uses' => 'LeadershipController@board'));	
	Route::get('committees', array('as' => 'committees.index', 'uses' => 'LeadershipController@committees'));
	Route::get('volunteer', array('as' => 'volunteer.index', 'uses' => 'LeadershipController@volunteer'));
	Route::get('election/process', array('as' => 'election.index', 'uses' => 'LeadershipController@election'));	
});

Route::group(['namespace' => 'Forms', 'prefix' =>'forms'], function()
{
	Route::get('election/nominate', array('as' => 'election.nominate', 'uses' => 'NominationController@election'));	
	Route::get('awards/nominate', array('as' => 'awards.nominate', 'uses' => 'NominationController@awards'));	

});