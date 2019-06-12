<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible"  content="ie=edge">
  <title>{{ config('app.name','Vital Sollutions') }} | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
  .fundo-login{
    background-color: #ffffff;
    background-image: url('/images/fundo.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: auto;
    }
  </style>
</head>
<body class="hold-transition login-page fundo-login">
<div class="login-box" id="app">
  <div class="login-logo">
    <a href="#"><img src="/images/logo.png" height="150px" alt=""> </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Acesso ao sistema</p>
      <form method="POST" action="{{ route('login') }}">
         @csrf
        <div class="input-group mb-3">
          <input type="text" id="username" name="username" class="form-control" placeholder="Usuário">
          <div class="input-group-append">
              <span class="fa fa-envelope input-group-text"></span>
          </div>
          @if ($errors->has('username'))
          <div class="input-group mb-3">
          <span class="help-block text-danger" role="alert">
              <strong>{{ $errors->first('username') }}</strong>
          </span>
        </div>
           @endif
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" name="password" class="form-control" placeholder="Senha">
          <div class="input-group-append">
              <span class="fa fa-lock input-group-text"></span>
          </div>
          @if ($errors->has('password'))
          <div class="input-group mb-3">
          <span class="help-block text-danger" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
          </div>
           @endif
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Lembrar Acesso?
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Acessar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>





    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


<script src="{{ asset('/js/app.js')}}"></script>
<script src="/plugins/iCheck/icheck.min.js"></script>
<script>
    // $.ajaxSetup({
    // headers: {
    //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });



  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '10%' // optional
    })
  })
</script>
</body>
</html>

