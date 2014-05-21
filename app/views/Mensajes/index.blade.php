@extends('layouts.scaffold')

@section('main')

<h1>All Mensajes</h1>

<p>{{ link_to_route('Mensajes.create', 'Add new Mensaje') }}</p>

@if ($Mensajes->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Codigo</th>
				<th>Descripcion</th>
				<th>Activo</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Mensajes as $Mensaje)
				<tr>
					<td>{{{ $Mensaje->id }}}</td>
					<td>{{{ $Mensaje->Codigo }}}</td>
					<td>{{{ $Mensaje->Descripcion }}}</td>
					<td>{{{ $Mensaje->Activo }}}</td>
                    <td>{{ link_to_route('Mensajes.edit', 'Edit', array($Mensaje->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('Mensajes.destroy', $Mensaje->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no Mensajes
@endif

@stop
