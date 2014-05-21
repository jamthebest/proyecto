<?php

class Rol extends Eloquent {
	protected $guarded = array();

	protected $table = 'rol';

	public static $rules = array(
		'id' => '',
		'nombre' => 'required',
		'descripcion' => 'required'
	);
}
