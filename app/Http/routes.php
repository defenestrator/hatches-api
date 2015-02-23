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

//Protect data injection changes from csrf
Route::when('*', 'csrf', ['post', 'put', 'patch', 'delete']);

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('attach', function()
{
	Hatches\User::find(1)->roles()->attach(1);
});

Route::group(['prefix' => 'api/v1'], function ()
{
	Route::get('/', function()
	{
		return 'hey fishies!';
	});

	Route::resource('users', 'UsersController', ['except' => ['create', 'store']]);

	Route::resource('fisheries', 'FisheriesController');

	Route::resource('trip-reports', 'TripReportsController');

	Route::resource('fish-species', 'FishSpeciesController');

	Route::resource('flyboxes', 'FlyboxesController');

	Route::resource('habitats', 'HabitatsController');

	Route::resource('hatches', 'HatchesController');

	Route::resource('hatch-types', 'HatchTypesController');

	Route::resource('hatch-reports', 'HatchReportsController');

	Route::resource('maps', 'MapsController');

	Route::resource('prey', 'PreyController');

	Route::resource('waterdata', 'WaterdataController');

	Route::resource('weather', 'WeatherController');

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

