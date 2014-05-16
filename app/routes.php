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


// If we want to log somebody in or out, send them here

Route::get('/', array('as'=>'index', 'uses' => 'SessionsController@create'));
Route::get('login', array('as' => 'login', 'uses' => 'SessionsController@create'));
Route::get('logout', array('as' => 'logout', 'uses' => 'SessionsController@destroy'));
/* Route::get('register', array('as' => 'register', 'uses' => 'UsersController@create')); */

Route::resource('users', 'UsersController');

Route::resource('sessions', 'SessionsController');

Route::resource('goals', 'GoalsController');