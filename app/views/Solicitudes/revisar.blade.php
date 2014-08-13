@extends('layouts.scaffold')

@section('main')

<div id="container">
	<div class="row">
		<div class="col-md-4" id="titulo"><h2><span class="glyphicon glyphicon-list-alt"></span> Solicitudes </h2></div>
	</div>
</div>

@if ($Solicitudes->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Usuario</th>
				<th>Tema</th>
				<th>Preocesada</th>
				<th>Fecha</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Solicitudes as $Solicitud)
				<tr>
					<td>{{{ $Solicitud->id }}}</td>
					<td>{{{ $Solicitud->user }}}</td>
					<td>{{{ $Solicitud->tema }}}</td>
					@if($Solicitud->procesada == '1')
						<td><span class="glyphicon glyphicon-ok"></span></td>
					@else
						<td><span class="glyphicon glyphicon-remove"></span></td>
					@endif
					<td>{{{ $Solicitud->created_at }}}</td>
					<td>{{ link_to_route( 'Solicitudes.show', ' Ver', array($Solicitud->id), array('class' => 'btn btn-success')) }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">{{$Solicitudes->links()}}</div>
@else
	<div class="alert alert-danger">
    <strong>Oh no!</strong> No hay Solicitudes Pendientes
  </div>
@endif

@stop
