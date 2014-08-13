@extends('layouts.scaffold')

@section('main')

<div id="container">
	<div class="row">
		<div class="col-md-4" id="titulo"><h2><span class="glyphicon glyphicon-cog"></span> Solicitudes </h2></div>
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

{{ Form::open(array('route' => 'Solicitudes.store')) }}
	<div class="form-group">
    <div class="col-md-5 col-md-offset-1">
      <h3>Área Geográfica:</h3>
      {{ Form::select('area_geografica', $areas, null, array('class' => 'form-control', 'id' => 'area_geografica' )) }}
    </div>
  </div>
  <div class="form-group">
	  <div class="col-md-5">
      <h3>Tipo de Institución:</h3>
      {{ Form::select('tipo_institucion', $instituciones, null, array('class' => 'form-control', 'id' => 'tipo_institucion' )) }}
	  </div>
  </div>
  <div class="page-header clearfix"></div>
  <div class="form-group">
	  <div class="col-md-5 col-md-offset-1">
      <h3>Área de Especialización:</h3>
      {{ Form::select('area_especializacion', $carreras, null, array('class' => 'form-control', 'id' => 'area_especializacion' )) }}
	  </div>
  </div>
  <div class="form-group">
	  <div class="col-md-5">
      <h3>Área de Subespecialización:</h3>
      {{ Form::select('area_subespecializacion', $clases, null, array('class' => 'form-control', 'id' => 'area_subespecializacion' )) }}
	  </div>
  </div>
  <div class="page-header clearfix"></div>
  <div class="form-group">
		<div class="col-md-10 col-md-offset-1">
			<h3>Descripción del Problema:</h3>
			{{ Form::textarea('tema',null, array('class' => 'form-control', 'id' => 'tema', 'placeholder' => 'Tema principal de la solicitud', 'rows'=>'6' )) }}
		</div>
	</div>
	<div class="page-header clearfix"></div>
	<div class="form-group">
		<div class="col-md-10 col-md-offset-1">
			<h3>Descripción del Requerimiento:</h3>
			{{ Form::textarea('descripcion',null, array('class' => 'form-control', 'id' => 'descripcion', 'placeholder' => 'Detalle de la Solicictud', 'rows' => '6')) }}
		</div>
	</div>
	<div class="page-header clearfix"></div>
    <div class="col-md-10 col-md-offset-5" style="margin-bottom:4%"> 
    	<br><br>
    	{{ Form::hidden('procesada', '0') }}
			{{ Form::hidden('user', Auth::user()->id) }}
			{{ Form::hidden('created_at', date('Y-m-d H:i:s')) }}
			{{ Form::hidden('updated_at', date('Y-m-d H:i:s')) }}
    	{{ Form::submit('Enviar', array('class' => 'btn btn-success btn-lg')) }}
    </div>
{{ Form::close() }}

@stop
