@extends('layouts.scaffold')

@section('main')

<h1>All Institucions</h1>

<p>{{ link_to_route('Institucions.create', 'Add new Institucion') }}</p>

@if ($Institucions->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Institucion</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Institucions as $Institucion)
				<tr>
					<td>{{{ $Institucion->id }}}</td>
					<td>{{{ $Institucion->institucion }}}</td>
                    <td>{{ link_to_route('Institucions.edit', 'Edit', array($Institucion->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('Institucions.destroy', $Institucion->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no Institucions
@endif

@stop
