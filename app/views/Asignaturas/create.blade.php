@extends('layouts.scaffold')

@section('main')

<div class="page-header clearfix">
    <h3 class="pull-left">Asignaturas <small> &gt; Nueva Asignatura</small></h3>
    <div class="pull-right">
        <a href="{{{ URL::previous() }}}" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
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

{{ Form::open(array('route' => 'Asignaturas.store', 'class' => "form-horizontal" , 'role' => 'form')) }}
  <div class="form-group">
    {{ Form::label('codigo', 'Código: *', array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-6">
      {{ Form::text('codigo', null, array('class' => 'form-control', 'id' => 'codigo', 'placeholder'=>'Código de la Asignatura', 'maxlength'=>'10')) }}
    </div>
  </div>
  <div class="form-group">
    {{ Form::label('nombre', 'Nombre: *', array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-6">
      {{ Form::text('nombre', null, array('class' => 'form-control', 'id' => 'nombre', 'placeholder'=>'Nombre de la Asignatura', 'maxlength'=>'100')) }}
    </div>
  </div>
  <div class="form-group">
    {{ Form::label('descripcion', 'Descripción:', array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-6">
      {{ Form::textarea('descripcion', null, array('class' => 'form-control', 'id' => 'descripcion', 'placeholder'=>'Descrpción General de la Asignatura', 'rows' => '3')) }}
    </div>
  </div>
  {{ Form::hidden('activo', 1) }}
  <div class="form-group" style="margin-top:5%;">
    <div class="col-md-2 col-md-offset-4">
      {{ Form::submit('Aceptar', array('class' => 'btn btn-primary')) }}
    </div>
    <div class="col-md-2">
      <a type="button" href="{{ URL::route('Asignaturas.index') }}" class="btn btn-danger">
        Cancelar
      </a>
    </div>
  </div>
{{ Form::close() }}

@stop


