@extends('layouts.scaffold')

<style type="text/css">

	body{background: #FFF;color:#333;
  	font: 76% Arial,sans-serif}

	ul#split,ul#split li{margin:0;padding:0;list-style:none}
	ul#split li{float:left;margin:0 10px 10px 0}
	ul#split h3{font: normal 120%/1.3 Verdana,sans-serif;
	    text-transform:uppercase;margin:0px;padding: 5px 0 0;text-align:center;color: #000}
	ul#split p{margin:0;padding:5px 8px 15px}
	ul#split div{background: #FFC}
	li#one h3{width:360px; background: #C8C866; margin-right: 60px; font-size: 20px;}
	li#one div{width:360px; border:2px solid #C8C866; margin-right: 60px;font-size: 17px;}
	li#two h3{background: #FFBD00; width:170px; margin-right: 60px; font-size: 20px;}
	li#two div{border:2px solid #FFBD00; width:170px; margin-right: 60px;font-size: 17px;}
	li#three h3{background: #E3A1C4; width:150px; font-size: 20px;}
	li#three div{border:2px solid #E3A1C4; width:150px;font-size: 17px;}
</style>

@section('title')
	Identificación
@stop

@section('main')
	
<div id="container">
	<div class="row">
	  <div class="col-md-5" id="titulo"><h2><span class="glyphicon glyphicon-bell"></span> Ejemplos de Casos <small></small> </h2></div>
	</div>
</div>

<ul id="split" class="col-md-12">
		<h3><br>Unitec cuenta con profesionales especializados en temas específicos según su orientación. 
			Es por esto que el programa está capacitado para brindar soluciones a diversas situaciones o 
			casos que lo requieran.<br> Algunas posibles situaciones que requieran de nuestros servicios son:
			<br><br>
		</h3>

	<li id="one"><h3>Ejemplo 1</h3>
		<div>
			<p>
				La Alcaldía de una municipalidad contruirá un nuevo puente para una comunidad cercana, pero
				no cuenta con un ingeniero civil que le facilite los debidos planos y acciones detalladas 
				para su construcción. La Municipalidad podría contactar a un docente de Unitec de Ingeniería 
				Civil especializado en el diseño de ese tipo de estructuras.
			</p>
		</div>
	</li>

	<li id="two"><h3>Ejemplo 2</h3>
		<div>
			<p>
				Una ONG/OPD, podría seleccionar un docente en diseño gráfico o en telecomunicaciones para que
				le prepare un manual de identidad gráfica.
			</p>
		</div>
	</li>

	<li id="three"><h3>Ejemplo 3</h3>
		<div>
			<p>
				Una maquila puede contratar un docente de Unitec especialista en optimizar sus recursos 
				energéticos.
			</p>
		</div>
	</li>

</ul>

	<footer>
			<br>Nota: Los presentes escenarios son ficticios, que tienen como único fin orientar al usuario y 
		mostrar lo que nuestros docentes podrían solucionar.
	</footer>

@stop
