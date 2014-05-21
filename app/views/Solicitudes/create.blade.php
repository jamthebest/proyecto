@extends('layouts.scaffold')

@section('main')

<h1>Create Solicitud</h1>

<div class="row">
    <div class="col-md-3"><h2>Solicitud > <small></small></h2></div>
</div>
{{ Form::open(array('route' => 'Comentarios.store')) }}
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


