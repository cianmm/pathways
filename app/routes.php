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
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController');

Route::resource('goals', 'GoalsController');
/*
Route::resource('dash', 'GoalsController');
Route::resource('sessions', 'SessionsController');
*/

Route::get('{username}', function($username)
{
    /*
     *find user from the user table (based on their username)
     *Setting first because although we know that this
     *is unique, you can never be too careful!
     */
     
      $user = User::whereUsername($username)->first(); 

     //get all of the goals associated with that user
      return $user->goals;  
     
    // return them
});

Route::get('{username}/{goal}', function($username, $goal)
{
    
    // let's display the specific goal the visitor wants
    
    // first, find the user
    $user = User::whereUsername($username)->first();
    
    // next find the task (or if they don't own the task, fail)
    $task = $user->goals()->findOrFail($goal);
    
    return $task;
});