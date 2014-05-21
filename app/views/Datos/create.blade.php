@extends('layouts.scaffold')

@section('main')

<h1>Create Dato</h1>

{{ Form::open(array('route' => 'Datos.store')) }}
	<ul>
        <li>
            {{ Form::label('id', 'Id:') }}
            {{ Form::text('id') }}
        </li>

        <li>
            {{ Form::label('Nombre', 'Nombre:') }}
            {{ Form::text('Nombre') }}
        </li>

        <li>
            {{ Form::label('Empresa', 'Empresa:') }}
            {{ Form::text('Empresa') }}
        </li>

        <li>
            {{ Form::label('Cargo', 'Cargo:') }}
            {{ Form::text('Cargo') }}
        </li>

        <li>
            {{ Form::label('Telefono', 'Telefono:') }}
            {{ Form::text('Telefono') }}
        </li>

        <li>
            {{ Form::label('user', 'User:') }}
            {{ Form::text('user') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


