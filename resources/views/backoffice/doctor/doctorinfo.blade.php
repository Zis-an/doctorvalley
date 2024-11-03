@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="myprofile" id="main-section">
        <section class="doctorsingleinfo">
            <div class="d-flex justify-content-end">
                {{--<div class="actions">
                    <a href="" class="btn-action">
                        <svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Doctor"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                    </a>

                    <button type="button" class="btn-action" data-bs-toggle="modal" data-bs-target="#confirmModal">
                        <svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete Doctor"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                            <path
                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                        </svg>
                    </button>
                </div>--}}
            </div>

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
                        {{-- <li>
                            <strong>Speciality:</strong>
                            @foreach (json_decode($doctor->speciality, true) as $key => $speciality)
                                {{ $speciality }}@if ($key !== array_key_last(json_decode($doctor->speciality, true)))
                                    ,
                                @endif
                            @endforeach
                        </li> --}}
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
