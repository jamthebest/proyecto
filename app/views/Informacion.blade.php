@extends('layouts.scaffold')

@section('main')

<div class="row">
	<div class="col-md-4"><h2>Información <small></small></h2></div>
</div>

<div class="row" style="margin-top:1%;">
	<div class="col-md-10 col-md-offset-1">
		<h2>Este es un servicio innovador de consultorías donde se encuentran profesionales altamente calificados y preparados, 
		que proveen soluciones inteligentes	a Instituciones privadas o públicas.<br><br> Abarca una amplia cantidad de áreas, 
		dentro de las cuales cada una cuenta con docentes altamente calificados y especializados, para brindar atención personalizada 
		y lograr satisfacer la demanda por servicios.</h2>
	</div>
	<div class="col-md-6" style="margin-top:2%; width:400px;height:350px;">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="active item"><img  src="images/35.jpg" alt="banner1" /></div>
          <div class="item"><img  src="images/4.jpeg" alt="banner2" /></div>
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

  <div class="col-md-6" style="margin-top:2%; width:400px;height:350px;">
      <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="active item"><img  src="images/2.jpeg" alt="banner1" /></div>
          <div class="item"><img  src="images/10.jpeg" alt="banner2" /></div>
        </div>
        <!-- Carousel nav -->
        <a class="left carousel-control" href="#carousel-example-generic2" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
        <a class="right carousel-control" href="#carousel-example-generic2" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
      </div>
  </div>
</div>

@stop