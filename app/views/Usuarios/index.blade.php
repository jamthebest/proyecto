@extends('layouts.scaffold')

@section('main')

<div class="row" style="margin-top:3%; margin-bottom:2%">
	<div class="col-md-3"><h2><span class="glyphicon glyphicon-user"></span> Usuarios <small></small></h2></div>
</div>

@if ($errors->any())
	<div class="alert alert-danger fade in">
	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<ul>
		    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</ul>
	</div>
@else
	@if (Session::has('message'))
		<div class="alert alert-success fade in">
      		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      		{{ Session::get('message') }}
		</div>
	@endif
@endif

@if ($Usuarios->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Usuario</th>
				<th>Correo</th>
				<th>Tipo</th>
				<th>Estado</th>
				<th>Fecha Creación</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Usuarios as $Usuario)
				<tr>
					<td>{{{ $Usuario->id }}}</td>
					<td>{{{ $Usuario->user }}}</td>
					<td>{{{ $Usuario->email }}}</td>
					<td>{{{ $Usuario->tipo }}}</td>
					<td>{{{ $Usuario->activo == 1 ? 'Activo' : 'Inactivo' }}}</td>
					<td>{{{ $Usuario->created_at }}}</td>
          	<td>{{ link_to_route('Usuarios.edit', 'Editar', array($Usuario->id), array('class' => 'btn btn-info')) }}</td>
            <td>
            	@if( $Usuario->activo == 1)
	              {{ Form::open(array('method' => 'DELETE', 'route' => array('Usuarios.destroy', $Usuario->id))) }}
	                {{ Form::submit('Deshabilitar', array('class' => 'btn btn-danger')) }}
	            	{{ Form::close() }}
	            @else
	            	{{ Form::open(array('method' => 'POST', 'route' => array('Usuarios.Habilitar', $Usuario->id))) }}
	                {{ Form::submit('Habilitar', array('class' => 'btn btn-success')) }}
	            	{{ Form::close() }}
	            @endif
            </td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div style="margin-left:-8%">{{$Usuarios->links()}}</div>
@else
	There are no Usuarios
@endif

@stop
