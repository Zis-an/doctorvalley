<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctorvaly</title>

  <!-- FAVICON-ICON -->
  <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.ico') }}" type="image/x-icon">

  <!-- FONTAWESOME-CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

  <!-- SWIPER-CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/swiper/swiper-bundle.min.css') }}">

  <!-- BOOTSTRAP-CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">

  <!-- DOCTORVALY-CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body class="frontbody">

  <!-- PRELOADER START -->
  <div class="preloader" id="preloader">
    <div class="loader">
      <lottie-player src="{{ asset('assets/js/lottie-js/loader.json') }}" background="transparent" speed="1" loop autoplay></lottie-player>
    </div>
  </div>
  <!-- PRELOADER END -->

  @include('includes.frontend.header')

  @yield('content')

  @include('includes.frontend.footer')

  <!-- BOOTSTRAP-JS -->
  <script src="{{ asset('assets/js/bootsrap/bootstrap.bundle.min.js') }}"></script>

  <!-- BOOTSTRAP-TOOLTIP -->
  <script src="{{ asset('assets/js/tooltip/tooltip.js') }}"></script>

  <!-- LOTTIE-JS -->
  <script src="{{ asset('assets/js/lottie-js/lottie-player.js') }}"></script>

  <!-- PRELOADER -->
  <script src="{{ asset('assets/js/loader/loader.js') }}"></script>

  <!-- PRELOADER -->
  <script src="{{ asset('assets/js/copyright/copyright.js') }}"></script>

  <!-- TOGGLE-ICON -->
  <script src="{{ asset('assets/js/toggleicon/toggleicon.js') }}"></script>

  <!-- GET-DATE -->
  <script src="{{ asset('assets/js/date/today.js') }}"></script>

  <!-- SWIPER-JS -->
  <script src="{{ asset('assets/js/swiper/swiper-bundle.min.js') }}"></script>

  <!-- HOME-SLIDER -->
  <script src="{{ asset('assets/js/home-slider/homeslider.js') }}"></script>

</body>

</html>
