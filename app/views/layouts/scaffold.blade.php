<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>XXXXX</title>
  <link rel="stylesheet" href="<?php public_path(); ?>/bootstrap/css/bootstrap.min.css">

    <!--script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script-->

  <link rel="stylesheet" type="text/css" href="/assets/css/general.css">
  <script type="text/javascript" src="/assets/javascript/script.js"></script>
  <script type="text/javascript" src="/assets/javascript/datetimepicker.js"></script>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Bootstrap -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">

  <script src="<?php public_path(); ?>/bootstrap/js/jquery-2.0.2.min.js"></script>
  <script src="<?php public_path(); ?>/bootstrap/js/bootstrap.min.js"></script> 
  -->
    <!--script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script-->

</head>
<body style="margin-top: 50px">
  <header>
      <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <a class="navbar-brand" href="Inicio"> <img src="images/icon.png"> XXXXX</a>
        <ul class="nav navbar-nav navbar-left">
          <li class="dropdown">
                <a href='Inicio' class="dropdown-toggle">Inicio</a>
              </li>

          <li class="dropdown">
                <a href='Informacion' class="dropdown-toggle">Información </a>
              </li>

          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Áreas Disponibles <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Área 1</a></li>
                  <li><a href="#">Área 2</a></li>
                  <li><a href="#">Área 3</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Otro</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="Solicitudes" class="dropdown-toggle">Solicitudes</a>
              </li>

          <li class="dropdown">
                <a href="Comentarios" class="dropdown-toggle">Comentarios</a>
              </li>
        </ul>
        @if (Auth::user())
            <p class="navbar-text navbar-right" style="margin-right: 1em;"><a href="Logout" class="navbar-link">Salir</a></p>
            <p class="navbar-text navbar-right" style="margin-right: 1em;"><a href="Usuarios/{{Auth::user()->id}}" class="navbar-link">{{{Auth::user()->user}}}</a></p>
        @else
            <p class="navbar-text navbar-right" style="margin-right: 1em;"><a href="Registro" class="navbar-link">Registrarse</a></p>
            <p class="navbar-text navbar-right" style="margin-right: 1em;"><a href="Login" class="navbar-link">Ingresar</a></p>
        @endif
      </nav>
    </header>
  <div class="container col-md-8 col-md-offset-2">
    @yield('main')
  </div>
</body>
</html>