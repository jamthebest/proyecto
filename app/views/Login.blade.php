@extends('layouts.scaffold')

@section('title')
	Identificación
@stop

@section('main')
	
	<div class="row">
    	<div class="col-md-3"><h2>Ingreso <small></small></h2></div>
	</div>

	@if(Session::has('message'))
		<div class="alert alert-danger fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('message') }}
        </div>
	@endif

	{{ Form::open(array('url' => '/Login', 'method' => 'POST')) }}
		<div class="col-md-5 col-md-offset-3" style="margin-top:5%">
			<label for="user">Usuario:</label>
			{{ Form::text('user',null, array('style' => 'margin-bottom:5%;', 'class' => 'form-control', 'id' => 'user', 'placeholder' => 'Usuario', 'autofocus')) }}
			<label for="password">Contraseña:</label>
			{{ Form::password('password', array('style' => 'margin-bottom:10%;', 'class' => 'form-control', 'id' => 'password', 'placeholder' => 'Contraseña')) }}
			{{ Form::submit('Ingrersar', array('class' => 'btn btn-lg btn-primary btn-block')) }}
		    
	    </div>
	{{ Form::close() }}

	<div class="col-md-11 text-center">
		<h4><br><br>¿Aún No Tiene una Cuenta?<br>
		<a href="Registro"><strong>Regístrese aquí.</strong></a></h4>
	</div>

@stop
