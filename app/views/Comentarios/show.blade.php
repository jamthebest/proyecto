@extends('layouts.scaffold')

@section('main')

<h1>Show Comentario</h1>

<p>{{ link_to_route('Comentarios.index', 'Return to all Comentarios') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
				<th>Descripcion</th>
				<th>Leido</th>
				<th>User</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $Comentario->id }}}</td>
					<td>{{{ $Comentario->Descripcion }}}</td>
					<td>{{{ $Comentario->Leido }}}</td>
					<td>{{{ $Comentario->user }}}</td>
                    <td>{{ link_to_route('Comentarios.edit', 'Edit', array($Comentario->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('Comentarios.destroy', $Comentario->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
