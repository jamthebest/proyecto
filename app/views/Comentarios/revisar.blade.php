@extends('layouts.scaffold')

@section('main')

<h1>Comentarios</h1>

@if ($Comentarios->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Usuario</th>
				<th>Descripcion</th>
				<th>Leido</th>
				<th>Fecha</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Comentarios as $Comentario)
				<tr>
					<td>{{{ $Comentario->id }}}</td>
					<td>{{{ $Usuarios[$Comentario->user-1]->user }}}</td>
					<td>{{{ $Comentario->descripcion }}}</td>
					@if($Comentario->leido == '1')
						<td><span class="glyphicon glyphicon-ok"></span></td>
					@else
						<td><span class="glyphicon glyphicon-remove"></span></td>
					@endif
					<td>{{{ $Comentario->created_at }}}</td>
					@if ($Comentario->leido == '0')
					<td>
						{{ Form::open(array('method' => 'POST', 'route' => array('Comentarios.leer', $Comentario->id))) }}
	            {{ Form::submit('Leer', array('class' => 'btn btn-success')) }}
	          {{ Form::close() }}
	        </td>
	       	@else
	       	<td>{{ link_to_route( 'Comentarios.show', ' Leer', array($Comentario->id), array('class' => 'btn btn-success')) }}</td>
	       	@endif
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	<div class="alert alert-danger">
    <strong>Oh no!</strong> No hay Comentarios Pendientes
  </div>
@endif

@stop
