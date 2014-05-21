@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-3"><h2>Registro > <small></small></h2></div>
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

{{ Form::open(array('route' => 'Usuarios.store')) }}
<div class="row">    
    <h2 class="form-signin-heading text-center">Ingrese Sus Datos</h2>
    <div class="row col-md-4 col-md-push-1">
        <h3 class="form-signin-heading text-center">Datos Personales</h3>
        <label for="name" style="margin-top: 5%;">Nombre:</label>
        {{ Form::text('nombre',null, array('class' => 'form-control', 'id' => 'name', 'placeholder' => 'Nombre y Apellido', 'autofocus')) }}
        <label for="empresa" style="margin-top: 5%;">Empresa:</label>
        {{ Form::text('empresa',null, array('class' => 'form-control', 'id' => 'empresa', 'placeholder' => 'Empresa Donde Labora')) }}
        <label for="cargo" style="margin-top: 5%;">Cargo:</label>
        {{ Form::text('cargo',null, array('class' => 'form-control', 'id' => 'cargo', 'placeholder' => 'Cargo en el que Labora')) }}
        <label for="tel" style="margin-top: 5%;">Teléfono:</label>
        {{ Form::text('telefono',null, array('class' => 'form-control', 'id' => 'telefono', 'placeholder' => 'Número Teléfonico')) }}
    </div>
    <div class="row col-md-5 col-md-offset-3">
        <h3 class="form-signin-heading text-center">Datos de Usuario</h3>
        <label for="user">Usuario:</label>
        {{ Form::text('user',null, array('class' => 'form-control', 'id' => 'user', 'placeholder' => 'Nombre de Usuario')) }}
        <span class="help-block"><strong>Atención.</strong> Este nombre se Utilizará para Ingresar a su Cuenta</span>
        <label for="email">Correo Electrónico:</label>
        {{ Form::text('email',null, array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'Correo Electrónico')) }}
        <span class="help-block">Se Enviará un Correo de Verificación a Esta Dirección</span>
        <label for="password">Contraseña:</label>
        {{ Form::password('password', array('class' => 'form-control', 'id' => 'password', 'placeholder' => 'Contraseña')) }}
        <span class="help-block">La Contraseña Debe Tener Más de 5 Letras y/o Dígitos.</span>
    </div>
    <div class="col-md-2 col-md-push-5">
        {{ Form::submit('Crear Cuenta', array('class' => 'btn btn-lg btn-primary btn-block')) }}
    </div>
</div>
    <script>$("#iusername").focus();</script>
    <div class="push"></div>
    {{ Form::hidden('created_at', date('Y-m-d H:i:s')) }}
    {{ Form::hidden('updated_at', date('Y-m-d H:i:s')) }}
    {{ Form::close() }}

@stop

