@extends('auth.contenido')

@section('login')

<section class="login-content">
  <div class="logo">

  </div>
  <div class="login-box">
    <form class="login-form" method="POST" action="{{ route('login')}}">
      {{ csrf_field() }}
      <h3 class="login-head">F | M TONNYS</h3>
      <div class="form-group">
        <label class="control-label">USUARIO</label>
        <input class="form-control" type="text" value="{{old('usuario')}}" name="usuario" id="usuario"
          class="form-control" placeholder="Usuario" autofocus>
      </div>
      <div class="form-group">
        <label class="control-label">CONTRASEÑA</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
      </div>
      <div class="form-group btn-container">
        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>INGRESAR AL
          SISTEMA</button>
      </div>
    </form>
  </div>
</section>
@endsection