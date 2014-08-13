@extends('layouts.scaffold')

@section('main')

<div id="container">
	<div class="row">
		<div class="col-md-4" id="titulo"><h2><span class="glyphicon glyphicon-bullhorn"></span> Usuario </h2></div>
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

<div class="pull-right">
	<p>{{ link_to('/', ' Inicio', array('class' => 'btn btn-success glyphicon glyphicon-home')) }}</p>
</div>

<div class="form-group col-md-12">
	<div class="col-md-2 control-label">
		<h3>ID</h3>
	</div>
	<div class="col-md-10">
		<h3 class="control-label">{{{ $Usuario->id }}}</h3>
	</div>
</div>
<div class="form-group col-md-12">
	<div class="col-md-2 control-label">
		<h3>Usuario</h3>
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
		<h3>Tipo:</h3>
	</div>
	<div class="col-md-10">
		<h3 class="control-label">{{{ $Usuario->tipo }}}</h3>
	</div>
</div>
<div class="form-group col-md-12">
	<div class="col-md-2 control-label">
		<h3>Fecha de Creación:</h3>
	</div>
	<div class="col-md-10">
		<h3 class="control-label">{{{ $Usuario->created_at }}}</h3>
	</div>
</div>
<!--
<div class="col-md-6 pull-right">
	<p>{{ link_to_route('Usuarios.edit', ' Editar', array($Usuario->id), array('class' => 'btn btn-primary glyphicon glyphicon-edit')) }}</p>
</div>
-->

@stop
