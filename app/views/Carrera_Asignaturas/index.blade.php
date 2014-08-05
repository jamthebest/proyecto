@extends('layouts.scaffold')

@section('main')

<h1>All Carrera_Asignaturas</h1>

<p>{{ link_to_route('Carrera_Asignaturas.create', 'Add new Carrera_Asignatura') }}</p>

@if ($Carrera_Asignaturas->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Asignatura</th>
				<th>Carrera</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Carrera_Asignaturas as $Carrera_Asignatura)
				<tr>
					<td>{{{ $Carrera_Asignatura->asignatura }}}</td>
					<td>{{{ $Carrera_Asignatura->carrera }}}</td>
                    <td>{{ link_to_route('Carrera_Asignaturas.edit', 'Edit', array($Carrera_Asignatura->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('Carrera_Asignaturas.destroy', $Carrera_Asignatura->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no Carrera_Asignaturas
@endif

@stop
