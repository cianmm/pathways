<?php

class Goal extends Eloquent {
    
    // rules for validationg goals
    
    public static $rules = [
        
        'title' => 'required|between:6,40',
        'goal-complete' => 'required|numeric'
    ];
    
    protected $fillable = array('user_id', 'goal_title', 'goal_description', 'goal_value', 'goal_complete', 'deletable');

    public static function getCurrent($value, $complete)
    {
        // first let's check if we are going to devide by 0
        // and if so, let's just return 0. 
        if ($value == 0)
        {
            return 0;
        }
        elseif ($value > 0 )
        {
            return ($value / $complete) * 100;
        }
    }

    public function user()
    {
        return $this->belongsTo('user');
    }
}