<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>XXXXX</title>
  <script type="text/javascript" src="/assets/javascript/script.js"></script>
  <script type="text/javascript" src="/assets/javascript/datetimepicker.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  {{HTML::style('/bootstrap/css/bootstrap.min.css');}}
  {{HTML::style('/assets/css/general.css');}}
  {{HTML::style('/bootstrap/css/css/bootstrap.min.css');}}
  {{HTML::style('/css/main.css');}}
</head>
<body style="margin-top: 50px">
  <header>
      <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <a class="navbar-brand" href="Inicio"> {{HTML::image('/images/icon.png');}} XXXXX</a>
        <ul class="nav navbar-nav navbar-left">
          <li class="dropdown">
            {{link_to('Inicio', 'Inicio', $attributes = array(), $secure = null)}}
          </li>

          <li class="dropdown">
            {{link_to('Informacion', 'Información', $attributes = array(), $secure = null)}}
          </li>

          <li class="dropdown">
            {{link_to('Categorias', 'Categorías de Interés', $attributes = array(), $secure = null)}}
          </li>

          <li class="dropdown">
            {{link_to('Ejemplos', 'Ejemplos de Casos', $attributes = array(), $secure = null)}}
          </li>

          <li class="dropdown">
            {{link_to('Solicitudes', 'Solicitudes', $attributes = array(), $secure = null)}}
          </li>

          <li class="dropdown">
            {{link_to('Comentarios', 'Comentarios', $attributes = array(), $secure = null)}}
          </li>
        </ul>
        @if (Auth::user())
            <p class="navbar-text navbar-right" style="margin-right: 1em;">{{link_to('Logout', 'Salir', $attributes = array(), $secure = null)}}</p>
            <p class="navbar-text navbar-right" style="margin-right: 1em;">{{link_to('Usuarios/'.Auth::user()->id, Auth::user()->user, $attributes = array(), $secure = null)}}</p>
        @else
            <p class="navbar-text navbar-right" style="margin-right: 1em;">{{link_to('Registro', 'Registrarse', $attributes = array(), $secure = null)}}</p>
            <p class="navbar-text navbar-right" style="margin-right: 1em;">{{link_to('Login', 'Ingresar', $attributes = array(), $secure = null)}}</p>
        @endif
      </nav>
    </header>
  <div class="container col-md-8 col-md-offset-2">
    @yield('main')
  </div>
</body>
</html>