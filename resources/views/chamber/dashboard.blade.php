@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="mainsection" id="main-section">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="d-flex flex-column gap-4">
                    <div class="dashtodaydoctors">
                        <div class="dashtodaydoctors-header">
                            <h5 class="title">Today’s Doctor</h5>
                        </div>

                        <div class="dashtodaydoctors-body">
                            <div class="row g-3">
                                @if(!empty($todayDoctors))
                                    @foreach($todayDoctors as $doctor)
                                        <div class="col-md-4">
                                            <div class="doctoday">
                                                <figure class="thumb">
                                                    <img src="{{ !empty($doctor->doctor->photo) ? asset($doctor->doctor->photo) :  '../assets/images/avatar/avatar.svg' }}" alt="doc-thumb">
                                                </figure>

                                                <div class="doctoday-detail">
                                                    <h5 class="name text-capitalize">{{ $doctor->doctor->name ?? '' }}</h5>
                                                    <p class="text text-capitalize">
                                                        @if(!empty($doctor->doctor->experiences))
                                                            @foreach($doctor->doctor->experiences as $key => $experience)
                                                                @if($experience->current == 1)
                                                                    {{ $experience->designation ?? '' }}@if($key != count($doctor->doctor->experiences) - 1), @endif
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </p>
                                                    <div class="d-flex align-items-center gap-2 text-capitalize">
                                                        @if(!empty($doctor->doctor->specialities))
                                                            @foreach($doctor->doctor->specialities->take(2) as $speciality)
                                                                <span class="speciality">{{ $speciality->speciality_name }}</span>
                                                            @endforeach
                                                        @endif
                                                    </div>

                                                        <p class="text text-capitalize">
                                                            @if(!empty($doctor->doctor->qualification))
                                                                @foreach($doctor->doctor->qualification as $key => $qualification)
                                                                    {{ $qualification->degree_id ?? '' }}@if($key != count($doctor->doctor->qualification) - 1), @endif
                                                                @endforeach
                                                            @endif
                                                        </p>

                                                    <p class="text text-capitalize">
                                                        @if(!empty($doctor->doctor->experiences))
                                                            @foreach($doctor->doctor->experiences as $key => $experience)
                                                                @if($experience->current == 1)
                                                                    {{ $experience->organization_name ?? '' }}@if($key != count($doctor->doctor->experiences) - 1), @endif
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </p>
                                                </div>

                                                <div class="doctoday-footer mt-2">
                                                    @php
                                                        $startTime = \Carbon\Carbon::parse($doctor->start_from)->format('g:i a');
                                                        $endTime = \Carbon\Carbon::parse($doctor->end_from)->format('g:i a');
                                                    @endphp

                                                    <p class="text">{{ $startTime }}  - {{ $endTime }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="viewschedule">
                        <a href="{{ route('chamber.weekly-schedules') }}" class="link">Weekly Schedule</a>
                    </div>

                    <!-- PROFILE-IMPRESSION-CHART -->
                    <div class="card-impression">
                        <div class="card-impression-header">
                            <h5 class="impression-title">Your Profile Impression</h5>
                            <p class="impression-text">
                                This graph shows your profile view for the last 6 months.
                                This views are counted when any users views your profile.
                                Every time they visits we increase your profile impression.
                            </p>
                        </div>

                        <div class="card-impression-body">
                            <div id="profile-impression-chart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="d-flex flex-column gap-4">
                    <!-- PROILE-PROGRESS -->
                    <div class="card-progress">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="progress-title">Your Profile</h6>
                            <p class="progress-completed">80% complete</p>
                        </div>

                        <div class="card-progress-body">
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 80%"></div>
                            </div>

                            <p class="progress-text">
                                Your social link field is empty !
                            </p>
                        </div>
                    </div>

                    <!-- VIEW-COUNTERS -->
                    <div class="viewscounter">
                        <h5 class="countertitle">Most Viewed Doctor</h5>

                        <div class="card-view">
                            <figure class="card-view-thumb">
                                <img src="../assets/images/avatar/avatar.svg" alt="card-thumb">
                            </figure>

                            <div class="card-view-detail">
                                <h6 class="view-title">Doctor Stephen Strange</h6>
                                <p class="view-count">75,565</p>
                            </div>
                        </div>

                        <div class="card-view">
                            <figure class="card-view-thumb">
                                <img src="../assets/images/avatar/avatar.svg" alt="card-thumb">
                            </figure>

                            <div class="card-view-detail">
                                <h6 class="view-title">Doctor Stephen Strange</h6>
                                <p class="view-count">25,565</p>
                            </div>
                        </div>

                        <div class="card-view">
                            <figure class="card-view-thumb">
                                <img src="../assets/images/avatar/avatar.svg" alt="card-thumb">
                            </figure>

                            <div class="card-view-detail">
                                <h6 class="view-title">Doctor Stephen Strange</h6>
                                <p class="view-count">35,565</p>
                            </div>
                        </div>
                    </div>

                    <!-- CATEGORY-LIST -->
                    <div class="d-flex flex-column gap-4 bg-white p-3">
                        <h5 class="ctgtitle">Doctors Category</h5>

                        <ul class="sidebarlist">

                            @if(!empty($chamberDoctorsCountBySpeciality))
                                @foreach($chamberDoctorsCountBySpeciality as $speciality)
                                    <li class="sidebarlist-item">
                                        <a href="#" class="sidebarlist-link">
                                            <span class="categorytitle text-capitalize">{{ $speciality->speciality_name }}</span>
                                            <span class="categorycounter">({{ $speciality->doctors_count }})</span>
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN-SECTION END -->
@endsection
