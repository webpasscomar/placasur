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
  <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" type="image/x-icon">
  <title>{{ config('app.name', 'PlacaSUR') }} - @yield('title')</title>

  <!-- Scripts -->
  {{-- @vite(['resources/sass/app.scss', 'public/fontawesome/css/all.css', 'public/fontawesome/css/fontawesome.css', 'public/fontawesome/css/brands.css', 'public/fontawesome/css/solid.css', 'public/css/custom.css', 'resources/js/app.js', 'public/js/jquery.min.js', 'public/js/bootstrap.bundle.min.js']) --}}

  <!-- CSS - bs - custom -->
  <link href="https://placasur.webpass.com.ar/css/estilos.css" rel="stylesheet">
  <link href="https://placasur.webpass.com.ar/css/custom.css" rel="stylesheet">
  <!-- fontawesome iconos -->
  <link href="https://placasur.webpass.com.ar/fontawesome/css/all.css" rel="stylesheet">
  <link href="https://placasur.webpass.com.ar/fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="https://placasur.webpass.com.ar/fontawesome/css/brands.css" rel="stylesheet">
  <link href="https://placasur.webpass.com.ar/fontawesome/css/solid.css" rel="stylesheet">
  <!-- Scripts -->
  {{-- <link rel="preload" as="style" href="https://placasur.webpass.com.ar/build/assets/app-298ba296.css" />
  <link rel="modulepreload" href="https://placasur.webpass.com.ar/build/assets/app-d0eb4253.js" />
  <link rel="stylesheet" href="https://placasur.webpass.com.ar/build/assets/app-298ba296.css" />
  <script type="module" src="https://placasur.webpass.com.ar/build/assets/app-d0eb4253.js"></script> --}}

  {{-- @vite(['resources/sass/app.scss', 'public/fontawesome/css/all.css', 'public/fontawesome/css/fontawesome.css', 'public/fontawesome/css/brands.css', 'public/fontawesome/css/solid.css', 'public/css/custom.css', 'resources/js/app.js', 'public/js/jquery.min.js', 'public/js/bootstrap.bundle.min.js']) --}}

</head>


</head>

<body>

  @include('layouts.partials.header')

  <div class="min-vh-100">
    @yield('content')
  </div>

  @include('layouts.partials.footer')

</body>

</html>
