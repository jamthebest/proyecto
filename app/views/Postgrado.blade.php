@extends('layouts.scaffold')

@section('main')

<div class="row">
	<div class="col-md-5"><a href="Categorias"><h2>Categorías </a> <small>Postgrado > </small></h2></div>
</div>

<div class="row" >
	<div class="col-md-10 col-md-offset-1">
		<h4>Las Maestrías de Unitec, se caracterizan por sus docentes que están especializados
		en diversas áreas que cubren una amplia gama de necesidades y escenarios.<br>
		A continuación se presentala lista de las distintas Maestrías:<br><br></h4>

		
		<table class="table table-striped table-condensed">
			<thead>
				<tr>
					<th style="text-align: center;"><H3>MAESTRÍAS</H3></th>
				</tr>
				@foreach ($Maestrias as $Carrera)
					<tr>
						<td> {{ link_to_route('Carreras.show', $Carrera->nombre, array($Carrera->id), array('class' => 'btn')) }}</td>
					</tr>
				@endforeach
			</thead>
		</table>

		<table class="table table-striped table-condensed">
			<thead>
				<tr>
					<th style="text-align: center;"><H3>TÉCNICOS</H3></th>
				</tr>
				@foreach ($Tecnicos as $Carrera)
					<tr>
						<td> {{ link_to_route('Carreras.show', $Carrera->nombre, array($Carrera->id), array('class' => 'btn')) }}</td>
					</tr>
				@endforeach
			</thead>
		</table>

	</div>
</div>

@stop