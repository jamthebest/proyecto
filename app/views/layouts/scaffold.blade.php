<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>UNITEC</title>
  {{HTML::script('/assets/javascript/script.js');}}
  {{HTML::script('/assets/javascript/datetimepicker.js');}}
  {{HTML::script('js/jquery.min.js');}}
  {{HTML::script('js/bootstrap.min.js');}}
  {{HTML::style('/bootstrap/css/bootstrap.min.css');}}
  {{HTML::style('/assets/css/general.css');}}
</head>
<body style="margin-top: 50px">
  <header>
      <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <a class="navbar-brand" href="Inicio" style="margin-top:-1%;"> {{HTML::image('/images/logo.jpg');}} UNITEC</a>
        <ul class="nav navbar-nav navbar-left">
          <li class="dropdown">
            {{link_to('Inicio', 'Inicio', $attributes = array(), $secure = null)}}
          </li>

          <li class="dropdown">
            {{link_to('Informacion', 'Información', $attributes = array(), $secure = null)}}
          </li>

          @if (!Auth::check() || Auth::user()->tipo != 'Administrador')
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
          @endif
          @if (Auth::check() && Auth::user()->tipo == 'Administrador')
            <li class="dropdown">
              {{link_to_route('Carreras.index', 'Carreras', $attributes = array(), $secure = null)}}
            </li>
            <li class="dropdown">
              {{link_to_route('Asignaturas.index', 'Asignaturas', $attributes = array(), $secure = null)}}
            </li>
            <li class="dropdown">
              {{link_to_route('Areas.index', 'Áreas', $attributes = array(), $secure = null)}}
            </li>
            <li class="dropdown">
              {{link_to_route('Instituciones.index', 'Instituciones', $attributes = array(), $secure = null)}}
            </li>
            <li class="dropdown">
              {{link_to_route('Solicitudes.revisar', 'Ver Solicitudes', $attributes = array(), $secure = null)}}
            </li>
            <li class="dropdown">
              {{link_to_route('Comentarios.revisar', 'Ver Comentarios', $attributes = array(), $secure = null)}}
            </li>
            <li class="dropdown">
              {{link_to_route('Usuarios.index', 'Ver Usuarios', $attributes = array(), $secure = null)}}
            </li>
          @endif
        </ul>
        @if (Auth::user())
          <div style="display:none;">
            {{ $Men = Mensaje::where('destinatario', Auth::user()->id)->where('leido', '0')->count() }}
          </div>
            <p class="navbar-text navbar-right" style="margin-right: 1em;">{{link_to('Logout', 'Salir', $attributes = array(), $secure = null)}}</p>
            <p class="navbar-text navbar-right" style="margin-right: 1em;">{{link_to('Usuarios/'.Auth::user()->id, Auth::user()->user, $attributes = array(), $secure = null)}}</p>
            <p class="navbar-text navbar-right" style="margin-right: 1em;">{{link_to('Mensajes', $Men, array('class' => 'glyphicon glyphicon-globe'), $secure = null)}}</p>
        @else
            <p class="navbar-text navbar-right" style="margin-right: 1em;">{{link_to('Registro', 'Registrarse', $attributes = array(), $secure = null)}}</p>
            <p class="navbar-text navbar-right" style="margin-right: 1em;">{{link_to('Login', 'Ingresar', $attributes = array(), $secure = null)}}</p>
        @endif
      </nav>
    </header>
  <div class="container col-md-8 col-md-offset-2" style="margin-bottom:4%">
    @yield('main')
  </div>
  <nav class="navbar navbar-default navbar-fixed-bottom text-center" role="navigation">
    {{HTML::image('/images/logo_unitec.png');}}
  </nav>
</body>
</html>