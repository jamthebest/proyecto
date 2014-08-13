<?php

class Area extends Eloquent {
	protected $guarded = array();

	protected $table = 'area';

	public static $rules = array(
		'id' => 'required',
		'area' => 'required'
	);
}
