@extends('layouts.scaffold')

@section('main')

<h1>All Instituciones</h1>

<p>{{ link_to_route('Instituciones.create', 'Add new Institucion') }}</p>

@if ($Instituciones->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Institucion</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Instituciones as $Institucion)
				<tr>
					<td>{{{ $Institucion->id }}}</td>
					<td>{{{ $Institucion->institucion }}}</td>
                    <td>{{ link_to_route('Instituciones.edit', 'Edit', array($Institucion->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('Instituciones.destroy', $Institucion->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no Instituciones
@endif

@stop
