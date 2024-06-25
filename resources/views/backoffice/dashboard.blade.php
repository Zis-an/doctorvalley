@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="mainsection" id="main-section">
        <div class="row g-4">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="cardlink">
                    <div class="card-counter counter-1">
                        <span class="count" data-targets="1000">0</span>
                        <span class="title">Doctor</span>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="cardlink">
                    <div class="card-counter counter-2">
                        <span class="count" data-targets="100">0</span>
                        <span class="title">Chamber</span>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="cardlink">
                    <div class="card-counter counter-3">
                        <span class="count" data-targets="200">0</span>
                        <span class="title">Blog</span>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="cardlink">
                    <div class="card-counter counter-4">
                        <span class="count" data-targets="190">0</span>
                        <span class="title">Speciality</span>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="cardlink">
                    <div class="card-counter counter-5">
                        <span class="count" data-targets="800">0</span>
                        <span class="title">Course</span>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ route('backoffice.doctor.request') }}" class="cardlink">
                    <div class="card-counter counter-6">
                        <span class="count" data-targets="1000">0</span>
                        <span class="title">Doctor Requrest</span>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="chamber-request.html" class="cardlink">
                    <div class="card-counter counter-7">
                        <span class="count" data-targets="1000">0</span>
                        <span class="title">Chamber Requrest</span>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="cardlink">
                    <div class="card-counter counter-8">
                        <span class="count" data-targets="100000">0</span>
                        <span class="title">Website View</span>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <!-- MAIN-SECTION END -->
@endsection
