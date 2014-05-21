@extends('layouts.scaffold')

@section('main')

<h1>Edit Solicitud</h1>
{{ Form::model($Solicitud, array('method' => 'PATCH', 'route' => array('Solicitudes.update', $Solicitud->id))) }}
	<ul>
        <li>
            {{ Form::label('id', 'Id:') }}
            {{ Form::text('id') }}
        </li>

        <li>
            {{ Form::label('Descripcion', 'Descripcion:') }}
            {{ Form::text('Descripcion') }}
        </li>

        <li>
            {{ Form::label('Procesada', 'Procesada:') }}
            {{ Form::text('Procesada') }}
        </li>

        <li>
            {{ Form::label('user', 'User:') }}
            {{ Form::text('user') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('Solicitudes.show', 'Cancel', $Solicitud->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
