@extends('layouts.scaffold')

@section('main')

<h1>Edit Usuario</h1>
{{ Form::model($Usuario, array('method' => 'PATCH', 'route' => array('Usuarios.update', $Usuario->id))) }}
	<ul>
        <li>
            {{ Form::label('id', 'Id:') }}
            {{ Form::text('id') }}
        </li>

        <li>
            {{ Form::label('user', 'User:') }}
            {{ Form::text('user') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('pass', 'Pass:') }}
            {{ Form::text('pass') }}
        </li>

        <li>
            {{ Form::label('Activo', 'Activo:') }}
            {{ Form::text('Activo') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('Usuarios.show', 'Cancel', $Usuario->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
