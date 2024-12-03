<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg"
      data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.ico') }}" type="image/x-icon">

    <!-- BOOTSTRAP-CSS[v5.3] -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">

    <!-- DOCTORVALY CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- FONTAWESOME-CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    @stack('before-styles')

    @vite(['resources/css/backend.css', 'resources/css/app.css'])

    @stack('after-styles')

</head>

<body>

<!-- AUTHENTICATION-START -->
<main class="authentication">
    <div class="row w-100">
        <div class="col-md-6 col-lg-4 col-12 mx-md-auto">
            <div class="authentication-detail">
                <div class="authentication-header">
                    <a href="{{ route('index') }}" class="logo">
                        <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="logo">
                    </a>
                </div>

                @yield('content')
            </div>
        </div>
    </div>
</main>
<!-- AUTHENTICATION-END -->

{{-- Sweet Alert --}}
@include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- BOOTSTRAP-BUNDLE-JS[v5.3] -->
<script src="{{ asset('assets/js/bootsrap/bootstrap.bundle.min.js') }}"></script>

<!-- HAMBURER-ICON -->
<script src="{{ asset('assets/js/lottie-js/lottie-player.js') }}"></script>

<!-- TOOLTIP -->
<script src="{{ asset('assets/js/loader/loader.js') }}"></script>


@stack('before-scripts')

<!-- App js -->
@vite(['resources/js/backend.js', 'resources/js/app.js'])

@stack('after-scripts')

</body>

</html>
