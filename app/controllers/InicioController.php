<?php

class InicioController extends BaseController {

	/**
	 * Attempt user login
	 */
	public function inicio()
	{
		return View::make('Inicio');
	}

}