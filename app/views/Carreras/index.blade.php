@extends('layouts.scaffold')

@section('main')

<h1>All Carreras</h1>

<p>{{ link_to_route('Carreras.create', 'Add new Carrera') }}</p>

@if ($Carreras->count())
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
			@foreach ($Carreras as $Carrera)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no Carreras
@endif

@stop
