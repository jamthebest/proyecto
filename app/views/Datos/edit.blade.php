@extends('layouts.scaffold')

@section('main')

<h1>Edit Dato</h1>
{{ Form::model($Dato, array('method' => 'PATCH', 'route' => array('Datos.update', $Dato->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('Datos.show', 'Cancel', $Dato->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
