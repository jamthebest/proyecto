@extends('layouts.scaffold')

@section('main')

<div class="row">
	<div class="col-md-3"><h2>Categorías <small></small></h2></div>
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

<div class="row" >
	<div class="col-md-10 col-md-offset-1">
		<h4><br>Cada Categoría represanta la oferta de servicios de Unitec en las mismas áreas donde 
		se ofrecen carreras de pregrado y	postgrado. <br><br> </h4>
		<h3><strong>PREGRADO</strong></h3>
		<h4>Unitec cuenta con carreras tando en Licenciaturas como en Ingenierías. Cada una de ellas
		cuenta con docentes calificados y capaces de innovar y solucionar cualquier demanda de los
		sectores públicos y privados.<br><br>
		<a href="Pregrado"><strong>Para más información haga click aquí.</strong></a><br><br></h4>

		<h3><strong>POSTGRADO</strong></h3>
		<h4>Con Maestrías y Técnicos, Unitec reune a docentes con experiencia en distintas áreas
		y rubros. Cada uno de ellos cuenta con un grado de especialización que hacen de este
		servicio una experiencia eficaz, eficiente y de confianza.<br><br>
		<a href="Postgrado"><strong>Para más información haga click aquí.</strong></a><br><br></h4>	
	</div>
</div>

@stop