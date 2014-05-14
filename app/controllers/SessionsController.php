<?php

class SessionsController extends BaseController {
		
	public function create()
	{
		return View::make('sessions.create');
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