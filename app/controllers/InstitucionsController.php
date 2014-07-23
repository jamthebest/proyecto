<?php

class InstitucionsController extends BaseController {

	/**
	 * Institucion Repository
	 *
	 * @var Institucion
	 */
	protected $Institucion;

	public function __construct(Institucion $Institucion)
	{
		$this->Institucion = $Institucion;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Institucions = $this->Institucion->all();

		return View::make('Institucions.index', compact('Institucions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Institucions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Institucion::$rules);

		if ($validation->passes())
		{
			$this->Institucion->create($input);

			return Redirect::route('Institucions.index');
		}

		return Redirect::route('Institucions.create')
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
		$Institucion = $this->Institucion->findOrFail($id);

		return View::make('Institucions.show', compact('Institucion'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Institucion = $this->Institucion->find($id);

		if (is_null($Institucion))
		{
			return Redirect::route('Institucions.index');
		}

		return View::make('Institucions.edit', compact('Institucion'));
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
		$validation = Validator::make($input, Institucion::$rules);

		if ($validation->passes())
		{
			$Institucion = $this->Institucion->find($id);
			$Institucion->update($input);

			return Redirect::route('Institucions.show', $id);
		}

		return Redirect::route('Institucions.edit', $id)
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
		$this->Institucion->find($id)->delete();

		return Redirect::route('Institucions.index');
	}

}
