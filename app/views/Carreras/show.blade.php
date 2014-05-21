@extends('layouts.scaffold')

@section('main')

<h1>Show Carrera</h1>

<p>{{ link_to_route('Carreras.index', 'Return to all Carreras') }}</p>

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
			<td>{{{ $Carrera->id }}}</td>
					<td>{{{ $Carrera->Codigo }}}</td>
					<td>{{{ $Carrera->Nombre }}}</td>
					<td>{{{ $Carrera->Descripcion }}}</td>
					<td>{{{ $Carrera->Activo }}}</td>
                    <td>{{ link_to_route('Carreras.edit', 'Edit', array($Carrera->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('Carreras.destroy', $Carrera->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
