@extends('layouts.scaffold')

@section('main')

<div id="container">
  <div class="row">
    <div class="col-md-6" id="titulo"><h2><span class="glyphicon glyphicon-pencil"></span> Usuarios <small> &gt; Editar Usuario </small> </h2></div>
  </div>
  <div class="page-header clearfix" style="margin-top:-2%">
      <div class="pull-right">
      <a href="{{{ URL::previous() }}}" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
    </div>
  </div>
</div>

{{ Form::model($Usuario, array('method' => 'PATCH', 'route' => array('Usuarios.update', $Usuario->id))) }}
	<div class="col-md-8">
        <div class="form-group col-md-12">
        {{ Form::label('user', 'Usuario:', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
                {{ Form::text('user', $Usuario->user, array('class' => 'form-control', 'id' => 'user', 'placeholder'=>'Correo Electrónico', 'disabled')) }}
          </div>
        </div>
        <div class="form-group col-md-12">
        {{ Form::label('email', 'Correo: *', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
              {{ Form::text('email', $Usuario->email, array('class' => 'form-control', 'id' => 'email', 'placeholder'=>'Correo Electrónico', 'maxlength'=>'128')) }}
          </div>
        </div>
        <div class="form-group col-md-12">
        {{ Form::label('password', 'Contraseña: *', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-8">
              {{ Form::password('password', array('class' => 'form-control', 'id' => 'password', 'placeholder'=>'Contraseña', 'maxlength'=>'128')) }}
          </div>
        </div>
    </div>
    <div class="form-group col-md-10" style="margin-top:5%;">
        <div class="col-md-2 col-md-offset-2">
            {{ Form::submit('Aceptar', array('class' => 'btn btn-primary')) }}
        </div>
        <div class="col-md-3">
          {{ link_to_route('Usuarios.show', 'Cancelar', $Usuario->id, array('class' => 'btn btn-danger')) }}
            
        </div>
    </div>
    {{ Form::hidden('user', $Usuario->user) }}
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
