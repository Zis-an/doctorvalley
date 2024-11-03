@extends('layouts.frontend')
@push('styles')
    <style>
        .custom-icon {
            color: inherit;
        }
        .custom-icon:hover {
            color: white;
        }
    </style>
@endpush
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="main">
        <div class="doctordetails">
            <div class="container">
                <div class="doctordetails-content">
                    <div class="d-flex flex-column flex-md-row" style="gap: 20px;">
                        <div style="max-width: 1000px;">
                            <div class="row g-4">
                                <!-- DOCTOR PROFILE INFO START -->
                                <div class="col-lg-6 col-12">
                                    <div class="profileinfo">
                                        <!-- DOCTOR PROFILE START -->
                                        <figure class="doctor-profile">
                                            @if(!empty($doctor))
                                                <img src="{{ asset('storage/' . $doctor->photo) }}" alt="doctor-profile">
                                            @else
                                                <img src="{{ asset('assets/images/doctors/doctor-7.png') }}" alt="doctor-profile">
                                            @endif

                                            <div class="docinfo">
                                                <h6 class="name">{{ $doctor->name }}</h6>
                                                <p class="designation">
                                                @foreach($doctor->experiences as $experience)
                                                    {{ $experience->designation ?? 'No designation provided' }}@if(!$loop->last),@endif
                                                @endforeach
                                                </p>
                                            </div>
                                        </figure>
                                        <!-- DOCTOR PROFILE END -->
                                    </div>
                                </div>
                                <!-- DOCTOR PROFILE INFO END -->
                                <!-- PROFILE DETAILS START -->
                                <div class="col-lg-6 col-12">
                                    <div class="profile-information">
                                        <h5 class="name">{{ $doctor->name }}</h5>
                                        <!-- DOCTOR STUDYLIST START -->
                                        <ul class="studylist">
                                            @foreach ($doctor->qualification as $qualification)
                                                <li>
                                                    Degree: {{ $qualification->degree_id ?? 'No Degree Provided' }} <br>
                                                    Institute: {{ $qualification->institute_name ?? 'No Institution Provided' }}
                                                </li>
                                            @endforeach
                                        </ul>
                                        <!-- DOCTOR STUDYLIST END -->
                                        <!-- DOCTOR WORKING PLACE -->
                                        <p class="workingplace">
                                            @foreach($doctor->experiences as $experience)
                                                {{ $experience->organization_name ?? 'No Organization Provided' }}@if(!$loop->last),@endif
                                            @endforeach
                                        </p>
                                        <!-- DOCTOR SPECILITIES START -->
                                        <div class="specilities">
                                            <div class="specilities-header">
                                                <h5 class="specilities-title">Specilities</h5>
                                            </div>

                                            <div class="specilities-body">
                                                @foreach($doctor->specialities as $speciality)
                                                    <span class="spacility">{{ $speciality->speciality_name }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- DOCTOR SPECILITIES END -->
                                        <!-- DOCTOR EXPERIENCE START -->
                                        <div class="experience">
                                            <h5 class="experience-title">Experience</h5>
                                            @foreach($doctor->experiences as $experience)
                                                <p class="experience-text">{{ $experience->designation }}</p>
                                            @endforeach
                                        </div>
                                        <!-- DOCTOR EXPERIENCE END -->
                                        <!-- DOCTOR CONTACT-INFO START -->
                                        <div class="contacts">
                                            <div class="contacts-header">
                                                <h5 class="contacts-title">Share On</h5>
                                            </div>

                                            <div class="contacts-body">
                                                <ul class="followlist">
                                                    <li class="followlist-item">
                                                        <a href="https://www.facebook.com" target="_blank" class="followlist-link facebook-link"
                                                           data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share on Facebook">
                                                            <i class="fa-brands fa-facebook-f"></i>
                                                        </a>
                                                    </li>

                                                    <li class="followlist-item">
                                                        <a href="https://www.twitter.com" target="_blank" class="followlist-link twitter-link"
                                                           data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share on Twitter">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>

                                                    <li class="followlist-item">
                                                        <a href="https://www.instagram.com" target="_blank" class="followlist-link youtube-link"
                                                           data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share on Youtube">
                                                            <i class="fa-brands fa-youtube"></i>
                                                        </a>
                                                    </li>

                                                    <li class="followlist-item">
                                                        <a href="https://www.linkedin.com" target="_blank" class="followlist-link linkedin-link"
                                                           data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share on Linkedin">
                                                            <i class="fa-brands fa-linkedin-in"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- DOCTOR CONTACT-INFO END -->
                                    </div>
                                </div>
                                <!-- PROFILE DETAILS END -->
                                <!-- DOCTOR BIOGRAPHY START -->
                                <div class="col-12">
                                    <div class="biography">
                                        <div class="biography-header">
                                            <h5 class="biography-title mb-3">Biography</h5>
                                        </div>
                                        <div class="biography-body">
                                            <p class="biography-text">{{ $doctor->bio }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- DOCTOR BIOGRAPHY END -->
                            </div>
                        </div>
                        <div>
                        <!-- APPOINTMENT SECTION START -->
                        <div class="">
                            <div class="chember">
                                <div class="chember-header">
                                    <h5 class="chember-title">Appointments</h5>
                                </div>
                                <div class="chember-body">
                                    <div class="schedule-container">
                                        <ul id="scheduleList" class="schedulelist" style="width: 300px; max-height: 600px; overflow-y: auto;">
                                            @foreach ($schedules as $schedule)
                                                <li class="schedulelist-item" data-day="{{ strtolower($schedule->schedule_day) }}" style="max-width: 300px;">
                                                    <span class="daytime">
                                                        <span class="icon">
                                                            <i class="fa-regular fa-clock"></i>
                                                        </span>
                                                        <span class="text text-capitalize">{{ $schedule->schedule_day }} &nbsp; {{ $schedule->start_from }} - {{ $schedule->end_from }}</span>
                                                    </span>
                                                    <span class="chambername">
                                                        <span class="icon">
                                                            <i class="fa-regular fa-hospital"></i>
                                                        </span>
                                                        <span class="text">{{ $schedule->chamber->chamber_name ?? 'No Chamber Name Provided' }}</span>
                                                    </span>
                                                    <span class="chamberaddress">
                                                        <span class="icon">
                                                            <i class="fa-solid fa-location-dot"></i>
                                                        </span>
                                                        <span class="text">{{ $schedule->chamber->address ?? 'No Address Provided' }}</span>
                                                    </span>
                                                    <span class="chember-contact">
                                                        <span class="icon">
                                                            <i class="fa-solid fa-phone"></i>
                                                        </span>
                                                        <a href="tel:+8801965088417" class="link">{{ $schedule->chamber->phone_no ?? 'No Contact Number Provided' }}</a>
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- APPOINTMENT SECTION END -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="moredoc">
                <div class="moredoc-header py-4">
                    <div class="container">
                        <h4 class="suggestedtitle">Suggested Doctors</h4>
                    </div>
                </div>
                <div class="moredoc-body">
                    <div class="container">
                        <div class="slider">
                            <div class="swiper doctorslider">
                                <div class="swiper-wrapper gap-3">
                                    @foreach($suggestedDoctors as $suggested_doctor)
                                        <a href="{{ route('doctor', $suggested_doctor->id) }}" class="slidelink">
                                            <div class="card-doctor">
                                                <div class="card-doctor-header">
                                                    <img src="{{ asset('storage/' . $suggested_doctor->photo) }}" alt="doctor-thumbnail">
                                                </div>
                                                <div class="card-doctor-body">
                                                    <div class="name-status">
                                                        <h5 class="name">{{ $suggested_doctor->name }}</h5>
                                                        <span class="status active"></span>
                                                    </div>
                                                    <p class="position" style="height: 50px;">
                                                        @php
                                                            $count = 0;
                                                        @endphp
                                                        @foreach($suggested_doctor->specialities as $speciality)
                                                            @if($count < 3)
                                                                {{ $speciality->speciality_name ?? 'Speciality not found' }}
                                                                @php $count++; @endphp
                                                                @if($count < 3 && $loop->remaining > 0), @endif
                                                            @endif
                                                        @endforeach
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN-SECTION END -->
@endsection
@push('scripts')
    <script>
        // JavaScript code to add and remove text-white on hover
        const icons = document.getElementsByClassName('.followlist-link i');
        icons.forEach(icon => {
            icon.parentElement.addEventListener('mouseenter', () => {
                icon.classList.add('text-white');
            });

            icon.parentElement.addEventListener('mouseleave', () => {
                icon.classList.remove('text-white');
            });
        });
    </script>
@endpush


