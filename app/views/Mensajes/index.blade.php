@extends('layouts.scaffold')

@section('main')

<div class="row">
	<div class="col-md-10"><h2><span class="glyphicon glyphicon-envelope"></span> Mensajes <small></small></h2></div>
</div>

@if ($Mensajes->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>De</th>
				<th>Asunto</th>
				<th>Mensaje</th>
				<th>Fecha</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Mensajes as $Mensaje)
				<tr>
					<td>{{{ $Mensaje->id }}}</td>
					<td>{{{ $Usuarios[$Mensaje->user - 1]->user }}}</td>
					<td>{{{ $Mensaje->asunto }}}</td>
					<td>{{{ $Mensaje->descripcion }}}</td>
          <td>{{{ $Mensaje->created_at }}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	<div class="alert alert-danger">
    <strong>Oh no!</strong> No hay Mensajes
  </div>
@endif

@stop
