@extends('layouts.scaffold')

@section('main')

<h1>Edit Institucion</h1>
{{ Form::model($Institucion, array('method' => 'PATCH', 'route' => array('Instituciones.update', $Institucion->id))) }}
	<ul>
        <li>
            {{ Form::label('id', 'Id:') }}
            {{ Form::input('number', 'id') }}
        </li>

        <li>
            {{ Form::label('institucion', 'Institucion:') }}
            {{ Form::text('institucion') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('Instituciones.show', 'Cancel', $Institucion->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
