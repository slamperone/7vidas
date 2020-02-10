<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('form-builder/css/jquery.rateyo.min.css') }}" rel="stylesheet">


    <link rel="shortcut icon" href="{{ asset('icon/icono.ico') }}" />
</head>
  <body>
    <div class="container-scroller">

         @yield('content')


    </div><!-- container-scroller -->

    <!-- Scripts -->
    @routes
    <script src="{{ asset('js/base.js') }}" defer></script>
    <script src="{{ asset('form-builder/js/form-builder.js') }}" defer></script>
    <script src="{{ asset('form-builder/js/demo.js') }}" defer></script>
    <script src="{{ asset('js/misc.js') }}" defer></script>
    
<script>
  
  jQuery($ => {
  const fbTemplate = document.getElementById('build-wrap');
  $(fbTemplate).formBuilder();
});
  
</script>
  </body>
</html>    