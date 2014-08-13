@extends('layouts.scaffold')

<style type="text/css">
  h1,h2{margin: 0;padding: 0 10px;font-weight:normal}
  h1{font-size: 250%;color: #FFF;letter-spacing: 1px}
  h2{font-size: 200%;line-height:1;color:#002455 }
  div#container{background:#FFF}
  div#content{float:left;width:480px;padding:6px 0;margin:5px 0;background: #A6CE39; margin-bottom:5%; border-radius: 15px}
  div#nav{float:right;width:400px;padding:10px 0;margin:5px 0;background: #E7E7E8; border-radius: 15px}
  div#footer{clear:both;width:450px;background: #C4E786;padding:5px 0;text-align:center}

  p#contenido{padding: 0 10px 0em; color:blue;font-family: vinegar, georgia, serif;word-spacing: 2pt; color: white;font-size: 26px}
</style>

@section('main')
<div id="container">
<div class="row">
	<div class="col-md-4" id="titulo"><h2><span class="glyphicon glyphicon-info-sign"></span> Información <small></small></h2></div>
</div>

<div class="row" style="margin-top:1%;">
	<div class="col-md-10 col-md-offset-1" id="content">
		<h2>Este es un servicio innovador de consultorías donde se encuentran profesionales altamente calificados y preparados, 
		que proveen soluciones inteligentes	a Instituciones privadas o públicas.<br><br> Abarca una amplia cantidad de áreas, 
		dentro de las cuales cada una cuenta con docentes altamente calificados y especializados, para brindar atención personalizada 
		y lograr satisfacer la demanda por servicios.</h2>
	</div>
  <div id="nav">
	<div class="col-md-6" style="margin-top:2%; width:400px;height:280px;" id="">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="active item" style="padding:13% 11%;"><img  src="images/35.jpg" alt="banner1" /></div>
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

  <div class="col-md-6" style="margin-top:2%; width:400px;height:220px;">
      <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="active item"  style="padding:0% 14%;"><img  src="images/2.jpeg" alt="banner1" /></div>
          <div class="item"  style="padding:0% 14%;"><img  src="images/10.jpeg" alt="banner2" /></div>
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
</div>
</div>

@stop