<?php

class AreasController extends BaseController {

	/**
	 * Area Repository
	 *
	 * @var Area
	 */
	protected $Area;

	public function __construct(Area $Area)
	{
		$this->Area = $Area;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Areas = $this->Area->paginate(10);

		return View::make('Areas.index', compact('Areas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$cantidad = $this->Area->all()->count();
		$ids = array();
		for ($i=1; $i <= $cantidad; $i++) { 
			$x = $this->Area->find($i);
			if (!$x) {
				array_push($ids, $i);
			}
		}
		$sig = $this->Area->orderBy('id', 'DESC')->first()->id + 1;
		array_push($ids, $sig);
		return View::make('Areas.create', compact('ids'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Area::$rules);

		if ($validation->passes())
		{
			$this->Area->create($input);

			return Redirect::route('Areas.index');
		}

		return Redirect::route('Areas.create')
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
		$Area = $this->Area->findOrFail($id);

		return View::make('Areas.show', compact('Area'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Area = $this->Area->find($id);

		if (is_null($Area))
		{
			return Redirect::route('Areas.index');
		}

		return View::make('Areas.edit', compact('Area'));
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
		$validation = Validator::make($input, Area::$rules);

		if ($validation->passes())
		{
			if ($id == $input['id']) {
				$Area = $this->Area->find($id);
				$Area->update($input);
			}else{
				$x = $this->Area->find($input['id']);
				if ($x) {
					return Redirect::route('Areas.edit', $id)
						->withInput()
						->withErrors('El ID ingresado ya está utilizado!');
				}else{
					$this->Area->find($id)->delete();
					$this->Area->create($input);
				}
			}

			return Redirect::route('Areas.index');
		}

		return Redirect::route('Areas.edit', $id)
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
		$Area = $this->Area->find($id);
		$Area->activo = 0;
		$Area->save();

		return Redirect::route('Areas.index')->with('message', 'Área Desactivada!');
	}

	public function Activar($id)
	{
		$Area = $this->Area->find($id);
		$Area->activo = 1;
		$Area->save();

		return Redirect::route('Areas.index')->with('message', 'Área Activada!');
	}

}
