@extends('layouts.scaffold')

@section('main')

<h1>Edit Mensaje</h1>
{{ Form::model($Mensaje, array('method' => 'PATCH', 'route' => array('Mensajes.update', $Mensaje->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('Mensajes.show', 'Cancel', $Mensaje->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
