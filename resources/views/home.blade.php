<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ulises Vallejos</title>

        <!-- Fonts -->
        @vite(['resources/js/app.js'])

        <link rel="shortcut icon" sizes="114x114" href="{{ asset('assets/img/toroide.ico') }}">
    </head>
    
    <body class="antialiased bg-slate-200">

      <header>
        <!--NavBar-->
        <x-layout.nav-bar></x-layout.nav-bar>
      </header>

      <!--Content-->
      <x-layout.app></x-layout.app>

      <footer>
        <x-layout.footer></x-layout.footer>
      </footer>

    </body>

</html>