@extends('layouts.scaffold')

@section('main')

<h1>Edit Usuario</h1>

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
        {{ Form::label('password', 'Pregunta: *', array('class' => 'col-md-3 control-label')) }}
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
