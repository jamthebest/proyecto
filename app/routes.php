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
Route::get('test', function() {
   $user = new Usuario();
   $user->id = '1';
   $user->user = 'jam';
   $user->email = 'javmidence@yahoo.es';
   $user->password = Hash::make('JamM221');
   $user->tipo = 'Administrador';
   $user->activo = '1';
   
   $user->save();
   return 'Usuario insertado correctamente.';
});

Route::get('/', function()
{
	return View::make('Inicio');
});

Route::get('Inicio', array('as' => 'Inicio', 'uses' =>'InicioController@inicio'));

Route::get('Ejemplos', array('as' => 'Ejemplos', 'uses' =>'InicioController@ejemplos'));

Route::get('/Informacion', function()
{
	return View::make('Informacion');
});

Route::get('/Categorias', function()
{
    return View::make('Categorias');
});

Route::get('Postgrado', array('as' => 'Postgrado', 'uses' =>'CarrerasController@Postgrado'));

Route::get('Pregrado', array('as' => 'Pregrado', 'uses' =>'CarrerasController@Pregrado'));

Route::get('/Login', ['before' => 'guest', function(){
	return View::make('Login');
}]);
//Procesa el formulario e identifica al usuario
Route::post('/Login', ['uses' => 'AuthController@doLogin', 'before' => 'guest']);
//Desconecta al usuario
Route::get('/Logout', ['uses' => 'AuthController@doLogout', 'before' => 'auth']);


Route::get('Registro', array('as' => 'Registro', 'uses' =>'UsuariosController@create', 'before' => 'guest'));

Route::post('Registro', array('as' => 'Registrar', 'uses' =>'UsuariosController@store', 'before' => 'guest'));

Route::group(array('before' => 'auth'), function()
{
	Route::post('Comentarios/{id}', array('as' => 'Comentarios.leer', 'uses' =>'ComentariosController@leer'));
	Route::post('Mensajes/{id}', array('as' => 'Mensajes.leer', 'uses' =>'MensajesController@leer'));
	Route::post('Solicitudes/{id}', array('as' => 'Solicitudes.procesar', 'uses' =>'SolicitudesController@procesar'));
    Route::get('Solicitudes/Revisar', array('as' => 'Solicitudes.revisar', 'uses' =>'SolicitudesController@revisar'));
    Route::get('Comentarios/Revisar', array('as' => 'Comentarios.revisar', 'uses' =>'ComentariosController@revisar'));
    Route::resource('Comentarios', 'ComentariosController');
    Route::resource('Solicitudes', 'SolicitudesController');
    Route::post('Solicitudes', array('as' => 'Solicitudes.guardar', 'uses' =>'SolicitudesController@guardar'));
});
Route::post('Mensajes/Enviar/{id}', array('as' => 'Mensajes.guardar', 'uses' =>'MensajesController@guardar'));
Route::resource('Usuarios', 'UsuariosController');

Route::resource('Datos', 'DatosController');

Route::resource('Rols', 'RolsController');

Route::resource('Carreras', 'CarrerasController');

Route::resource('Mensajes', 'MensajesController');