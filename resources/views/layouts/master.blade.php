
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name','AlmeidaTECH')}}</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @stack('styles')
  <style>
    .fundo-header{
    background-image: url('/images/top-header.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: auto;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini"  >
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-info navbar-dark border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href=""><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    {{-- <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown show">
                <a href="#" class="nav-link dropdown-toggle" id="navbarMenu" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Administrador </a>
                <div class="dropdown-menu " aria-labelledby="navbarMenu">
                    <a href="#" class="dropdown-item">Alterar Senha</a>
                    <a href="#" class="dropdown-item">Dados</a>
                </div>
        </li>
    </ul> --}}

</nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link bg-primary">
      <img src="{{ asset('images/logo.png')}}"  alt="system_logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">

      <span class="brand-text font-weight-light">{{ config('app.name','AlmeidaTECH')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      @include('layouts.partials.sidemenu')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >

    <div class="content-header">
      <div class="container-fluid fundo-header">
        @yield('content-header')
      </div>
    </div>


    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       @yield('content')

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Versão 1.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">AlmeidaTECH</a>.</strong> Todos os direitos reservados.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('/js/app.js')}}"></script>
<script src="{{ asset('/js/sweetalert.min.js')}}"></script>

@stack('scripts')
</body>
</html>
