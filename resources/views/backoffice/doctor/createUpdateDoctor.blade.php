@extends('layouts.backend')
@push('after-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select/nice-select2.css') }}">
@endpush
@section('content')
    <!-- MY-PROFILE SECTION START -->
    <main class="myprofile" id="main-section">
        <ul class="nav nav-tabs" id="profileTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->routeIs('doctor.create') || request()->routeIs('doctor.profile.personal.edit') ? 'active' : '' }}"
                   href="{{ isset($doctor) ? route('doctor.profile.personal.edit', $doctor->id) : '#' }}">
                    Personal Information
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->routeIs('doctor.profile.educational') || request()->routeIs('doctor.profile.educational.edit') ? 'active' : '' }}"
                   href="{{ isset($doctor) ? route('doctor.profile.educational.edit', $doctor->id) : '#' }}">
                    Educational Information
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->routeIs('doctor.profile.professional') || request()->routeIs('doctor.profile.professional.edit') ? 'active' : '' }}"
                   href="{{ isset($doctor) ? route('doctor.profile.professional.edit', $doctor->id) : '#' }}">
                    Professional Information
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->routeIs('doctor.profile.image') || request()->routeIs('doctor.profile.image.edit') ? 'active' : '' }}"
                   href="{{ isset($doctor) ? route('doctor.profile.image.edit', $doctor->id) : '#' }}">
                    Profile Image
                </a>
            </li>
        </ul>
        <div class="tab-content" id="profileTabContent">
            <!-- The content from the routes will be loaded here -->
            @yield('tab-content')
        </div>
    </main>
    <!-- MY-PROFILE SECTION END -->
@endsection
@push('after-scripts')
    {{-- <script src="{{ asset('assets/js/fileupload/uploadprofile.js') }}"></script> --}}
    <script src="{{ asset('assets/js/tag-generator/tag-generator.js') }}"></script>
    <script src="{{ asset('assets/js/showhide/showhide.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select/nice-select2.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select/doctorselect.js') }}"></script>
@endpush
