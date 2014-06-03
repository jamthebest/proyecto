@extends('layouts.scaffold')

@section('main')

<div class="row">
	<div class="col-md-5"><a href="Categorias"><h2>Categorías ></a> <small>Pregrado > </small></h2></div>
</div>

<div class="row" >
	<div class="col-md-10 col-md-offset-1">
		<h4>Unitec cuenta con varias Licenciaturas e Ingenierías, las cuales reunen a docentes 
		altamente capacitados y preparados para brindar soluciones inteligentes a su 
		organización.<br> A continuación le mostramos las distintas categorías en la sección 
		de pregrado:<br><br></h4>

		<table class="table table-striped table-condensed col-md-5">
			<thead>
				<tr>
					<th style="text-align: center;"><H3>LICENCIATURAS</H3></th>
				</tr>
				@foreach ($Licenciaturas as $Carrera)
					<tr>
						<td> {{ link_to_route('Carreras.show', $Carrera->nombre, array($Carrera->id), array('class' => 'btn')) }}</td>
					</tr>
				@endforeach
			</thead>
		</table>

		<table class="table table-striped table-condensed col-md-5">
			<thead>
				<tr>
					<th style="text-align: center;"><H3>INGENIERÍAS</H3></th>
				</tr>
				@foreach ($Ingenierias as $Carrera)
					<tr>
						<td> {{ link_to_route('Carreras.show', $Carrera->nombre, array($Carrera->id), array('class' => 'btn')) }}</td>
					</tr>
				@endforeach
			</thead>
		</table>

	</div>
</div>

@stop