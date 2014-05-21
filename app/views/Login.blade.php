@extends('layouts.scaffold')

@section('title')
	Identificación
@stop

@section('main')
	
	<div class="row">
    	<div class="col-md-3"><h2>Ingreso > <small></small></h2></div>
	</div>

	@if(Session::get('message'))
		<div class="alert alert-danger fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('message') }}
        </div>
	@endif

	{{ Form::open(array('url' => '/Login', 'method' => 'POST')) }}
		Usuario <input type="text" name="user" /> <br />
		Contraseña <input type="password" name="password" /> <br />
		<input type="submit" value="Ingresar" />
	{{ Form::close() }}

@stop
