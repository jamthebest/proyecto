<?php

class AsignaturasController extends BaseController {

	/**
	 * Asignatura Repository
	 *
	 * @var Asignatura
	 */
	protected $Asignatura;

	public function __construct(Asignatura $Asignatura)
	{
		$this->Asignatura = $Asignatura;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Asignaturas = $this->Asignatura->all();

		return View::make('Asignaturas.index', compact('Asignaturas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Asignaturas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Asignatura::$rules);

		if ($validation->passes())
		{
			$this->Asignatura->create($input);

			return Redirect::route('Asignaturas.index');
		}

		return Redirect::route('Asignaturas.create')
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
		$Asignatura = $this->Asignatura->findOrFail($id);

		return View::make('Asignaturas.show', compact('Asignatura'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Asignatura = $this->Asignatura->find($id);

		if (is_null($Asignatura))
		{
			return Redirect::route('Asignaturas.index');
		}

		return View::make('Asignaturas.edit', compact('Asignatura'));
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
		$validation = Validator::make($input, Asignatura::$rules);

		if ($validation->passes())
		{
			$Asignatura = $this->Asignatura->find($id);
			$Asignatura->update($input);

			return Redirect::route('Asignaturas.show', $id);
		}

		return Redirect::route('Asignaturas.edit', $id)
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
		$this->Asignatura->find($id)->delete();

		return Redirect::route('Asignaturas.index');
	}

}
