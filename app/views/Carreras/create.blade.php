@extends('layouts.scaffold')

@section('main')

<h1>Create Carrera</h1>

{{ Form::open(array('route' => 'Carreras.store')) }}
	<ul>
        <li>
            {{ Form::label('id', 'Id:') }}
            {{ Form::text('id') }}
        </li>

        <li>
            {{ Form::label('Codigo', 'Codigo:') }}
            {{ Form::text('Codigo') }}
        </li>

        <li>
            {{ Form::label('Nombre', 'Nombre:') }}
            {{ Form::text('Nombre') }}
        </li>

        <li>
            {{ Form::label('Descripcion', 'Descripcion:') }}
            {{ Form::text('Descripcion') }}
        </li>

        <li>
            {{ Form::label('Activo', 'Activo:') }}
            {{ Form::text('Activo') }}
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


