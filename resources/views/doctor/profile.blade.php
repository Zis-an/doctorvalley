@extends('layouts.backend')
@section('title', 'Profile')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="myprofile" id="main-section">
        <section class="doctorsingleinfo">
            <div class="personalinfo-info">
                <div class="details align-items-start">
                    <div class="details-body w-100">
                        <div class="table-responsive">
                            <table class="table" aria-describedby="table">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">BMDC No.</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ auth()->user()->name }}</td>
                                        <td>{{ auth()->user()->bmdc }}</td>
                                        <td>{{ auth()->user()->email }}</td>
                                        <td>{{ auth()->user()->phone }}</td>
                                        <td class="text-capitalize">{{ auth()->user()->gender }}</td>
                                        <td>
                                            <div class="actions">
                                                <a href="{{ route('doctor.info', $doctor->id) }}"
                                                   data-bs-toggle="tooltip" data-bs-placement="top"
                                                   data-bs-title="View Doctor" class="btn-view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                         height="16" fill="currentColor" class="bi bi-eye-fill"
                                                         viewBox="0 0 16 16">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                        <path
                                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="actions">
                                                <a href="{{ route('doctor.profile.personal.edit', auth()->user()->id) }}" class="btn-action">
                                                    <svg data-bs-toggle="tooltip" data-bs-placement="top"
                                                         data-bs-title="Edit Personal Informations"
                                                         xmlns="http://www.w3.org/2000/svg" width="16"
                                                         height="16" fill="currentColor"
                                                         class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                              d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                </a>
                                                <a href="{{ route('doctor.profile.educational.edit', auth()->user()->id) }}" class="btn-action">
                                                    <svg data-bs-toggle="tooltip" data-bs-placement="top"
                                                         data-bs-title="Edit Educational Informations"
                                                         xmlns="http://www.w3.org/2000/svg" width="16"
                                                         height="16" fill="currentColor"
                                                         class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                              d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                </a>
                                                <a href="{{ route('doctor.profile.professional.edit', auth()->user()->id) }}" class="btn-action">
                                                    <svg data-bs-toggle="tooltip" data-bs-placement="top"
                                                         data-bs-title="Edit Professional Informations"
                                                         xmlns="http://www.w3.org/2000/svg" width="16"
                                                         height="16" fill="currentColor"
                                                         class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                              d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                </a>
                                                <a href="{{ route('doctor.profile.image.edit', auth()->user()->id) }}" class="btn-action">
                                                    <svg data-bs-toggle="tooltip" data-bs-placement="top"
                                                         data-bs-title="Edit Doctor Image"
                                                         xmlns="http://www.w3.org/2000/svg" width="16"
                                                         height="16" fill="currentColor"
                                                         class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                              d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>





    {{--            <div class="info">--}}
    {{--                <div class="info-header">--}}
    {{--                    <h3 class="infotitle">Profile Image</h3>--}}
    {{--                </div>--}}
    {{--                <div class="info-body">--}}
    {{--                    <figure class="profileimg">--}}
    {{--                        @if (!empty(auth()->user()->photo))--}}
    {{--                            <img src="{{ asset('storage/' . auth()->user()->photo) }}" alt="profile-image">--}}
    {{--                        @else--}}
    {{--                            <img src="{{ asset('assets/images/avatar/profile.svg') }}" alt="profile-image">--}}
    {{--                        @endif--}}
    {{--                    </figure>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="info">--}}
    {{--                <div class="info-header">--}}
    {{--                    <h3 class="infotitle">Personal Information</h3>--}}
    {{--                </div>--}}
    {{--                <div class="info-body">--}}
    {{--                    <ul>--}}
    {{--                        <li>--}}
    {{--                            <strong>Name:</strong> {{ auth()->user()->name }}--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <strong>BMDC Registration No:</strong> {{ $doctor->bmdc }}--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <strong>E-mail:</strong> {{ $doctor->email }}--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <strong>Phone Number:</strong> {{ $doctor->phone }}--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <strong>Gender:</strong> {{ ucfirst($doctor->gender) }}--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <strong>Division:</strong> {{ $doctor->province_id }}--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <strong>District:</strong> {{ $doctor->city_id }}--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <strong>Thana:</strong> {{ $doctor->area_id }}--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <strong>Address:</strong> {{ $doctor->address }}--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <strong>Bio:</strong> {{ $doctor->bio }}--}}
    {{--                        </li>--}}
    {{--                        @php--}}
    {{--                            $platforms = ['Facebook', 'Twitter', 'Youtube', 'Linkedin'];--}}
    {{--                            $links = json_decode($doctor->links);--}}
    {{--                        @endphp--}}
    {{--                        @foreach ($platforms as $index => $platform)--}}
    {{--                            <li>--}}
    {{--                                <strong>{{ $platform }}:</strong> {{ $links[$index] ?? 'N/A' }}--}}
    {{--                            </li>--}}
    {{--                        @endforeach--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="info">--}}
    {{--                <div class="info-header">--}}
    {{--                    <h3 class="infotitle">Professional Information</h3>--}}
    {{--                </div>--}}

    {{--                <div class="info-body">--}}
    {{--                    @foreach ($experiences as $experience)--}}
    {{--                        <ul class="py-3">--}}
    {{--                            <li>--}}
    {{--                                <strong>Organization Name:</strong> {{ $experience->organization_name }}--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <strong>Designation:</strong> {{ $experience->designation }}--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <strong>From Date:</strong> {{ $experience->from }}--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <strong>To Date:</strong> {{ $experience->to }}--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <strong>Organiztion Location:</strong> {{ $experience->location }}--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <strong>Current Status:</strong> {{ $experience->current == 1 ? 'Working' : 'Not Working' }}--}}
    {{--                            </li>--}}
    {{--                        </ul>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="info">--}}
    {{--                <div class="info-header">--}}
    {{--                    <h3 class="infotitle">Educational Information</h3>--}}
    {{--                </div>--}}

    {{--                <div class="info-body">--}}
    {{--                    @foreach ($qualifications as $qualification)--}}
    {{--                        <ul class="py-3">--}}
    {{--                            <li>--}}
    {{--                                <strong>Degree Title:</strong> {{ $qualification->degree_id }}--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <strong>Major Course:</strong> {{ $qualification->major }}--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <strong>Institution Name:</strong> {{ $qualification->institute_name }}--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <strong>From Date:</strong> {{ $qualification->from }}--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <strong>To Date:</strong> {{ $qualification->to }}--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <strong>Current Status:</strong> {{ $qualification->current == 1 ? 'Studying' : 'Not Studying' }}--}}
    {{--                            </li>--}}
    {{--                        </ul>--}}
    {{--                    @endforeach--}}
    {{--                </div>--}}
    {{--            </div>--}}




    <!-- MAIN-SECTION END -->
@endsection
