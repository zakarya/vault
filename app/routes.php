<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Response::make('This is the index', 200);
});

Route::options('/workout', function () {
	return Response::make('options', 200);
});

Route::options('/exercise', function () {
	return Response::make('options', 200);
});

Route::options('/goal', function () {
	return Response::make('options', 200);
});

Route::options('/authentication', function () {
	return Response::make('authentication', 200);
});

Route::resource('authentication', 'AuthenticationController');

Route::group(array('before' => 'auth.basic'), function () {
	Route::resource('exercise', 'ExerciseController');
	Route::resource('workout', 'WorkoutController');
	Route::resource('goal', 'GoalController');
});
