@extends('layouts.scaffold')

@section('main')

<div id="container">
  <div class="row">
    <div class="col-md-5" id="titulo"><h2><span class="glyphicon glyphicon-tags"></span><a href="Categorias"> Categorías </a><small> > Pregrado</small> </h2></div>
  </div>
</div>

<div class="row" >
	<div class="col-md-10 col-md-offset-1">
		<h4>Las Categorías en las que ofrecemos servicios con docentes que imparten clases
		en pregrado son:<br><br></h4>

		<div class="col-md-5" style="margin-right:15%">
		<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
					<th class="success" style="text-align: center;"><H3>LICENCIATURAS</H3></th>
				</tr>
				<div style="display:none"> {{ $cont = 0 }} </div>
				@foreach ($Licenciaturas as $Carrera)
					<tr>
						@if( $cont % 2 == 0 )
							<td class="warning"> {{ link_to_route('Carreras.show', $Carrera->nombre, array($Carrera->id), array('class' => 'btn')) }}</td>
						@else
							<td class="info"> {{ link_to_route('Carreras.show', $Carrera->nombre, array($Carrera->id), array('class' => 'btn')) }}</td>
						@endif
						<div style="display:none"> {{ $cont += 1 }} </div>
					</tr>
				@endforeach
			</thead>
		</table>
		</div>

		<div class="col-md-5">
		<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
					<th class="success" style="text-align: center;"><H3>INGENIERÍAS</H3></th>
				</tr>
				<div style="display:none"> {{ $cont = 0 }} </div>
				@foreach ($Ingenierias as $Carrera)
					<tr>
						@if( $cont % 2 == 0 )
							<td class="info"> {{ link_to_route('Carreras.show', $Carrera->nombre, array($Carrera->id), array('class' => 'btn')) }}</td>
						@else
							<td class="warning"> {{ link_to_route('Carreras.show', $Carrera->nombre, array($Carrera->id), array('class' => 'btn')) }}</td>
						@endif
						<div style="display:none"> {{ $cont += 1 }} </div>
					</tr>
				@endforeach
			</thead>
		</table>
		</div>

	</div>
</div>

@stop