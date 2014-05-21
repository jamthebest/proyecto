<?php

class Mensaje extends Eloquent {
	protected $guarded = array();

	protected $table = 'mensaje';

	public static $rules = array(
		'id' => '',
		'codigo' => 'required',
		'descripcion' => 'required',
		'activo' => ''
	);
}
