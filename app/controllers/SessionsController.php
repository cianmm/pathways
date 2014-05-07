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
			return Auth::user();
		}
			return "Login failed";
	}
	
}