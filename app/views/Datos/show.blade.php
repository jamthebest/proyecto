@extends('layouts.scaffold')

@section('main')

<h1>Show Dato</h1>

<p>{{ link_to_route('Datos.index', 'Return to all Datos') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
				<th>Nombre</th>
				<th>Empresa</th>
				<th>Cargo</th>
				<th>Telefono</th>
				<th>User</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $Dato->id }}}</td>
					<td>{{{ $Dato->Nombre }}}</td>
					<td>{{{ $Dato->Empresa }}}</td>
					<td>{{{ $Dato->Cargo }}}</td>
					<td>{{{ $Dato->Telefono }}}</td>
					<td>{{{ $Dato->user }}}</td>
                    <td>{{ link_to_route('Datos.edit', 'Edit', array($Dato->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('Datos.destroy', $Dato->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
