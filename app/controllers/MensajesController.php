<?php

class MensajesController extends BaseController {

	/**
	 * Mensaje Repository
	 *
	 * @var Mensaje
	 */
	protected $Mensaje;

	public function __construct(Mensaje $Mensaje)
	{
		$this->Mensaje = $Mensaje;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Mensajes = $this->Mensaje->where('destinatario', Auth::user()->id)->orderBy('id', 'DESC')->paginate(10);
		$Usuarios = Usuario::all();

		return View::make('Mensajes.index', compact('Mensajes', 'Usuarios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return Redirect::route('Mensajes.index');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Mensaje::$rules);

		if ($validation->passes())
		{
			$this->Mensaje->create($input);

			return Redirect::back()
				->with('message', 'Mensaje Enviado Correctamente!');
		}

		return Redirect::back()
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$Mensaje = $this->Mensaje->findOrFail($id);
		$Usuario = Usuario::find($Mensaje->user);

		return View::make('Mensajes.show', compact('Mensaje', 'Usuario'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Mensaje = $this->Mensaje->find($id);

		if (is_null($Mensaje))
		{
			return Redirect::route('Mensajes.index');
		}

		return View::make('Mensajes.edit', compact('Mensaje'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Mensaje::$rules);

		if ($validation->passes())
		{
			$Mensaje = $this->Mensaje->find($id);
			$Mensaje->update($input);

			return Redirect::route('Mensajes.show', $id);
		}

		return Redirect::route('Mensajes.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->Mensaje->find($id)->delete();

		return Redirect::route('Mensajes.index');
	}

	public function guardar($id)
	{
		$input = Input::all();
		$validation = Validator::make($input, Mensaje::$rules);

		if ($validation->passes())
		{
			$Solicitud = Solicitud::find($id);
			$Solicitud->procesada = 1;
			$Solicitud->save();

			Mensaje::create($input);

			$Usuario = Usuario::find($Solicitud->user);

			return View::make('Solicitudes.show', compact('Solicitud', 'Usuario'))
				->with('message', 'Mensaje Enviado!');
		}

		return Redirect::back()
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	public function guardar2($id)
	{
		$input = Input::all();
		$validation = Validator::make($input, Mensaje::$rules);

		if ($validation->passes())
		{
			Mensaje::create($input);

			$Usuario = Usuario::find($Comentario->user);

			return View::make('Solicitudes.show', compact('Comentario', 'Usuario'))
				->with('message', 'Mensaje Enviado!');
		}

		return Redirect::back()
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	public function leer($id)
	{
		$Mensaje = $this->Mensaje->find($id);
		$Mensaje->leido = 1;
		$Mensaje->save();
		$Usuario = Usuario::find($Mensaje->user);

		return View::make('Mensajes.show', compact('Mensaje', 'Usuario'));
	}

}
