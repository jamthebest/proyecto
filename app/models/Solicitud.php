<?php

class Solicitud extends Eloquent {
	protected $guarded = array();

	protected $table = 'solicitud';

	public static $rules = array(
		'id' => '',
		'tema' => 'required',
		'descripcion' => 'required',
		'procesada' => '',
		'user' => ''
	);
}
