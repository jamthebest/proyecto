<?php

class Usuario extends Eloquent{
	protected $guarded = array();

	protected $table = 'usuario';
	protected $fillable = array('user', 'email', 'password', 'activo');

	public static $rules = array(
		'id' => '',
		'user' => 'required|unique:usuario',
		'email' => 'required|email|unique:usuario',
		'password' => 'required|min:6',
		'activo' => ''
	);
}
