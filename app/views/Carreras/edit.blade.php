@extends('layouts.scaffold')

@section('main')

<h1>Edit Carrera</h1>
{{ Form::model($Carrera, array('method' => 'PATCH', 'route' => array('Carreras.update', $Carrera->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('Carreras.show', 'Cancel', $Carrera->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
