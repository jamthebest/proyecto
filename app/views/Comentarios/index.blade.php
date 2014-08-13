@extends('layouts.scaffold')

@section('main')

<div id="container">
	<div class="row">
		<div class="col-md-4" id="titulo"><h2><span class="glyphicon glyphicon-cog"></span> Comentarios </h2></div>
	</div>
</div>

@if ($errors->any())
	<div class="alert alert-danger fade in">
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	    @if($errors->count() > 1)
		  	<h4>Oh no! Se encontraron errores!</h4>
		@else
		   	<h4>Oh no! Se encontró un error!</h4>
		@endif
		<ul>
		    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</ul>
	</div>
@else
	@if (Session::has('message'))
		<div class="alert alert-success fade in">
      		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      		{{ Session::get('message') }}
		</div>
	@endif
@endif

{{ Form::open(array('route' => 'Comentarios.store')) }}
	<div class="row">
	  <div class="col-md-10 col-md-offset-1 text-center">
	  	<br><br>
	  	<h2>¿Tiene comentarios, sugerencias o dudas?.<br><br> 
	  	Puede dejarlos aquí.</h2>
	  	<br><br>
	  </div>
	  <div class="col-md-10 col-md-offset-1">
	  {{ Form::textarea('descripcion',null, array('class' => 'form-control', 'id' => 'descripcion', 'placeholder' => 'text', 'rows' => '8' )) }}
	  <div class="col-md-10 col-md-offset-5"> <br><br>{{ Form::submit('Enviar', array('class' => 'btn btn-success btn-lg')) }}</div>
	</div>
	{{ Form::hidden('leido', '0') }}
	{{ Form::hidden('user', Auth::user()->id) }}
	{{ Form::hidden('created_at', date('Y-m-d H:i:s')) }}
	{{ Form::hidden('updated_at', date('Y-m-d H:i:s')) }}
{{ Form::close() }}

@stop
