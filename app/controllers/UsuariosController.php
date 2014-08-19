<?php

class UsuariosController extends BaseController {

	/**
	 * Usuario Repository
	 *
	 * @var Usuario
	 */
	protected $Usuario;
	protected $Dato;

	public function __construct(Usuario $Usuario)
	{
		$this->Usuario = $Usuario;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//if (Auth::user()->tipo == 'Administrador') {
			$Usuarios = $this->Usuario->paginate(10);
			return View::make('Usuarios.index', compact('Usuarios'));
		//}
		return Redirect::route('Inicio')->withErrors('No tiene permisos para acceder a esta página!');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Usuarios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$val1 = Usuario::$rules;
		$val2 = Dato::$rules;
		$val3 = $val1+$val2;
		//return $val3+$input;
		$validation = Validator::make($input, $val3);
		
		if ($validation->passes())
		{
			$user['user'] = $input['user'];
			$user['email'] = $input['email'];
			$user['password'] = Hash::make($input['password']);
			$user['tipo'] = $input['tipo'];
			$user['activo'] = '1';
			$user['created_at'] = $input['created_at'];
			$user['updated_at'] = $input['updated_at'];
			$this->Usuario->create($user);

			$usuario = Usuario::where('user', '=', $user['user'])->get();
			$dato['nombre'] = $input['nombre'];
			$dato['empresa'] = $input['empresa'];
			$dato['cargo'] = $input['cargo'];
			$dato['telefono'] = $input['telefono'];
			$dato['user'] = $usuario[0]->id;
			$dato['created_at'] = $input['created_at'];
			$dato['updated_at'] = $input['updated_at'];
			Dato::create($dato);

			$username = mb_strtolower(trim(Input::get('user')));
			// Obtenemos la contraseña enviada
			$password = Input::get('password');
			if (Auth::attempt(['user' => $username, 'password' => $password]))
			{
				return Redirect::to('Inicio')
					->with('message', 'Usuario Creado Exitosamente!');
			}

			return Redirect::route('Inicio')
				->with('message', 'Usuario Creado Exitosamente!');
		}

		return Redirect::route('Registro')
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
		$Usuario = $this->Usuario->findOrFail($id);

		return View::make('Usuarios.show', compact('Usuario'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Usuario = $this->Usuario->find($id);

		if (is_null($Usuario))
		{
			return Redirect::route('Usuarios.index');
		}

		return View::make('Usuarios.edit', compact('Usuario'));
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
		$validation = Validator::make($input, Usuario::$rules);

		if ($validation->passes())
		{
			$Usuario = $this->Usuario->find($id);
			$Usuario->update($input);

			return Redirect::route('Usuarios.show', $id);
		}

		return Redirect::route('Usuarios.edit', $id)
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
		$user = $this->Usuario->find($id);
		$user->activo = 0;
		$user->save();

		return Redirect::back()->withErrors('Usuario Desactivado');
	}

	public function Habilitar($id)
	{
		$user = $this->Usuario->find($id);
		$user->activo = 1;
		$user->save();

		return Redirect::back()->with('message', 'Usuario Activado');
	}

	public function test()
	{
		$input = Input::all();

			$user['user'] = 'jam22';
			$user['email'] = 'javmidence22@yahoo.es';
			$user['password'] = '$2y$08$gJp5yizzfh6MnCP.nQJlfuwDjJC6R1xR69555sQNkOIraYmdVHP4e';
			$user['tipo'] = 'Administrador';
			$user['activo'] = '1';
			$this->Usuario->create($user);
		
		  return Redirect::route('Inicio')
			->with('message', 'Usuario insertado correctamente.');
	}

}
