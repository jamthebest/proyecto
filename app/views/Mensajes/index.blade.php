@extends('layouts.scaffold')

@section('main')

<div id="container">
	<div class="row">
		<div class="col-md-4" id="titulo"><h2><span class="glyphicon glyphicon-envelope"></span> Mensajes </h2></div>
	</div>
</div>

@if ($Mensajes->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>De</th>
				<th>Asunto</th>
				<th>Leido</th>
				<th>Fecha</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Mensajes as $Mensaje)
				<tr>
					<td>{{{ $Mensaje->id }}}</td>
					<td>{{{ $Usuarios[$Mensaje->user - 1]->user }}}</td>
					<td>{{{ $Mensaje->asunto }}}</td>
					@if($Mensaje->leido == '1')
						<td><span class="glyphicon glyphicon-ok"></span></td>
					@else
						<td><span class="glyphicon glyphicon-remove"></span></td>
					@endif
          <td>{{{ $Mensaje->created_at }}}</td>
          @if ($Mensaje->leido == '0')
					<td>
						{{ Form::open(array('method' => 'POST', 'route' => array('Mensajes.leer', $Mensaje->id))) }}
	            {{ Form::submit('Leer', array('class' => 'btn btn-success')) }}
	          {{ Form::close() }}
	        </td>
	       	@else
	       	<td>{{ link_to_route( 'Mensajes.show', ' Leer', array($Mensaje->id), array('class' => 'btn btn-success')) }}</td>
	       	@endif
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">{{$Mensajes->links()}}</div>
@else
	<div class="alert alert-danger">
    <strong>Oh no!</strong> No hay Mensajes
  </div>
@endif

@stop
