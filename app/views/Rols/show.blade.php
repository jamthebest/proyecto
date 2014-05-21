@extends('layouts.scaffold')

@section('main')

<h1>Show Rol</h1>

<p>{{ link_to_route('Rols.index', 'Return to all Rols') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
				<th>Nombre</th>
				<th>Descripcion</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $Rol->id }}}</td>
					<td>{{{ $Rol->Nombre }}}</td>
					<td>{{{ $Rol->Descripcion }}}</td>
                    <td>{{ link_to_route('Rols.edit', 'Edit', array($Rol->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('Rols.destroy', $Rol->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
