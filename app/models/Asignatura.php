<?php

class Asignatura extends Eloquent {
	protected $guarded = array();

	protected $table = 'asignatura';

	public static $rules = array(
		'id' => '',
		'codigo' => 'required',
		'nombre' => 'required',
		'descripcion' => '',
		'activo' => 'required'
	);
}
