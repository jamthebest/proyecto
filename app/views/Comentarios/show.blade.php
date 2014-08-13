@extends('layouts.scaffold')

@section('main')

<div id="container">
  <div class="row">
    <div class="col-md-6" id="titulo"><h2><span class="glyphicon glyphicon-search"></span> Comentario </h2></div>
  </div>
  <div class="page-header clearfix" style="margin-top:-2%">
      <div class="pull-right">
      <a href="{{{ URL::previous() }}}" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
    </div>
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

<div class="form-group col-md-12" style="margin-top:5%">
	<div class="col-md-2 control-label">
		<h3>Codigo:</h3>
	</div>
	<div class="col-md-4">
		<h3 class="control-label">{{{ $Comentario->id }}}</h3>
	</div>
</div>
<div class="form-group col-md-12">
	<div class="col-md-2 control-label">
		<h3>Usuario:</h3>
	</div>
	<div class="col-md-10">
		<h3 class="control-label">{{{ $Usuario->user }}}</h3>
	</div>
</div>
<div class="form-group col-md-12">
	<div class="col-md-2 control-label">
		<h3>Correo:</h3>
	</div>
	<div class="col-md-10">
		<h3 class="control-label">{{{ $Usuario->email }}}</h3>
	</div>
</div>
<div class="form-group col-md-12">
	<div class="col-md-2 control-label">
		<h3>Comentario:</h3>
	</div>
	<div class="col-md-10">
		<h3 class="control-label">{{{ $Comentario->descripcion }}}</h3>
	</div>
</div>
<div class="form-group col-md-12">
	<div class="col-md-2 control-label">
		<h3>Fecha:</h3>
	</div>
	<div class="col-md-10">
		<h3 class="control-label">{{{ $Comentario->created_at }}}</h3>
	</div>
</div>

@if (Auth::check())
<div class="form-group text-center col-md-12">
	<h1><strong>Responder</strong></h1>
</div>
	{{ Form::open(array('method' => 'POST', 'route' => array('Mensajes.store'))) }}
		<div class="form-group">
			<div class="col-md-10 col-md-offset-1">
				<h3>Mensaje:</h3>
				{{ Form::textarea('descripcion',null, array('class' => 'form-control', 'id' => 'descripcion', 'placeholder' => 'Ingrese su Respuesta', 'rows' => '6')) }}
			</div>
		</div>
    <div class="col-md-10 col-md-offset-5" style="margin-bottom:3%"> 
    	<br><br>
    	{{ Form::hidden('user', Auth::user()->id) }}
    	{{ Form::hidden('destinatario', $Comentario->user) }}
    	{{ Form::hidden('asunto', 'Respuesta Comentario') }}
			{{ Form::hidden('created_at', date('Y-m-d H:i:s')) }}
			{{ Form::hidden('updated_at', date('Y-m-d H:i:s')) }}
    	{{ Form::submit('Enviar', array('class' => 'btn btn-success btn-lg')) }}
    </div>
	{{ Form::close() }}
@endif

@stop
