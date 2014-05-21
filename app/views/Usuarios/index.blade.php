@extends('layouts.scaffold')

@section('main')

<h1>All Usuarios</h1>

<p>{{ link_to_route('Usuarios.create', 'Add new Usuario') }}</p>

@if ($Usuarios->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>User</th>
				<th>Email</th>
				<th>Pass</th>
				<th>Activo</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Usuarios as $Usuario)
				<tr>
					<td>{{{ $Usuario->id }}}</td>
					<td>{{{ $Usuario->user }}}</td>
					<td>{{{ $Usuario->email }}}</td>
					<td>{{{ $Usuario->pass }}}</td>
					<td>{{{ $Usuario->Activo }}}</td>
                    <td>{{ link_to_route('Usuarios.edit', 'Edit', array($Usuario->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('Usuarios.destroy', $Usuario->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no Usuarios
@endif

@stop
