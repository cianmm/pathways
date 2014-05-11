<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	// Set what we are ok with mass assigning
	
	protected $fillable = ['username', 'email', 'first_name', 'last_name', 'password', 'current_position'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}
	
	/**
	 * What follows are several mutators that ensure we always store
	 * our name and password information with the correct
	 * formatting ie Hashed password, uppercase first
     * and last name letters.
     */
	public function setPasswordAttribute($value)
	{
    	$this->attributes['password'] = Hash::make($value);
	}
	
	public function setFirstNameAttribute($value)
	{
    	$this->attributes['first_name'] = ucwords($value);
	}
	
	public function setSecondNameAttribute($value)
	{
    	$this->attributes['second_name'] = ucwords($value);
	}
	
	/**
	 * Let's get the goals for a particular user
	 *
	 */
	 public function goals()
	 {
    	 return $this->hasMany('Goal'); 
	 }
	 
	 // check to see if the user owns a goal (if they own the goal, we should return true
/*
	 public static function hasGoalWithID($id){
    	 return ($this->goals()->where('id', $id)->count() > 0);
	 }
*/

}
