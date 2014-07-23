<?php

class SolicitudesController extends BaseController {

	/**
	 * Solicitud Repository
	 *
	 * @var Solicitud
	 */
	protected $Solicitud;

	public function __construct(Solicitud $Solicitud)
	{
		$this->Solicitud = $Solicitud;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Solicitudes = $this->Solicitud->all();
		$areas = Area::all()->lists('area', 'id');
		$instituciones = Institucion::all()->lists('institucion', 'id');
		$carreras = Carrera::all()->lists('nombre', 'id');
		$clases = Asignatura::all()->lists('nombre', 'id');
		//return $clases;

		return View::make('Solicitudes.index', compact('Solicitudes', 'areas', 'instituciones', 'carreras', 'clases'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Solicitudes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Solicitud::$rules);

		if ($validation->passes())
		{
			$this->Solicitud->create($input);

			return Redirect::route('Solicitudes.index')
				->with('message', 'Solicitud enviada exitosamente!');
		}

		return Redirect::route('Solicitudes.index')
			->withInput()
			->withErrors($validation)
			->with('message', 'Hay errores en la Solicitud');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$Solicitud = $this->Solicitud->findOrFail($id);
		$Usuario = Usuario::find($Solicitud->user);

		return View::make('Solicitudes.show', compact('Solicitud', 'Usuario'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Solicitud = $this->Solicitud->find($id);

		if (is_null($Solicitud))
		{
			return Redirect::route('Solicitudes.index');
		}

		return View::make('Solicitudes.edit', compact('Solicitud'));
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
		$validation = Validator::make($input, Solicitud::$rules);

		if ($validation->passes())
		{
			$Solicitud = $this->Solicitud->find($id);
			$Solicitud->update($input);

			return Redirect::route('Solicitudes.show', $id)
				->with('message', 'Solicitud enviada exitosamente!');
		}

		return Redirect::route('Solicitudes.edit', $id)
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
		$this->Solicitud->find($id)->delete();

		return Redirect::route('Solicitudes.index');
	}

	public function guardar()
	{
		$input = Input::all();
		$validation = Validator::make($input, Solicitud::$rules);
		
		if ($validation->passes())
		{
			$this->Solicitud->create($input);
			
			return Redirect::back()
				->with('message', 'Solicitud enviada exitosamente!');
		}

		return Redirect::back()
			->withInput()
			->withErrors($validation)
			->with('message', 'Hay errores en la Solicitud');
	}

	public function revisar()
	{
		$Solicitudes = Solicitud::orderBy('id', 'DESC')->paginate(10);
		$Usuarios = Usuario::all();
		
		return View::make('Solicitudes.revisar', compact('Solicitudes', 'Usuarios'));
	}

	public function procesar($id)
	{
		$Solicitud = $this->Solicitud->find($id);
		$Solicitud->procesada = 1;
		$Solicitud->save();
		$Usuario = Usuario::find($Solicitud->user);

		return View::make('Solicituds.show', compact('Solicitud', 'Usuario'));
	}

}
