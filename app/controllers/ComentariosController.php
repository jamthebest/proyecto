<?php

class ComentariosController extends BaseController {

	/**
	 * Comentario Repository
	 *
	 * @var Comentario
	 */
	protected $Comentario;

	public function __construct(Comentario $Comentario)
	{
		$this->Comentario = $Comentario;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Comentarios = $this->Comentario->all();

		return View::make('Comentarios.index', compact('Comentarios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Comentarios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Comentario::$rules);

		if ($validation->passes())
		{
			$this->Comentario->create($input);

			return Redirect::route('Comentarios.index')
				->with('message', 'Comentario enviado exitosamente!');
		}

		return Redirect::route('Comentarios.index')
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
		$Comentario = $this->Comentario->findOrFail($id);

		return View::make('Comentarios.show', compact('Comentario'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Comentario = $this->Comentario->find($id);

		if (is_null($Comentario))
		{
			return Redirect::route('Comentarios.index');
		}

		return View::make('Comentarios.edit', compact('Comentario'));
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
		$validation = Validator::make($input, Comentario::$rules);

		if ($validation->passes())
		{
			$Comentario = $this->Comentario->find($id);
			$Comentario->update($input);

			return Redirect::route('Comentarios.show', $id);
		}

		return Redirect::route('Comentarios.edit', $id)
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
		$this->Comentario->find($id)->delete();

		return Redirect::route('Comentarios.index');
	}

}
