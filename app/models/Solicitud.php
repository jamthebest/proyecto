<?php

class Solicitud extends Eloquent {
	protected $guarded = array();

	protected $table = 'solicitud';

	public static $rules = array(
		'id' => '',
		'area_geografica' => 'required',
		'tipo_institucion' => 'required',
		'area_especializacion' => 'required',
		'area_subespecializacion' => 'required',
		'tema' => 'required',
		'descripcion' => 'required',
		'procesada' => '',
		'user' => ''
	);
}
