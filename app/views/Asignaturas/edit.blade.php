@extends('layouts.scaffold')

@section('main')

<h1>Edit Asignatura</h1>
{{ Form::model($Asignatura, array('method' => 'PATCH', 'route' => array('Asignaturas.update', $Asignatura->id))) }}
	<ul>
        <li>
            {{ Form::label('id', 'Id:') }}
            {{ Form::input('number', 'id') }}
        </li>

        <li>
            {{ Form::label('codigo', 'Codigo:') }}
            {{ Form::text('codigo') }}
        </li>

        <li>
            {{ Form::label('nombre', 'Nombre:') }}
            {{ Form::text('nombre') }}
        </li>

        <li>
            {{ Form::label('descripcion', 'Descripcion:') }}
            {{ Form::text('descripcion') }}
        </li>

        <li>
            {{ Form::label('activo', 'Activo:') }}
            {{ Form::input('number', 'activo') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('Asignaturas.show', 'Cancel', $Asignatura->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
