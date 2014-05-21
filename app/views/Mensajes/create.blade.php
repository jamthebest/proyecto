@extends('layouts.scaffold')

@section('main')

<h1>Create Mensaje</h1>

{{ Form::open(array('route' => 'Mensajes.store')) }}
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
            {{ Form::label('Descripcion', 'Descripcion:') }}
            {{ Form::textarea('Descripcion') }}
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


