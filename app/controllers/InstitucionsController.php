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
		$Instituciones = $this->Institucion->paginate(10);

		return View::make('Institucions.index', compact('Instituciones'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$cantidad = $this->Institucion->all()->count();
		$ids = array();
		for ($i=1; $i <= $cantidad; $i++) { 
			$x = $this->Institucion->find($i);
			if (!$x) {
				array_push($ids, $i);
			}
		}
		$sig = $this->Institucion->orderBy('id', 'DESC')->first()->id + 1;
		array_push($ids, $sig);
		return View::make('Institucions.create', compact('ids'));
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

			return Redirect::route('Instituciones.index');
		}

		return Redirect::route('Instituciones.create')
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
			return Redirect::route('Instituciones.index');
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
			if ($id == $input['id']) {
				$Institucion = $this->Institucion->find($id);
				$Institucion->update($input);
			}else{
				$x = $this->Institucion->find($input['id']);
				if ($x) {
					return Redirect::route('Instituciones.edit', $id)
						->withInput()
						->withErrors('El ID ingresado ya está utilizado!');
				}else{
					$this->Institucion->find($id)->delete();
					$this->Institucion->create($input);
				}
			}

			return Redirect::route('Instituciones.index');
		}

		return Redirect::route('Instituciones.edit', $id)
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
		$Institucion = $this->Institucion->find($id);
		$Institucion->activo = 0;
		$Institucion->save();

		return Redirect::route('Instituciones.index')->with('message', 'Institución Desactivada!');
	}

	public function Activar($id)
	{
		$Institucion = $this->Institucion->find($id);
		$Institucion->activo = 1;
		$Institucion->save();

		return Redirect::route('Instituciones.index')->with('message', 'Institución Activada!');
	}

}
