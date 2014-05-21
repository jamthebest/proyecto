<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('Inicio');
});

Route::get('Inicio', array('as' => 'Inicio', 'uses' =>'InicioController@inicio'));

Route::get('/Informacion', function()
{
	return View::make('Informacion');
});

Route::get('/Login', ['before' => 'guest', function(){
	return View::make('Login');
}]);
//Procesa el formulario e identifica al usuario
Route::post('/Login', ['uses' => 'AuthController@doLogin', 'before' => 'guest']);
//Desconecta al usuario
Route::get('/Logout', ['uses' => 'AuthController@doLogout', 'before' => 'auth']);


Route::get('Registro', array('as' => 'Registro', 'uses' =>'UsuariosController@create'));

Route::post('Registro', array('as' => 'Registrar', 'uses' =>'UsuariosController@store'));

Route::resource('Mensajes', 'MensajesController');

Route::resource('Usuarios', 'UsuariosController');

Route::resource('Datos', 'DatosController');

Route::resource('Comentarios', 'ComentariosController');

Route::resource('Solicitudes', 'SolicitudesController');

Route::resource('Rols', 'RolsController');

Route::resource('Carreras', 'CarrerasController');

Route::post('registro', function(){
 
    $input = Input::all();
    
    // al momento de crear el usuario la clave debe ser encriptada
    // para utilizamos la función estática make de la clase Hash
    // esta función encripta el texto para que sea almacenado de manera segura
    $input['password'] = Hash::make($input['password']);
    User::create($input);
 
    return Redirect::to('/Login')->with('mensaje_registro', 'Usuario Registrado');
});