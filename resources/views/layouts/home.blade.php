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
                           ç              
                        </form>
                        <button id="searchClose" class="search-close"><i class="ti-close text-dark"></i></button>
                     </div>
                  </div>
                  @auth
                  {{auth()->user()->name}}
                  <div class="text-end">
                     <a href="{{ route('signout') }}" class="btn btn-outline-light me-2">Logout</a>
                  </div>
                  @endauth
                  @guest
                  <div class="text-end">
                     <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                     <a href="{{ route('register-user') }}" class="btn btn-warning">Sign-up</a>
                  </div>
                  @endguest
               </ul>
            </nav>
         </div>
      </header>
      <!-- /navigation -->
      <section class="section">
         <div class="container">
            <div class="columns is-desktop is-multiline">
               @yield('content')
              
            </div>
         </div>
      </section>
      @include('footer')
   </body>
</html>
