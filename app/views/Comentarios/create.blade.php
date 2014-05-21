@extends('layouts.scaffold')

@section('main')

<h1>Create Comentario</h1>

{{ Form::open(array('route' => 'Comentarios.store')) }}
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


