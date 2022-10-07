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
   <!-- navigation -->
<header class="is-sticky-top bg-white border-bottom border-default">
   <div class="container">

      <nav class="navigation navbar is-white">
         <a class="navbar-brand is-inline-flex ml-0 is-align-items-center" href="index.html">
            <img src="{{ asset('images/logo.png') }}" alt="logo">
         </a>
         <button role="button" class="navbar-burger burger" data-hidden="true" data-target="navigation">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
         </button>

         <ul class="navbar-end navbar-menu" id="navigation">
            <li class="navbar-item has-dropdown is-hoverable has-active">
               <a class="navbar-link">Homepage <small class="ti-angle-down ml-1"></small></a>
               <div class="navbar-dropdown">
                  <a class="navbar-item" href="index-full.html">Homepage Full Width</a>
                  <a class="navbar-item" href="index-full-left.html">Homepage Full With Left Sidebar</a>
                  <a class="navbar-item" href="index-full-right.html">Homepage Full With Right Sidebar</a>
                  <a class="navbar-item" href="index-list.html">Homepage List Style</a>
                  <a class="navbar-item" href="index-list-left.html">Homepage List With Left Sidebar</a>
                  <a class="navbar-item" href="index-list-right.html">Homepage List With Right Sidebar</a>
               </div>
            </li>
                
            <li class="navbar-item">
               <a class="navbar-link is-arrowless" href="about.html">About</a>
            </li>
                
            <li class="navbar-item">
               <a class="navbar-link is-arrowless" href="contact.html">Contact</a>
            </li>
            
            <li class="navbar-item has-dropdown is-hoverable has-active">
               <a class="navbar-link">Pages <small class="ti-angle-down ml-1"></small></a>
               <div class="navbar-dropdown">
                  <a class="navbar-item" href="author.html">Author</a>
                  <a class="navbar-item" href="post-details-1.html">Post Details 1</a>
                  <a class="navbar-item" href="post-details-2.html">Post Details 2</a>
                  <a class="navbar-item" href="post-elements.html">Post Elements</a>
                  <a class="navbar-item" href="privacy-policy.html">Privacy Policy</a>
                  <a class="navbar-item" href="terms-conditions.html">Terms Conditions</a>
               </div>
            </li>

            <li class="navbar-item">
               <select class="m-2 is-borderless" id="select-language">
                  <option id="en" value="about/" selected>En</option>
                  <option id="fr" value="fr/about/">Fr</option>
               </select>
            </li>

            <li class="navbar-item">
               <button id="searchOpen" class="search-btn"><i class="ti-search"></i></button>
            </li>

            <!-- search -->
            <div class="search">
               <div class="search-wrapper">
                  <form action="javascript:void(0)" class="h-100">
                     <input class="search-box pl-4" id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                  </form>
                  <button id="searchClose" class="search-close"><i class="ti-close text-dark"></i></button>
               </div>
            </div>
         </ul>
      </nav>
   </div>
</header>
<!-- /navigation -->

   <section class="section">
  <div class="container">
    <div class="columns is-desktop is-multiline">

@yield('content')
<aside class="column is-3-desktop">
           <!-- Search -->
   <div class="widget">
      <h5 class="widget-title"><span>Search</span></h5>
      <form action="javascript:void(0)" class="widget-search">
         <input id="search-query2" name="s" type="search" placeholder="Type &amp; Hit Enter...">
         <button type="submit"><i class="ti-search"></i>
         </button>
      </form>
   </div>
   @if ($mismas)
   <!-- Posts misma categoria -->
   <div class="widget">
      <h5 class="widget-title"><span>Entradas Similares</span></h5>
      <!-- post-item -->
      @foreach ($sec_entradas_categoria as $ent_tot)
      <ul class="list-unstyled widget-list">
         <li class="media widget-post is-align-items-center">
            <a href="{{ route('entrada', $ent_tot) }}">
               <img loading="lazy" src="{{ asset($ent_tot->imagen_url) }}">
            </a>
            <div class="ml-4">
               <h5 class="h6 mb-0"><a href="{{ route('entrada', $ent_tot) }}">{{ $ent_tot->titulo }}</a></h5>
               <small>March 15, 2020</small>
            </div>
         </li>
      </ul>
      @endforeach
      
   </div>

   @endif
   <!-- categories -->
   <div class="widget">
      <h5 class="widget-title"><span>Categorías</span></h5>
      <ul class="list-unstyled widget-list">
        @foreach ($sec_categorias as $categoria)
         <li><a href="{{ route('categoria', $categoria) }}" class="is-flex">{{$categoria->nombre}}
               <small class="ml-auto">({{$categoria->cantidad}})</small></a>
         </li>
         @endforeach
      </ul>
   </div>
   <!-- tags -->
   <div class="widget">
      <h5 class="widget-title"><span>Etiquetas</span></h5>
      <ul class="list-inline widget-list-inline">
         @foreach ($sec_tags as $tags )
         <li class="list-inline-item"><a href="#!">{{ $tags->nombre }}</a>
         </li>
         @endforeach
         
      </ul>
   </div>
   
   <!-- latest post -->
   <div class="widget">
      <h5 class="widget-title"><span>Últimas Entradas</span></h5>
      <!-- post-item -->
      @foreach ($sec_ult_entradas as $ent_tot)
      <ul class="list-unstyled widget-list">
         <li class="media widget-post is-align-items-center">
            <a href="{{ route('entrada', $ent_tot) }}">
               <img loading="lazy" src="{{ asset($ent_tot->imagen_url) }}">
            </a>
            <div class="ml-4">
               <h5 class="h6 mb-0"><a href="{{ route('entrada', $ent_tot) }}">{{ $ent_tot->titulo }}</a></h5>
               <small>March 15, 2020</small>
            </div>
         </li>
      </ul>
      @endforeach
      
   </div>
      </aside>

</div>
  </div>
</section>

   <footer class="section-sm pb-0 border-top border-default">
      <div class="container">
         <div class="columns is-multiline is-justify-content-space-between">
            <div class="column is-3-desktop">
               <a class="mb-5 is-block" href="index.html">
                  <img class="" width="150px" src="{{ asset('images/logo.png') }}" alt="LogBook">
               </a>
               <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>

            <div class="column is-2-widescreen is-3-desktop is-6">
               <h6 class="mb-4">Quick Links</h6>
               <ul class="list-unstyled footer-list">
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="privacy-policy.html">Privacy Policy</a></li>
                  <li><a href="terms-conditions.html">Terms Conditions</a></li>
               </ul>
            </div>

            <div class="column is-2-widescreen is-3-desktop is-6">
               <h6 class="mb-4">Social Links</h6>
               <ul class="list-unstyled footer-list">
                  <li><a href="#">facebook</a></li>
                  <li><a href="#">twitter</a></li>
                  <li><a href="#">linkedin</a></li>
                  <li><a href="#">github</a></li>
               </ul>
            </div>

            <div class="column is-3-desktop">
               <h6 class="mb-4">Subscribe Newsletter</h6>
               <form class="subscription" action="javascript:void(0)" method="post">
                  <div class="is-relative">
                     <i class="ti-email email-icon"></i>
                     <input type="email" class="input" placeholder="Your Email Address">
                  </div>
                  <button class="btn btn-primary w-100 rounded mt-2" type="submit">Subscribe now</button>
               </form>
            </div>
         </div>
         <div class="scroll-top">
            <a href="javascript:void(0);" id="scrollTop"><i class="ti-angle-up"></i></a>
         </div>
         <div class="has-text-centered">
            <p class="content">&copy; 2020 - Design &amp; Develop By <a href="https://themefisher.com/" target="_blank">Themefisher</a></p>
         </div>
      </div>
   </footer>


   <!-- JS Plugins -->
   <script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
   <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>

   <!-- Main Script -->
   <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>