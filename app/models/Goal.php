<?php

class Goal extends Eloquent {
    

    public static function getCurrent($value, $complete)
    {
        return ($value / $complete) * 100;
    }

    
}