@extends('layouts.scaffold')

@section('main')

<div class="row">
	<div class="col-md-3"><h2>Inicio > <small></small></h2></div>
</div>

@if(Session::has('message'))
	<div class="alert alert-success fade in">
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	    {{ Session::get('message') }}
	</div>
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
          <div class="item"><img  src="images/8.jpg" alt="banner2" /></div>
          <div class="item"><img  src="images/22.jpg" alt="banner3" /></div>
          <div class="item"><img  src="images/21.jpg" alt="banner4" /></div>
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
	
	<div class="col-md-6" style="margin-top:2%;">
		
		<h2>Para mejorar el ambiente laboral del país, Unitec ha creado "XXXXX", un sevicio de asesoría para las empresas del sector público y privado</h2>
		<h2>Este sevicio brinda soluciones para todas aquellas instituciones que no cuentan con un personal capacitado en determinada área o disciplina.</h2>
	</div>
</div>

@stop