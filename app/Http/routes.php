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

Route::get('/', 'Auth\AuthController@getLogin');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('home', 'DashboardController@index');

Route::get('tasks', 'taskController@index');
Route::get('create-task', 'taskController@create');
Route::post('create-tasks', ['uses' => 'taskController@store', 'as' => 'create.tasks']);
Route::post('user-tasks', ['uses' => 'taskController@getUserTasks', 'as' => 'users.tasks']);

// Route for users
Route::get('users', 'accountsController@index');
