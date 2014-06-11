<?php

class Mensaje extends Eloquent {
	protected $guarded = array();

	protected $table = 'mensajes';

	public static $rules = array(
		'id' => '',
		'destinatario' => 'required',
		'user' => 'required',
		'asunto' => 'required',
		'descripcion' => 'required',
		'leido' => ''
	);
}
