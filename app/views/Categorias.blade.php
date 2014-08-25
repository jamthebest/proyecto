@extends('layouts.scaffold')

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="generator" content="HAPedit 3.1">
<style type="text/css">
	body{background:#FFF;color:#111;
    font: 100.01%/1.3 Verdana,Arial,sans-serif;text-align:center}
	div.box{width: 25em;padding: 30px  10px;margin:0 auto;
    text-align:left;background: #9CC0FF url(gradient.png) repeat-x 0 -5px}
  div.box2{width: 25em;padding: 15px  10px;margin:0 auto;
    text-align:left;background: #9CFF9E url(gradient2.png) repeat-x 0 -5px}
  h1{font: lighter 200% "Trebuchet MS",Arial sans-serif;color: #303F6E}
	h1,p{margin:0 20px}
</style>

{{HTML::script('niftycube.js');}}
{{HTML::style('niftyCorners.css');}}
{{HTML::style('niftyPrint.css');}}
<script type="text/javascript">
	window.onload=function(){
		Nifty("div#box","transparent");
	}
</script>

@section('main')

<div id="container">
  <div class="row">
    <div class="col-md-4" id="titulo"><h2><span class="glyphicon glyphicon-tags"></span> Categorías <small></small> </h2></div>
  </div>
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
		<div id="box" class="col-md-5 box" style="margin-right:2%;text-align: center;">
			<h1><strong>PREGRADO</strong></h1>
			<p>Unitec cuenta con carreras tando en Licenciaturas como en Ingenierías. Cada una de ellas
			cuenta con docentes calificados y capaces de innovar y solucionar cualquier demanda de los
			sectores públicos y privados.<br><br>
			<a href="Pregrado"><strong>Para más información haga click aquí.</strong></a><br></p>
		</div>

		<div id="box2" class="col-md-5 box2" style="text-align: center;border-radius:3%">
			<h1><strong>POSTGRADO</strong></h1>
			<p>Con Maestrías y Técnicos, Unitec reune a docentes con experiencia en distintas áreas
			y rubros. Cada uno de ellos cuenta con un grado de especialización que hacen de este
			servicio una experiencia eficaz, eficiente y de confianza.<br><br>
			<a href="Postgrado"><strong>Para más información haga click aquí.</strong></a><br></p>	
		</div>
	</div>
</div>

@stop