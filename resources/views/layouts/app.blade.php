<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Placasur">
  <meta name="author" content="Placasur SA">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- .ico -->
  <link href='imagenes/placasur.ico' rel='shortcut icon' type='image/x-icon' />
  <title>{{ config('app.name', 'Consejo') }}</title>

  <!-- CSS - bs - custom -->
  <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <!-- fontawesome iconos -->
  <link href="fontawesome/css/all.css" rel="stylesheet">
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="fontawesome/css/brands.css" rel="stylesheet">
  <link href="fontawesome/css/solid.css" rel="stylesheet">

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

  @include('layouts.partials.header')

  @yield('content')

  @include('layouts.partials.footer')

</body>

</html>
