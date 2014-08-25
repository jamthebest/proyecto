@extends('layouts.scaffold')

@section('main')

<div id="container">
  <div class="row">
    <div class="col-md-5" id="titulo"><h2><span class="glyphicon glyphicon-tags"></span><a href="Categorias"> Categorías </a><small> > Postgrado</small> </h2></div>
  </div>
</div>

<div class="row" >
	<div class="col-md-10 col-md-offset-1">
		<h4>Las Maestrías de Unitec, se caracterizan por sus docentes que están especializados
		en diversas áreas que cubren una amplia gama de necesidades y escenarios.<br>
		A continuación se presentala lista de las distintas Maestrías:<br><br></h4>

		
		<div class="col-md-5" style="margin-left:-25%;margin-right:35%">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th class="success" style="text-align: center;"><H3>MAESTRÍAS</H3></th>
					</tr>
					<div style="display:none"> {{ $cont = 0 }} </div>
					@foreach ($Maestrias as $Carrera)
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
		
		<div class="col-md-5">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th class="success" style="text-align: center;"><H3>TÉCNICOS</H3></th>
					</tr>
					<div style="display:none"> {{ $cont = 0 }} </div>
					@foreach ($Tecnicos as $Carrera)
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

	</div>
</div>

@stop