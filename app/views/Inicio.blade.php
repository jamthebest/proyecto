@extends('layouts.scaffold')

<style type="text/css">
  p#contenido{padding: 0 10px 0em; color:blue;font-family: vinegar, georgia, serif;word-spacing: 2pt; color: white;font-size: 26px}
  div#content{float:center;padding:10px 5px;background: #002659;border-radius: 25px}
</style>

@section('main')
<div id="container">
<div class="row">
	<div class="col-md-4" id="titulo"><h2><span class="glyphicon glyphicon-home"></span> Inicio <small></small></h2></div>
  <!--
  <div class="col-md-3" style="margin-top:3%; margin-bottom:2%">
    {{ Form::open(array('route' => 'test', 'class' => "form-horizontal" , 'role' => 'form')) }}
      <div class="col-md-2">
          {{ Form::submit('Agregar Admin', array('class' => 'btn btn-primary')) }}
        </div>
    {{ Form::close() }}
    </div>
  -->
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

<div class="row">
	<div class="col-md-6 span6" style="margin-top:13%; width:400px;height:400px;">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="active item"><img  src="images/24.jpg" alt="banner1" /></div>
          <div class="item" style="padding:6% 0%;"><img  src="images/8.jpg" alt="banner2" /></div>
          <div class="item" style="padding:6% 0%;"><img  src="images/22.jpg" alt="banner3" /></div>
          <div class="item" style="padding:6% 0%;"><img  src="images/21.jpg" alt="banner4" /></div>
        </div>
        <!-- Carousel nav -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
      </div>
  </div>
	
  <div id="container" class="col-md-6" style="margin-top:5%">
	<div id="content">
		<p id="contenido">UNITEC ofrece a las instituciones públicas y privadas un servicio de asesoría por medio de su personal docente 
    entre quienes se cuenta los profesionales más capacitados del país en las áreas donde nuestra Universidad ofrece 
    diferentes tipos de carreras de Pregrado y Postgrado</p>
	</div>
  </div>
</div>

@stop