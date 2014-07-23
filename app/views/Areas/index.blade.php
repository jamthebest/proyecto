@extends('layouts.scaffold')

@section('main')

<h1>All Areas</h1>

<p>{{ link_to_route('Areas.create', 'Add new Area') }}</p>

@if ($Areas->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Area</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Areas as $Area)
				<tr>
					<td>{{{ $Area->id }}}</td>
					<td>{{{ $Area->area }}}</td>
                    <td>{{ link_to_route('Areas.edit', 'Edit', array($Area->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('Areas.destroy', $Area->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no Areas
@endif

@stop
