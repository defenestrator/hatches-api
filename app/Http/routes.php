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

Route::get('/', 'PagesController@index');
Route::get('deployment', function () {
    return Response::json(['data' => 'secrets', 'status' => 200]);
});

Route::group(['prefix' => '', 'middleware' => 'auth'], function () {
    Route::get('{profile}', ['as' => 'profile', 'uses' => 'ProfilePageController@show']);
    Route::post('profile', 'ProfilePageController@create');
    Route::get('trip-reports', ['as' => 'trip-reports', 'uses' => 'TripReportPageController@index']);
    Route::get('hatch-reports', ['as' => 'hatch-reports', 'uses' => 'HatchReportPageController@index']);
});
/*
 * API routes:
 */

Route::group(['prefix' => 'v1', 'middleware' => 'auth'], function ()
{
	Route::get('/', function()
	{
		return 'hey fishies!';
	});

	Route::get('users', 'UsersController@index');

    Route::get('users/{id}', 'UsersController@show');

	Route::resource('fisheries', 'FisheriesController');

	Route::resource('trip-reports', 'TripReportsController');

	Route::resource('fish-species', 'FishSpeciesController');

	Route::resource('flyboxes', 'FlyboxesController');

//	Route::resource('habitats', 'HabitatsController');
//
//	Route::resource('hatches', 'HatchesController');
//
//	Route::resource('hatch-types', 'HatchTypesController');
//
//	Route::resource('hatch-reports', 'HatchReportsController');
//
//	Route::resource('maps', 'MapsController');
//
//	Route::resource('prey', 'PreyController');
//
//	Route::resource('water-data', 'WaterDataController');
//
//	Route::resource('weather', 'WeatherController');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

