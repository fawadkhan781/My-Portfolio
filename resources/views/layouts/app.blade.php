<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="ThemeStarz">
  
  <link rel="stylesheet" href="{{asset('assets/font-awesome/webfonts/fa-solid-900.woff2')}}">
  <link rel="stylesheet" href="{{asset('assets/font-awesome/webfonts/fa-brands-400.woff2')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('assets/font-awesome/css/fontawesome-all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/odometer-theme-default.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

  @yield('styles')
 
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" /> -->

  <title>Fawad Khan - Personal Portfolio Template</title>

</head>

<body data-spy="scroll" data-target=".navbar" class="has-loading-screen">
  <div class="ts-page-wrapper" id="page-top">

    @include('partials.header')

    @yield('content')
  @include('partials.footer')
  <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('assets/js/custom.hero.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/js/isInViewport.jquery.js')}}"></script>
  <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/js/scrolla.jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery-validate.bootstrap-tooltip.min.js')}}"></script>
  <script src="{{asset('assets/js/odometer.min.js')}}"></script>
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
 

</body>

</html>