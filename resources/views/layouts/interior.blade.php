<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Typo & iconos -->
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/typicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flag-icon.min.css') }}" rel="stylesheet">    


    <!-- Styles -->
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/addons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/parsley.css') }}" rel="stylesheet">


    <link rel="shortcut icon" href="{{ asset('icon/icono.ico') }}" />
</head>
  <body>
    <div class="container-scroller">

         @yield('content')


    </div><!-- container-scroller -->

    <!-- Scripts -->
    @routes
    <script src="{{ asset('js/base.js') }}" defer></script>
    <script src="{{ asset('js/addons.js') }}" defer></script>

    <script src="{{ asset('js/off-canvas.js') }}" defer></script>
    <script src="{{ asset('js/misc.js') }}" defer></script>
    <script src="{{ asset('js/parsley.js') }}" defer></script>
    <script src="{{ asset('js/i18n/es.js') }}" defer></script>

  </body>
</html>    