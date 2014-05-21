@extends('layouts.scaffold')

@section('main')

<h1>Edit Rol</h1>
{{ Form::model($Rol, array('method' => 'PATCH', 'route' => array('Rols.update', $Rol->id))) }}
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
            {{ Form::label('Descripcion', 'Descripcion:') }}
            {{ Form::text('Descripcion') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('Rols.show', 'Cancel', $Rol->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
