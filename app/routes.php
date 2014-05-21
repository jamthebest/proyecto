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

Route::get('Ejemplos', array('as' => 'Ejemplos', 'uses' =>'InicioController@ejemplos'));

Route::get('/Informacion', function()
{
	return View::make('Informacion');
});

Route::get('/Categorias', function()
{
    return View::make('Categorias');
});

Route::get('/Pregrado', function()
{
    return View::make('Pregrado');
});

Route::get('/Postgrado', function()
{
    return View::make('Postgrado');
});

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
    Route::resource('Comentarios', 'ComentariosController');
    Route::resource('Solicitudes', 'SolicitudesController');
});

Route::resource('Usuarios', 'UsuariosController');

Route::resource('Datos', 'DatosController');

Route::resource('Rols', 'RolsController');

Route::resource('Carreras', 'CarrerasController');
