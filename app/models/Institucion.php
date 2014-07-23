<?php

class Institucion extends Eloquent {
	protected $guarded = array();

	protected $table = 'institucion';

	public static $rules = array(
		'id' => '',
		'institucion' => 'required'
	);
}
