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
		$Carreras = $this->Carrera->paginate(10);

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
		//return $input;
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
		$Carrera = $this->Carrera->find($id);
		$Carrera->activo = 0;
		$Carrera->save();

		return Redirect::route('Carreras.index')->with('message', 'Carrera Desactivada!');
	}

	public function Activar($id)
	{
		$Carrera = $this->Carrera->find($id);
		$Carrera->activo = 1;
		$Carrera->save();

		return Redirect::route('Carreras.index')->with('message', 'Carrera Activada!');
	}


	public function Postgrado()
	{
		$Tecnicos = Carrera::where('grado', 'GRADO ASOCIADO')->get();
		$Maestrias = Carrera::Where('grado', 'MAESTRÍA')->get();
		//return $Carreras;
		return View::make('Postgrado', compact('Maestrias', 'Tecnicos'));
	}

	public function Pregrado()
	{
		$Licenciaturas = Carrera::where('grado', 'LICENCIATURA')->orWhere('grado', 'MEDICINA')->get();
		$Ingenierias = Carrera::where('grado', 'INGENIERÍA')->get();
		return View::make('Pregrado', compact('Licenciaturas', 'Ingenierias'));
	}
}
