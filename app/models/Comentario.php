<?php

class Comentario extends Eloquent {
	protected $guarded = array();

	protected $table = 'comentario';

	public static $rules = array(
		'id' => '',
		'descripcion' => 'required',
		'leido' => '',
		'user' => ''
	);
}
