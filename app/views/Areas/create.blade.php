@extends('layouts.scaffold')

@section('main')

<div id="container">
  <div class="row">
    <div class="col-md-4" id="titulo"><h2><span class="glyphicon glyphicon-file"></span> Áreas <small> &gt; Nueva Área </small> </h2></div>
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

{{ Form::open(array('route' => 'Areas.store', 'class' => "form-horizontal" , 'role' => 'form')) }}
	<div class="form-group">
    {{ Form::label('id', 'ID: *', array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-6">
      {{ Form::select('id', $ids, null, array('class' => 'form-control', 'id' => 'id')) }}
    </div>
  </div>
  <div class="form-group">
    {{ Form::label('area', 'Nombre del Área: *', array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-6">
      {{ Form::text('area', null, array('class' => 'form-control', 'id' => 'area', 'placeholder'=>'Nombre a mostrar', 'autofocus')) }}
    </div>
  </div>
  <div class="form-group" style="margin-top:5%;">
    <div class="col-md-2 col-md-offset-4">
      {{ Form::submit('Aceptar', array('class' => 'btn btn-primary')) }}
    </div>
    <div class="col-md-2">
      <a type="button" href="{{ URL::route('Areas.index') }}" class="btn btn-danger">
        Cancelar
      </a>
    </div>
  </div>
{{ Form::close() }}

@stop


