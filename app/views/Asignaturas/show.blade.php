@extends('layouts.scaffold')

@section('main')

<h1>Show Asignatura</h1>

<p>{{ link_to_route('Asignaturas.index', 'Return to all Asignaturas') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Activo</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $Asignatura->id }}}</td>
					<td>{{{ $Asignatura->codigo }}}</td>
					<td>{{{ $Asignatura->nombre }}}</td>
					<td>{{{ $Asignatura->descripcion }}}</td>
					<td>{{{ $Asignatura->activo }}}</td>
                    <td>{{ link_to_route('Asignaturas.edit', 'Edit', array($Asignatura->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('Asignaturas.destroy', $Asignatura->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
