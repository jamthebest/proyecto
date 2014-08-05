<?php

class Carrera_AsignaturasController extends BaseController {

	/**
	 * Carrera_Asignatura Repository
	 *
	 * @var Carrera_Asignatura
	 */
	protected $Carrera_Asignatura;

	public function __construct(Carrera_Asignatura $Carrera_Asignatura)
	{
		$this->Carrera_Asignatura = $Carrera_Asignatura;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Carrera_Asignaturas = $this->Carrera_Asignatura->all();

		return View::make('Carrera_Asignaturas.index', compact('Carrera_Asignaturas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Carrera_Asignaturas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Carrera_Asignatura::$rules);

		if ($validation->passes())
		{
			$this->Carrera_Asignatura->create($input);

			return Redirect::route('Carrera_Asignaturas.index');
		}

		return Redirect::route('Carrera_Asignaturas.create')
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
		$Carrera_Asignatura = $this->Carrera_Asignatura->findOrFail($id);

		return View::make('Carrera_Asignaturas.show', compact('Carrera_Asignatura'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Carrera_Asignatura = $this->Carrera_Asignatura->find($id);

		if (is_null($Carrera_Asignatura))
		{
			return Redirect::route('Carrera_Asignaturas.index');
		}

		return View::make('Carrera_Asignaturas.edit', compact('Carrera_Asignatura'));
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
		$validation = Validator::make($input, Carrera_Asignatura::$rules);

		if ($validation->passes())
		{
			$Carrera_Asignatura = $this->Carrera_Asignatura->find($id);
			$Carrera_Asignatura->update($input);

			return Redirect::route('Carrera_Asignaturas.show', $id);
		}

		return Redirect::route('Carrera_Asignaturas.edit', $id)
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
		$this->Carrera_Asignatura->find($id)->delete();

		return Redirect::route('Carrera_Asignaturas.index');
	}

}
