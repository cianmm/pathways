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
	  	
		return View::make('goals.index', compact('goals'))->nest('createform', 'goals.child.addgoalform');


	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{   
	
	    $validation = Validator::make(Input::all(), Goal::$rules);
	
        if ($validation->fails())
	    {
    	    return Redirect::back()->withInput()->withErrors($validation->messages());
	    }
	
	    // create the goal
	    $goal = new Goal;
		
		$input = Input::all();

		//grab the user id to assign this goal to
        $goal->user_id = Auth::user()->id;
        
        // and the rest of the info
        $goal->goal_title = $input['title'];
        $goal->goal_description = $input['goal-description'];
        $goal->goal_complete = $input['goal-complete'];
        
        $goal->save();
        
        return Redirect::route('goals.index');
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
		
		// let's ensure that this user is allowed view this goal, and if not redirect them to their goals. 
		if ($goal->user_id == Auth::user()->id)
		{
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
		else
		{
    		return Redirect::to('goals');
		}
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
	    // ensure this user is allowed delete this goal
	    $goal = Goal::findOrFail($id);
        if ($goal->user_id == Auth::user()->id)
        {
		    $goal = Goal::find($id);
		    $goal->delete();
		    return Redirect::route('goals.index');
		}
		else
		{
    		return "You aren't allowed delete this goal";
		}
    }

}
