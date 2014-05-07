<?php

class SessionsController extends BaseController {
		
	public function create()
	{
		return View::make('sessions.create');
	}
	
	public function store()
	{
		if (Auth::attempt(Input::only('username', 'password')))
		{
			return Redirect::route('goals.index');
		}
			return "Login failed";
	}
	
	public function destroy()
	{
		Auth::logout();
		
		return Redirect::route('login');
	}
	
}