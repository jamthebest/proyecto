<?php

class RolsController extends BaseController {

	/**
	 * Rol Repository
	 *
	 * @var Rol
	 */
	protected $Rol;

	public function __construct(Rol $Rol)
	{
		$this->Rol = $Rol;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Rols = $this->Rol->all();

		return View::make('Rols.index', compact('Rols'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Rols.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Rol::$rules);

		if ($validation->passes())
		{
			$this->Rol->create($input);

			return Redirect::route('Rols.index');
		}

		return Redirect::route('Rols.create')
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
		$Rol = $this->Rol->findOrFail($id);

		return View::make('Rols.show', compact('Rol'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Rol = $this->Rol->find($id);

		if (is_null($Rol))
		{
			return Redirect::route('Rols.index');
		}

		return View::make('Rols.edit', compact('Rol'));
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
		$validation = Validator::make($input, Rol::$rules);

		if ($validation->passes())
		{
			$Rol = $this->Rol->find($id);
			$Rol->update($input);

			return Redirect::route('Rols.show', $id);
		}

		return Redirect::route('Rols.edit', $id)
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
		$this->Rol->find($id)->delete();

		return Redirect::route('Rols.index');
	}

}
