@extends('layouts.scaffold')

@section('main')

<div id="container">
	<div class="row">
		<div class="col-md-4" id="titulo"><h2><span class="glyphicon glyphicon-comment"></span> Comentarios </h2></div>
	</div>
</div>

@if ($Comentarios->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Usuario</th>
				<th>Leido</th>
				<th>Fecha</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Comentarios as $Comentario)
				<tr>
					<td>{{{ $Comentario->id }}}</td>
					<td>{{{ $Usuarios[$Comentario->user-1]->user }}}</td>
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
	<div class="text-center">{{$Comentarios->links()}}</div>
@else
	<div class="alert alert-danger">
    <strong>Oh no!</strong> No hay Comentarios Pendientes
  </div>
@endif

@stop
