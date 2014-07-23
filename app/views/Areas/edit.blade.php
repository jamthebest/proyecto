@extends('layouts.scaffold')

@section('main')

<h1>Edit Area</h1>
{{ Form::model($Area, array('method' => 'PATCH', 'route' => array('Areas.update', $Area->id))) }}
	<ul>
        <li>
            {{ Form::label('id', 'Id:') }}
            {{ Form::input('number', 'id') }}
        </li>

        <li>
            {{ Form::label('area', 'Area:') }}
            {{ Form::text('area') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('Areas.show', 'Cancel', $Area->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
