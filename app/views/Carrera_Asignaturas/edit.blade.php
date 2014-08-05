@extends('layouts.scaffold')

@section('main')

<h1>Edit Carrera_Asignatura</h1>
{{ Form::model($Carrera_Asignatura, array('method' => 'PATCH', 'route' => array('Carrera_Asignaturas.update', $Carrera_Asignatura->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('Carrera_Asignaturas.show', 'Cancel', $Carrera_Asignatura->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
