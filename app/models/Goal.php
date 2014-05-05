<?php

class Goal extends Eloquent {
    

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

    
}