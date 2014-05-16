<?php

class SessionsController extends BaseController {
		
	public function create()
	{
	
	    if (Auth::guest())
        {
		    return View::make('sessions.create')->nest('registerform', 'sessions.child.registerform');
        }
        else
        {
            return Redirect::route('goals.index');
        }
	}
	
	public function store()
	{
		if (Auth::attempt(Input::only('email', 'password')))
		{
			return Redirect::route('goals.index');
		}
			return Redirect::back()->withInput();
	}
	
	public function destroy()
	{
		Auth::logout();
		
		return Redirect::route('login');
	}
	
}