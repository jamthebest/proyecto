@extends('layouts.scaffold')

@section('main')

<h1>Edit Comentario</h1>
{{ Form::model($Comentario, array('method' => 'PATCH', 'route' => array('Comentarios.update', $Comentario->id))) }}
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
            {{ Form::label('Leido', 'Leido:') }}
            {{ Form::text('Leido') }}
        </li>

        <li>
            {{ Form::label('user', 'User:') }}
            {{ Form::text('user') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('Comentarios.show', 'Cancel', $Comentario->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
