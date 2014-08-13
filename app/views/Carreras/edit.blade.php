@extends('layouts.scaffold')

@section('main')

<div id="container">
  <div class="row">
    <div class="col-md-5" id="titulo"><h2><span class="glyphicon glyphicon-pencil"></span> Carreras <small> &gt; Editar Carrera </small> </h2></div>
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

{{ Form::model($Carrera, array('method' => 'PATCH', 'route' => array('Carreras.update', $Carrera->id), 'class' => "form-horizontal" , 'role' => 'form')) }}
	<div class="form-group">
      {{ Form::label('codigo', 'Código: *', array('class' => 'col-md-3 control-label')) }}
      <div class="col-md-6">
        {{ Form::text('codigo', $Carrera->codigo, array('class' => 'form-control', 'id' => 'codigo', 'placeholder'=>'Código de la Carrera', 'maxlength'=>'10')) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('nombre', 'Nombre: *', array('class' => 'col-md-3 control-label')) }}
      <div class="col-md-6">
        {{ Form::text('nombre', $Carrera->nombre, array('class' => 'form-control', 'id' => 'nombre', 'placeholder'=>'Nombre de la Carrera', 'maxlength'=>'100')) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('grado', 'Grado: *', array('class' => 'col-md-3 control-label')) }}
      <div class="col-md-6">
        {{ Form::select('grado', array('LICENCIATURA' => 'LICENCIATURA', 'INGENIERÍA' => 'INGENIERÍA', 'GRADO ASOCIADO' => 'GRADO ASOCIADO', 'MAESTRÍA' => 'MAESTRÍA', 'MEDICINA' => 'MEDICINA'), $Carrera->grado, array('class' => 'form-control', 'title' => 'Grado', 'id' => 'grado' )) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('descripcion', 'Descripción:', array('class' => 'col-md-3 control-label')) }}
      <div class="col-md-6">
        {{ Form::textarea('descripcion', $Carrera->descripcion, array('class' => 'form-control', 'id' => 'descripcion', 'placeholder'=>'Descrpción General de la Carrera', 'rows' => '3')) }}
      </div>
    </div>
    {{ Form::hidden('activo', 1) }}
    <div class="form-group" style="margin-top:5%;">
      <div class="col-md-2 col-md-offset-4">
        {{ Form::submit('Aceptar', array('class' => 'btn btn-primary')) }}
      </div>
      <div class="col-md-2">
        <a type="button" href="{{ URL::route('Carreras.index') }}" class="btn btn-danger">
          Cancelar
        </a>
      </div>
    </div>
{{ Form::close() }}

@stop
