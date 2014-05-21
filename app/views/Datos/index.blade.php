@extends('layouts.scaffold')

@section('main')

<h1>All Datos</h1>

<p>{{ link_to_route('Datos.create', 'Add new Dato') }}</p>

@if ($Datos->count())
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
			@foreach ($Datos as $Dato)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no Datos
@endif

@stop
