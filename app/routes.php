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

Route::resource('goals', 'GoalsController');
 
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