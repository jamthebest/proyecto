<?php

class Carrera extends Eloquent {
	protected $guarded = array();

	protected $table = 'carrera';

	public static $rules = array(
		'id' => '',
		'codigo' => 'required',
		'grado' => '',
		'nombre' => 'required',
		'descripcion' => '',
		'activo' => ''
	);
}
