<?php

use Illuminate\Auth\UserInterface;
//use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface {

	protected $table = 'usuario';
	protected $fillable = array('user', 'email', 'password');


	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getAuthPassword()
	{
		return $this->password;
	}

	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getRememberToken()
	{
		return $this->remember_token;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	public function setRememberToken($tok)
	{
		$this->remember_token = $tok;
	}

}