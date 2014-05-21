<?php

class DatosController extends BaseController {

	/**
	 * Dato Repository
	 *
	 * @var Dato
	 */
	protected $Dato;

	public function __construct(Dato $Dato)
	{
		$this->Dato = $Dato;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Datos = $this->Dato->all();

		return View::make('Datos.index', compact('Datos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Datos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Dato::$rules);

		if ($validation->passes())
		{
			$this->Dato->create($input);

			return Redirect::route('Datos.index');
		}

		return Redirect::route('Datos.create')
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
		$Dato = $this->Dato->findOrFail($id);

		return View::make('Datos.show', compact('Dato'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Dato = $this->Dato->find($id);

		if (is_null($Dato))
		{
			return Redirect::route('Datos.index');
		}

		return View::make('Datos.edit', compact('Dato'));
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
		$validation = Validator::make($input, Dato::$rules);

		if ($validation->passes())
		{
			$Dato = $this->Dato->find($id);
			$Dato->update($input);

			return Redirect::route('Datos.show', $id);
		}

		return Redirect::route('Datos.edit', $id)
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
		$this->Dato->find($id)->delete();

		return Redirect::route('Datos.index');
	}

}
