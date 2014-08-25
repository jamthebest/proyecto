@extends('layouts.scaffold')

@section('main')

<div id="container">
	<div class="row">
		<div class="col-md-4" id="titulo"><h2><span class="glyphicon glyphicon-globe"></span> Áreas </h2></div>
	</div>
</div>

<div class="btn-agregar">
	<a type="button" href="{{ URL::route('Areas.create') }}" class="btn btn-primary">
	  <span class="glyphicon glyphicon-file"></span> Nueva Área
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

@if ($Areas->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Área</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($Areas as $Area)
				<tr>
					<td>{{{ $Area->id }}}</td>
					<td>{{{ $Area->area }}}</td>
					<td>{{ link_to_route('Areas.edit', 'Editar', array($Area->id), array('class' => 'btn btn-info')) }}</td>
          <td>
          	@if($Area->activo == 1)
                {{ Form::open(array('method' => 'DELETE', 'route' => array('Areas.destroy', $Area->id))) }}
                    {{ Form::submit('Desactivar', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            @else
            	{{ Form::open(array('method' => 'POST', 'route' => array('Areas.activar', $Area->id))) }}
                    {{ Form::submit('Activar', array('class' => 'btn btn-success')) }}
                {{ Form::close() }}
            @endif
          </td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">{{$Areas->links()}}</div>
@else
	<div class="alert alert-danger">
	  <strong>Oh no!</strong> No hay Áreas Disponibles
	</div>
@endif

@stop
