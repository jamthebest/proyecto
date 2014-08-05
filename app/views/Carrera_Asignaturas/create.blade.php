@extends('layouts.scaffold')

@section('main')

<h1>Create Carrera_Asignatura</h1>

{{ Form::open(array('route' => 'Carrera_Asignaturas.store')) }}
	<ul>
        <li>
            {{ Form::label('asignatura', 'Asignatura:') }}
            {{ Form::text('asignatura') }}
        </li>

        <li>
            {{ Form::label('carrera', 'Carrera:') }}
            {{ Form::text('carrera') }}
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


