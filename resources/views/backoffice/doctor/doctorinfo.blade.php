@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="myprofile" id="main-section">
        <section class="doctorsingleinfo">
            <div class="info">
                <div class="info-header">
                    <h3 class="infotitle">Profile Image</h3>
                </div>
                <div class="info-body">
                    <figure class="profileimg">
                        @if (!empty($doctor->photo))
                            <img src="{{ asset('storage/' . $doctor->photo) }}" alt="profile-image">
                        @else
                            <img src="{{ asset('assets/images/avatar/profile.svg') }}" alt="profile-image">
                        @endif
                    </figure>
                </div>
            </div>
            <div class="info">
                <div class="info-header">
                    <h3 class="infotitle">Personal Information</h3>
                </div>
                <div class="info-body">
                    <ul>
                        <li>
                            <strong>Name:</strong> {{ $doctor->name }}
                        </li>
                        <li>
                            <strong>BMDC Registration No:</strong> {{ $doctor->bmdc }}
                        </li>
                        <li>
                            <strong>E-mail:</strong> {{ $doctor->email }}
                        </li>
                        <li>
                            <strong>Phone Number:</strong> {{ $doctor->phone }}
                        </li>
                        <li>
                            <strong>Gender:</strong> {{ ucfirst($doctor->gender) }}
                        </li>
                        <li>
                            <strong>Division:</strong> {{ $doctor->province->province_name }}
                        </li>
                        <li>
                            <strong>District:</strong> {{ $doctor->city->city_name }}
                        </li>
                        <li>
                            <strong>Thana:</strong> {{ $doctor->area->area_name }}
                        </li>
                        <li>
                            <strong>Address:</strong> {{ $doctor->address }}
                        </li>
                        <li>
                            <strong>Bio:</strong> {{ $doctor->bio }}
                        </li>
                        @php
                            $platforms = ['Facebook', 'Twitter', 'Youtube', 'Linkedin'];
                            $links = json_decode($doctor->links);
                        @endphp
                        @foreach ($platforms as $index => $platform)
                            <li>
                                <strong>{{ $platform }}:</strong> {{ $links[$index] ?? 'N/A' }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="info">
                <div class="info-header">
                    <h3 class="infotitle">Professional Information</h3>
                </div>

                <div class="info-body">
                    @foreach ($experiences as $experience)
                    <ul class="py-3">
                        <li>
                            <strong>Organization Name:</strong> {{ $experience->organization_name }}
                        </li>
                        <li>
                            <strong>Designation:</strong> {{ $experience->designation }}
                        </li>
                        <li>
                            <strong>From Date:</strong> {{ $experience->from }}
                        </li>
                        <li>
                            <strong>To Date:</strong> {{ $experience->to }}
                        </li>
                        <li>
                            <strong>Organiztion Location:</strong> {{ $experience->location }}
                        </li>
                        <li>
                            <strong>Current Status:</strong> {{ $experience->current == 1 ? 'Working' : 'Not Working' }}
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>

            <div class="info">
                <div class="info-header">
                    <h3 class="infotitle">Educational Information</h3>
                </div>

                <div class="info-body">
                    @foreach ($qualifications as $qualification)
                    <ul class="py-3">
                        <li>
                            <strong>Degree Title:</strong> {{ $qualification->degree_id }}
                        </li>
                        <li>
                            <strong>Major Course:</strong> {{ $qualification->major }}
                        </li>
                        <li>
                            <strong>Institution Name:</strong> {{ $qualification->institute_name }}
                        </li>
                        <li>
                            <strong>From Date:</strong> {{ $qualification->from }}
                        </li>
                        <li>
                            <strong>To Date:</strong> {{ $qualification->to }}
                        </li>
                        <li>
                            <strong>Current Status:</strong> {{ $qualification->current == 1 ? 'Studying' : 'Not Studying' }}
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    <!-- MAIN-SECTION END -->

@endsection
