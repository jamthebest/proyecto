@extends('layouts.scaffold')

@section('main')

<h1>Show Institucion</h1>

<p>{{ link_to_route('Institucions.index', 'Return to all Institucions') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
				<th>Institucion</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
