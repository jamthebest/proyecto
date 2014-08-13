@extends('layouts.scaffold')

@section('main')

<div id="container">
  <div class="row">
    <div class="col-md-5" id="titulo"><h2><span class="glyphicon glyphicon-file"></span> Solicitudes <small> &gt; Nueva Solicitud </small></h2></div>
  </div>
  <div class="page-header clearfix" style="margin-top:-2%">
      <div class="pull-right">
      <a href="{{{ URL::previous() }}}" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
    </div>
  </div>
</div>

{{ Form::open(array('route' => 'Solicitudes.store')) }}
    <div class="form-group">
        <div class="col-md-10 col-md-offset-1">
            <h3>Tema:</h3>
            {{ Form::text('Tema',null, array('class' => 'form-control', 'id' => 'Tema', 'placeholder' => 'Tema principal de la solicitud', 'maxlength'=>'128' )) }}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-10 col-md-offset-1">
            <h3>Descripción:</h3>
            {{ Form::textarea('Descripcion',null, array('class' => 'form-control', 'id' => 'Descripcion', 'placeholder' => 'Detalle de la Solicictud', 'rows' => '6')) }}
        </div>
    </div>
    <div class="col-md-10 col-md-offset-5"> 
        <br><br>
        {{ Form::submit('Enviar', array('class' => 'btn btn-success btn-lg')) }}
    </div>
{{ Form::close() }}

@stop


