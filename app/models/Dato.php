<?php

class Dato extends Eloquent {
	protected $guarded = array();

	protected $table = 'datos';

	public static $rules = array(
		'id' => '',
		'nombre' => 'required',
		'empresa' => '',
		'cargo' => '',
		'telefono' => '',
		'user' => ''
	);
}
