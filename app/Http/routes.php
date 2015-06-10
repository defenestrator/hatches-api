<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

//Protect data injection changes from csrf
Route::when('*', 'csrf', ['post', 'put', 'patch', 'delete']);


Route::get('deployment', function () {
    return Response::json(['data' => 'secrets', 'status' => 200]);
});

/** HTML View Routes **
 *  These routes require a name in addtion to the Controller and action
 *  These routes should extend PageController and
 *  the best way to return the view is by using:
 *  return $this->htmlPageResponse
 */
Route::get('/', ['as' => 'main', 'uses' => 'HomePageController@index']);

Route::group(['prefix' => '', 'middleware' => 'auth'], function () {
    Route::get('profile', ['as' => 'profile', 'uses' => 'ProfilePageController@show']);
    Route::post('profile', ['as' => 'profile', 'uses' => 'ProfilePageController@create']);
    Route::get('trip-reports', ['as' => 'trip-reports', 'uses' => 'TripReportPageController@index']);
    Route::get('hatch-reports', ['as' => 'hatch-reports', 'uses' => 'HatchReportPageController@index']);
    Route::get('administration', ['as' => 'administration', 'uses' => 'AdministratorPageController@index']);
});

/*
 * API routes /v1/ :
 */

Route::group(['prefix' => 'v1', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
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

