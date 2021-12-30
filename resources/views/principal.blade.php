<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--instanciada-->
  <link type="text/css" rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"><!--instanciada-->
  
  <link rel="stylesheet" href="{{ asset('doscss/adminlte.min.css') }}"><!--instanciada-->

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

        <example-component></example-component>
        <br>
        <prueba-component></prueba-component>
  
    <!--Aqui se coloca la plantilla sin las librerias-->
    
        <!--fin de la plantilla-->
</div>

<script src="{{asset('js/app.js')}}"></script><!--instanciada-->
<script src="{{asset('jquery/jquery.min.js')}}"></script><!--instanciada-->
<!-- Bootstrap 4 -->
<script src="{{asset('boostrapjs/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('archjs/adminlte.min.js')}}"></script><!--instanciada-->
<script src="{{asset('archjs/demo.js')}}"></script><!--instanciada-->
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
