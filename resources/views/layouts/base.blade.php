<!DOCTYPE html>
<html lang="es-es">
   <head>
      <meta charset="utf-8">
      <title>@yield('title')</title>
      <!-- mobile responsive meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
      <meta name="description" content="This is meta description">
      <meta name="author" content="Themefisher">
      <!-- plugins -->
      <link rel="preload" href="https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2" style="font-display: optional;">
      <link rel="stylesheet" href="{{ asset('plugins/bulma/bulma.min.css') }}">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:600%7cOpen&#43;Sans&amp;display=swap" media="screen">
      <link rel="stylesheet" href="{{ asset('plugins/themify-icons/themify-icons.css') }}">
      <link rel="stylesheet" href="/plugins/slick/slick.css">
      <!-- Main Stylesheet -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <!--Favicon-->
      <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}images/favicon.png" type="image/x-icon">
      <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
   </head>
   <body>
      @include('components.menu-sup')
      <section class="section">
         <div class="container">
            <div class="columns is-desktop is-multiline">
               @yield('content')              
            </div>
         </div>
      </section>
      @include('components.footer')
   </body>
</html>
