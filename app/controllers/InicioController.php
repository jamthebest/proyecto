<?php

class InicioController extends BaseController {

	/**
	 * Attempt user login
	 */
	public function inicio()
	{
		return View::make('Inicio');
	}

	public function ejemplos()
	{
		return View::make('Ejemplos');
	}

}