@extends('layouts.scaffold')

@section('main')

<h2 class="sub-header"><span class="glyphicon glyphicon-cog"></span> Carreras </h2>

<div class="btn-agregar">
	<a type="button" href="{{ URL::route('Carreras.create') }}" class="btn btn-primary">
	  <span class="glyphicon glyphicon-file"></span> Nueva Carrera
	</a>
</div>

@if ($errors->any())
  <div class="alert alert-danger fade in">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    @if($errors->count() > 1)
      <h4>Oh no! Se encontraron errores!</h4>
    @else
      <h4>Oh no! Se encontró un error!</h4>
    @endif
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

@if ($Carreras->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Grado</th>
				<th>Estado</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Carreras as $Carrera)
				<tr>
					<td>{{{ $Carrera->id }}}</td>
					<td>{{{ $Carrera->codigo }}}</td>
					<td>{{{ $Carrera->nombre }}}</td>
					<td>{{{ $Carrera->descripcion }}}</td>
					<td>{{{ $Carrera->grado }}}</td>
					<td>{{{ $Carrera->activo == 1 ? 'Activo' : 'Inactivo' }}}</td>
                    <td>{{ link_to_route('Carreras.edit', 'Editar', array($Carrera->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                    	@if($Carrera->activo == 1)
	                        {{ Form::open(array('method' => 'DELETE', 'route' => array('Carreras.destroy', $Carrera->id))) }}
	                            {{ Form::submit('Desactivar', array('class' => 'btn btn-danger')) }}
	                        {{ Form::close() }}
	                    @else
	                    	{{ Form::open(array('method' => 'POST', 'route' => array('Carreras.activar', $Carrera->id))) }}
	                            {{ Form::submit('Activar', array('class' => 'btn btn-success')) }}
	                        {{ Form::close() }}
	                    @endif

                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">{{$Carreras->links()}}</div>
@else
	<div class="alert alert-danger">
	  <strong>Oh no!</strong> No hay Carreras Disponibles
	</div>
@endif

@stop
