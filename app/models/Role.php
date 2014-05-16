<?php

class Role extends Eloquent {
    
    protected $table = 'user_roles';

    
    // rules for protecting roles
    protected $fillable = array('user_id', 'role_id');

    public function user()
    {
        return $this->belo('User'); 
    }

}