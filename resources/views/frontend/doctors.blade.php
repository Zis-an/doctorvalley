@extends('layouts.frontend')
@push('after-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select/nice-select2.css') }}">
    <style>
        .filter-section {
            min-height: 443px;
        }
    </style>
@endpush
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="main">
        <section class="doctors-section">
            <div class="container">
                <div class="row g-4">

                    <div class="col-lg-3 col-md-4 d-none d-md-block filter-section">
{{--                        <div class="stickyfilter">--}}
                        <div class="">
                            <div class="filter">
                                <form id="filterForm" action="{{ route('doctors') }}" method="GET">
                                    <!-- Speciality Filter -->
                                    <div class="inputbox mb-3">
                                        <label for="specialities" class="inputlabel">Speciality</label>
                                        <select id="specialities" name="specialities" class="wide" onchange="this.form.submit()">
                                            <option value="" selected>Select a speciality</option>
                                            @foreach($specialities as $speciality)
                                                <option value="{{ $speciality->id }}"
                                                    {{ request('specialities') == $speciality->id ? 'selected' : '' }}>
                                                    {{ $speciality->speciality_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- District Filter -->
                                    <div class="inputbox mb-3">
                                        <label for="districts" class="inputlabel">District</label>
                                        <select id="districts" name="cities" class="wide" onchange="this.form.submit()">
                                            <option value="" selected>Select a district</option>
                                            @foreach($cities as $city)
                                                <option value="{{ $city->id }}"
                                                    {{ request('cities') == $city->id ? 'selected' : '' }}>
                                                    {{ $city->city_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Thana Filter -->
                                    <div class="inputbox mb-3">
                                        <label for="thanas" class="inputlabel">Thana</label>
                                        <select id="thanas" name="areas" class="wide" onchange="this.form.submit()">
                                            <option value="" selected>Select a thana</option>
                                            @foreach($areas as $area)
                                                <option value="{{ $area['id'] }}"
                                                    {{ request('areas') == $area->id ? 'selected' : '' }}>
                                                    {{ $area['area_name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Day wise Filter -->
{{--                                    <div class="inputbox mb-3">--}}
{{--                                        <label for="days" class="inputlabel">Days</label>--}}
{{--                                        <select id="days" name="days">--}}
{{--                                            <option value="" selected>Select a day</option>--}}
{{--                                            @foreach($days as $day)--}}
{{--                                                <option value="{{ $day }}">{{ $day }}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
                                </form>
                            </div>
                        </div>
                    </div>

                    @if(!empty($doctors))
                        <div class="col-lg-9 col-md-8">
                            <div class="row g-3" id="doctorList">
                                <!-- Doctor List -->
                                @foreach($doctors as $doctor)
                                    <div class="col-lg-4 col-sm-6 col-12 doctor-card">
                                        <a href="{{ route('doctor', $doctor->id) }}" class="slidelink">
                                            <div class="card-doctor">
                                                <div class="card-doctor-header">
                                                    <img src="{{ asset('storage/' . $doctor->photo) }}" alt="doctor-thumbnail">
                                                </div>
                                                <div class="card-doctor-body">
                                                    <div class="name-status">
                                                        <h5 class="name">{{ $doctor->name }}</h5>
                                                        @if($doctor->status == 1)
                                                            <span class="status active"></span>
                                                        @endif
                                                    </div>
{{--                                                    <p class="position">--}}
{{--                                                        @foreach($doctorSpecialities as $docSpec)--}}
{{--                                                            @if($docSpec->doctor_id == $doctor->id)--}}
{{--                                                                {{ $docSpec->speciality->speciality_name ?? 'Speciality not found' }} <br/>--}}
{{--                                                            @endif--}}
{{--                                                        @endforeach--}}
{{--                                                    </p>--}}
                                                    <p class="position" style="height: 50px;">
                                                        @php $count = 0; @endphp
                                                        @foreach($doctorSpecialities as $docSpec)
                                                            @if($docSpec->doctor_id == $doctor->id && $count < 3)
                                                                {{ $docSpec->speciality->speciality_name ?? 'Speciality not found' }}
                                                                @php $count++; @endphp
                                                                @if($count < 3 && $loop->remaining > 0), @endif
                                                            @endif
                                                        @endforeach
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="col-lg-9 col-md-8">
                            <div class="row g-3" id="doctorList">
                                <h3 class="text-center">No Doctors available.</h3>
                            </div>
                        </div>
                    @endif


                </div>
            </div>
        </section>
    </main>
    <!-- MAIN-SECTION END -->
@endsection

@push('after-scripts')
    <script src="{{ asset('assets/js/nice-select/nice-select2.js') }}"></script>
    <script>
        NiceSelect.bind(document.getElementById("specialities"), {
            searchable: true,
            placeholder: 'Select Division'
        });
        NiceSelect.bind(document.getElementById("districts"), {
            searchable: true,
            placeholder: 'Select Division'
        });
        NiceSelect.bind(document.getElementById("thanas"), {
            searchable: true,
            placeholder: 'Select Division'
        });;
    </script>
@endpush
