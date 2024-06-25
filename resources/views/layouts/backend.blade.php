<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg"
    data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.ico') }}" type="image/x-icon">

    <!-- MC-DATEPICKER -->
    <link rel="stylesheet" href="{{ asset('assets/css/mc-datepicker/mc-calendar.min.css') }}">

    <!-- SWIPER-CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <!-- BOOTSTRAP-CSS[v5.3] -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">

    <!-- APEXCHARTS-CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/apexcharts/apexcharts.css') }}">

    <!-- DOCTORVALY CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('before-styles')

    @vite(['resources/css/backend.css', 'resources/css/app.css'])

    @stack('after-styles')

</head>

<body class="dashboard-body">

    @include('includes.sidebar.index')

    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')

    {{-- Sweet Alert --}}
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- BOOTSTRAP-BUNDLE-JS[v5.3] -->
    <script src="{{ asset('assets/js/bootsrap/bootstrap.bundle.min.js') }}"></script>

    <!-- HAMBURER-ICON -->
    <script src="{{ asset('assets/js/hamburger/hamburger.js') }}"></script>

    <!-- COPYRIGHT -->
    <script src="{{ asset('assets/js/copyright/copyright.js') }}"></script>

    <!-- TOOLTIP -->
    <script src="{{ asset('assets/js/tooltip/tooltip.js') }}"></script>

    <!-- LOTTIE-JS -->
    <script src="{{ asset('assets/js/lottie-js/lottie-player.js') }}"></script>

    <!-- PRELOADER -->
    <script src="{{ asset('assets/js/loader/loader.js') }}"></script>

    <!-- CHARTS -->
    <script src="{{ asset('assets/js/charts/homechart.js') }}"></script>

    <!-- MC-DATEPICKER -->
    <script src="{{ asset('assets/js/mc-datepicker/mc-calendar.min.js') }}"></script>

    <script src="{{ asset('assets/js/filter/deadline.js') }}"></script>

    <!-- AUTO-INCREMENT -->
    <script src="{{ asset('assets/js/autoincrement/increment.js') }}"></script>

    @stack('before-scripts')

    <!-- App js -->
    @vite(['resources/js/backend.js', 'resources/js/app.js'])

    @stack('after-scripts')

</body>

</html>
