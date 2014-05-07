<?php

class GoalsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	    if(Auth::guest())
	    {
		    return Redirect::to('login');
	    }
	    
      	$user = Auth::user(); 
	 		
	  	$goals =  $user->goals;
	  	
		return View::make('goals.index', compact('goals'));


	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$goal = Goal::findOrFail($id);
		
		// let's find the percentage of the goal that has been completed
		// (we may use number_format on the resultant once we get
		// to use this in a view. No need to worry now.
		$goalCurrent = Goal::getCurrent($goal->goal_value, $goal->goal_complete);
		$goal['current'] = $goalCurrent;
		
		if ($goalCurrent < 25)
		{
			$goal['currentClass'] = "progress-bar-warning";
		}
		else if ($goalCurrent < 80)
		{
			$goal['currentClass'] = "progress-bar-info";
		}
		else
		{
			$goal['currentClass'] = "progress-bar-success";
		}
		
		return View::make('goals.show', compact('goal'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
