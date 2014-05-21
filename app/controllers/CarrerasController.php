<?php

class CarrerasController extends BaseController {

	/**
	 * Carrera Repository
	 *
	 * @var Carrera
	 */
	protected $Carrera;

	public function __construct(Carrera $Carrera)
	{
		$this->Carrera = $Carrera;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Carreras = $this->Carrera->all();

		return View::make('Carreras.index', compact('Carreras'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Carreras.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Carrera::$rules);

		if ($validation->passes())
		{
			$this->Carrera->create($input);

			return Redirect::route('Carreras.index');
		}

		return Redirect::route('Carreras.create')
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
		$Carrera = $this->Carrera->findOrFail($id);

		return View::make('Carreras.show', compact('Carrera'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Carrera = $this->Carrera->find($id);

		if (is_null($Carrera))
		{
			return Redirect::route('Carreras.index');
		}

		return View::make('Carreras.edit', compact('Carrera'));
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
		$validation = Validator::make($input, Carrera::$rules);

		if ($validation->passes())
		{
			$Carrera = $this->Carrera->find($id);
			$Carrera->update($input);

			return Redirect::route('Carreras.show', $id);
		}

		return Redirect::route('Carreras.edit', $id)
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
		$this->Carrera->find($id)->delete();

		return Redirect::route('Carreras.index');
	}

}
