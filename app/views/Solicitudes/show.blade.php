@extends('layouts.scaffold')

@section('main')

<h1>Show Solicitud</h1>

<p>{{ link_to_route('Solicitudes.index', 'Return to all Solicitudes') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
				<th>Descripcion</th>
				<th>Procesada</th>
				<th>User</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $Solicitud->id }}}</td>
					<td>{{{ $Solicitud->Descripcion }}}</td>
					<td>{{{ $Solicitud->Procesada }}}</td>
					<td>{{{ $Solicitud->user }}}</td>
                    <td>{{ link_to_route('Solicitudes.edit', 'Edit', array($Solicitud->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('Solicitudes.destroy', $Solicitud->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
