<!--ordeno el head para incluirlo en la principal-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link type="text/css" rel="stylesheet" href="{{ asset('css/config.css') }}"> <!--instanciada-->
  <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--instanciada-->
  <link type="text/css" rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"><!--instanciada-->
  
  <link rel="stylesheet" href="{{ asset('doscss/adminlte.min.css') }}"><!--instanciada-->

</head>