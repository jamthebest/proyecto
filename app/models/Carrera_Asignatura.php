<?php

class Carrera_Asignatura extends Eloquent {
	protected $guarded = array();

	protected $table = 'carrera_asignatura';

	public static $rules = array(
		'asignatura' => 'required',
		'carrera' => 'required'
	);
}
