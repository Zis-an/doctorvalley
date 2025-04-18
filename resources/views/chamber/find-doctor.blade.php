@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="mainsection" id="main-section">
        <section class="chambersection">
            <div class="container">
                <div class="chambersection-details">
                    <div class="chambersection-header">
                        <h1 class="title">FIND YOUR DOCTOR</h1>

                        <form action="{{ route('chamber.find-doctors') }}" method="GET">
                            <div class="searchbox">
                                <input type="search" name="search_doctor" id="seachdocs" class="searchfield" placeholder="Search Your Doctors">
                                <button type="submit" class="btn-search">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.9028 11.4444H12.1347L11.8625 11.1819C12.8153 10.0736 13.3889 8.63472 13.3889 7.06945C13.3889 3.57917 10.5597 0.750002 7.06944 0.750002C3.57917 0.750002 0.75 3.57917 0.75 7.06945C0.75 10.5597 3.57917 13.3889 7.06944 13.3889C8.63472 13.3889 10.0736 12.8153 11.1819 11.8625L11.4444 12.1347V12.9028L16.3056 17.7542L17.7542 16.3056L12.9028 11.4444ZM7.06944 11.4444C4.64861 11.4444 2.69444 9.49028 2.69444 7.06945C2.69444 4.64861 4.64861 2.69445 7.06944 2.69445C9.49028 2.69445 11.4444 4.64861 11.4444 7.06945C11.4444 9.49028 9.49028 11.4444 7.06944 11.4444Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </div>
                        </form>

                    </div>

                    <div class="col-2 ms-auto">
                        <a href="{{ route('doctor.create') }}" class="speciality p-2">Add new doctor</a>
                    </div>

                    <div class="chambersection-body">
                        <ul class="nav nav-tabs" id="doctorsTab" role="tablist">
                            <li class="nav-item" >
                                <a href="{{ route('chamber.find-doctors') }}" class="nav-link {{ request('speciality_id') ? '' : 'active' }}" type="button">
                                    ALL
                                </a>
                            </li>

                            </li>
                            @if(!empty($specialities))
                                @foreach($specialities as $speciality)
                                    <li class="nav-item text-capitalize">
                                        <a href="{{ route('chamber.find-doctors', ['speciality_id' => $speciality->id]) }}" class="nav-link {{ request('speciality_id') == $speciality->id ? 'active' : '' }}">
                                            {{ $speciality->speciality_name }}
                                        </a>
                                    </li>
                                @endforeach
                            @endif

                        </ul>

                        <div class="tab-content" id="doctorsTabContent">
                            <!-- ALL-DOCS -->
                            <div class="tab-pane fade show active">
                                <!-- EMPTY-DOCTORS -->

                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @elseif (session('error'))
                                        <div class="alert alert-error">{{ session('error') }}</div>
                                @endif

                                @if($doctors->isEmpty())
                                <div class="emptydoctors">
                                    <div class="emptydoctors-header">
                                        <figure class="icon">
                                            <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#emptyicon)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M42.93 44.14L35.86 37.07L42.93 30L35.86 22.9251L42.93 15.8551L50 22.9251L57.07 15.8551L64.145 22.9251L57.07 30L64.145 37.07L57.07 44.14L50 37.07L42.93 44.14ZM85 50V34.5801L90 50H85ZM90 90H10V60H30V80H70V60H90V90ZM15 34.5801V50H10L15 34.5801ZM25 10H75V50H60V70H40V50H25V10ZM90 20H85V0H15V20H10L0 49.5801V100H100V49.5801L90 20Z"
                                                        fill="black" />
                                                </g>
                                                <defs>
                                                    <clipPath id="emptyicon">
                                                        <rect width="100" height="100" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </figure>

                                        <h5 class="title">No Result Found</h5>
                                    </div>

                                    <div class="emptydoctors-body">
                                        <p class="text">
                                            We couldn’t find the doctor your are searching for. Please search again
                                        </p>
                                        <span class="text">OR</span>
                                        <p class="text">
                                            You may send us request for creating a doctor by <a href="{{ route('doctor.create') }}">click
                                                here</a>
                                        </p>
                                    </div>
                                </div>
                                @endif

                                <div class="row g-4">

                                    @if(!empty($doctors))
                                        @foreach($doctors as $doctor)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="carddoctor">
                                                    <div class="carddoctor-header">
                                                        <div class="specilities text-capitalize">
                                                            @foreach($doctor->specialities->take(2) as $speciality)
                                                                <span class="speciality">{{ $speciality->speciality_name }}</span>
                                                            @endforeach
                                                        </div>

                                                        <figure class="thumbnail">
                                                            <img src="{{ !empty($doctor->photo) ? asset('storage/' . $doctor->photo) :  '../assets/images/avatar/avatar.svg' }}" alt="doctor-thumbnail">
                                                        </figure>
                                                    </div>

                                                    <div class="carddoctor-body">
                                                        <h5 class="name text-capitalize">{{ $doctor->name ?? '' }}</h5>
                                                        <p class="text text-capitalize">
                                                            @if(!empty($doctor->experiences))
                                                                @foreach($doctor->experiences as $key => $experience)
                                                                    @if($experience->current == 1)
                                                                        {{ $experience->designation ?? '' }}@if($key != count($doctor->experiences) - 1), @endif
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        </p>
                                                        <p class="text text-capitalize">Phone: {{ $doctor->phone ?? '' }}</p>

                                                        @if(!empty($doctor->qualification))
                                                            <p class="text text-capitalize">
                                                                @foreach($doctor->qualification as $key => $qualification)
                                                                    {{ $qualification->degree_id ?? '' }}@if($key != count($doctor->qualification) - 1), @endif
                                                                @endforeach
                                                            </p>
                                                        @endif

                                                        <p class="text text-capitalize">
                                                            @if(!empty($doctor->experiences))
                                                                @foreach($doctor->experiences as $key => $experience)
                                                                    @if($experience->current == 1)
                                                                        {{ $experience->organization_name ?? '' }}@if($key != count($doctor->experiences) - 1), @endif
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        </p>

                                                    </div>

                                                    <div class="carddoctor-footer">
                                                        <a href="{{ route('doctor.info', $doctor->id ?? '') }}" class="btn-card" >
                                                            <span class="icon">
                                                                <svg width="14" height="14" viewBox="0 0 14 14"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M13.7707 12.6677L11.103 10.0001C11.5554 9.27576 11.7254 8.41023 11.5805 7.56859C11.4355 6.72696 10.9859 5.96811 10.3173 5.43677C9.64864 4.90544 8.80783 4.6388 7.95519 4.68772C7.10255 4.73663 6.29774 5.09767 5.69427 5.70198C5.09079 6.30629 4.73088 7.11158 4.68317 7.96426C4.63546 8.81695 4.90328 9.65736 5.43557 10.3252C5.96786 10.9931 6.72737 11.4416 7.56923 11.5854C8.41109 11.7291 9.2764 11.5579 10.0001 11.1045L12.6678 13.7721C12.7403 13.8445 12.8264 13.9018 12.9211 13.9409C13.0158 13.98 13.1172 14.0001 13.2197 14C13.3221 13.9999 13.4236 13.9796 13.5182 13.9403C13.6128 13.901 13.6987 13.8435 13.7711 13.7709C13.8434 13.6984 13.9008 13.6124 13.9399 13.5177C13.979 13.423 13.9991 13.3215 13.999 13.2191C13.9989 13.1166 13.9786 13.0152 13.9393 12.9206C13.9 12.826 13.8424 12.7401 13.7699 12.6677H13.7707ZM6.22102 8.1491C6.22102 7.76762 6.33414 7.39471 6.54609 7.07752C6.75803 6.76034 7.05927 6.51312 7.41172 6.36714C7.76417 6.22115 8.15199 6.18296 8.52615 6.25738C8.9003 6.3318 9.24399 6.5155 9.51374 6.78524C9.78349 7.05499 9.9672 7.39866 10.0416 7.77281C10.116 8.14696 10.0778 8.53477 9.93186 8.88721C9.78587 9.23965 9.53865 9.54088 9.22145 9.75282C8.90426 9.96475 8.53134 10.0779 8.14985 10.0779C7.63856 10.0779 7.14819 9.87488 6.78651 9.5135C6.42483 9.15212 6.22143 8.66192 6.22102 8.15065V8.1491Z"
                                                                        fill="#A1A1A1" />
                                                                    <path
                                                                        d="M7.77755 0H0.777755C0.571481 0 0.373656 0.0819395 0.227799 0.227793C0.0819418 0.373646 0 0.571466 0 0.777733L0 11.666C0 11.8723 0.0819418 12.0701 0.227799 12.2159C0.373656 12.3618 0.571481 12.4437 0.777755 12.4437H5.52206C4.62595 11.8931 3.92291 11.0778 3.51001 10.1105H2.33326C2.12699 10.1105 1.92917 10.0286 1.78331 9.88274C1.63745 9.73689 1.55551 9.53907 1.55551 9.3328C1.55551 9.12653 1.63745 8.92871 1.78331 8.78286C1.92917 8.637 2.12699 8.55507 2.33326 8.55507H3.13746C3.12657 8.41896 3.11102 8.28597 3.11102 8.14909C3.11237 7.7619 3.15856 7.37616 3.24868 6.9996H2.33326C2.12699 6.9996 1.92917 6.91766 1.78331 6.77181C1.63745 6.62595 1.55551 6.42813 1.55551 6.22187C1.55551 6.0156 1.63745 5.81778 1.78331 5.67193C1.92917 5.52607 2.12699 5.44413 2.33326 5.44413H3.90588C4.30757 4.81701 4.84235 4.28596 5.47228 3.88867H2.33326C2.12699 3.88867 1.92917 3.80673 1.78331 3.66087C1.63745 3.51502 1.55551 3.3172 1.55551 3.11093C1.55551 2.90467 1.63745 2.70685 1.78331 2.56099C1.92917 2.41514 2.12699 2.3332 2.33326 2.3332H6.22204C6.42831 2.3332 6.62614 2.41514 6.77199 2.56099C6.91785 2.70685 6.99979 2.90467 6.99979 3.11093C6.99505 3.16031 6.98514 3.20906 6.97024 3.25637C7.3561 3.16127 7.75191 3.11244 8.14931 3.11093C8.2862 3.11093 8.41997 3.12104 8.55375 3.13115V0.777733C8.55375 0.571735 8.47202 0.374151 8.3265 0.228342C8.18098 0.0825334 7.98355 0.000411997 7.77755 0Z"
                                                                        fill="#A1A1A1" />
                                                                </svg>
                                                            </span>
                                                            <span class="text">Profile</span>
                                                        </a>

                                                        @if(in_array($doctor->id, $existingChamberDoctorIds))
                                                            <!-- Button disabled if doctor is already added to the chamber -->
                                                            <a class="btn-card disabled" disabled>
                                                                <span class="icon">
                                                                <svg width="14" height="14" viewBox="0 0 14 14"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path class="whitepath"
                                                                          d="M13.2992 9.79999H11.8992C11.7136 9.79999 11.5355 9.72624 11.4042 9.59496C11.273 9.46369 11.1992 9.28564 11.1992 9.09999V7.69999C11.1992 7.51434 11.273 7.33629 11.4042 7.20501C11.5355 7.07374 11.7136 6.99999 11.8992 6.99999H13.2992C13.4848 6.99999 13.6629 7.07374 13.7941 7.20501C13.9254 7.33629 13.9992 7.51434 13.9992 7.69999V9.09999C13.9992 9.28564 13.9254 9.46369 13.7941 9.59496C13.6629 9.72624 13.4848 9.79999 13.2992 9.79999ZM13.2992 5.59999H11.8992C11.7136 5.59999 11.5355 5.52624 11.4042 5.39496C11.273 5.26369 11.1992 5.08564 11.1992 4.89999V3.49999C11.1992 3.31434 11.273 3.13629 11.4042 3.00501C11.5355 2.87374 11.7136 2.79999 11.8992 2.79999H13.2992C13.4848 2.79999 13.6629 2.87374 13.7941 3.00501C13.9254 3.13629 13.9992 3.31434 13.9992 3.49999V4.89999C13.9992 5.08564 13.9254 5.26369 13.7941 5.39496C13.6629 5.52624 13.4848 5.59999 13.2992 5.59999Z"
                                                                          fill="white" />
                                                                    <path
                                                                        d="M11.2009 0H2.10114C1.32796 0 0.701172 0.626801 0.701172 1.4V12.6C0.701172 13.3732 1.32796 14 2.10114 14H11.2009C11.9741 14 12.6009 13.3732 12.6009 12.6V1.4C12.6009 0.626801 11.9741 0 11.2009 0Z"
                                                                        fill="#A1A1A1" />
                                                                    <path class="whitepath"
                                                                          d="M2.09995 10.5H0.699985C0.514337 10.5 0.336293 10.4263 0.205021 10.295C0.0737482 10.1637 0 9.98565 0 9.8C0 9.61435 0.0737482 9.4363 0.205021 9.30503C0.336293 9.17375 0.514337 9.1 0.699985 9.1H2.09995C2.2856 9.1 2.46365 9.17375 2.59492 9.30503C2.72619 9.4363 2.79994 9.61435 2.79994 9.8C2.79994 9.98565 2.72619 10.1637 2.59492 10.295C2.46365 10.4263 2.2856 10.5 2.09995 10.5ZM6.99985 9.1C6.8142 9.1 6.63616 9.02625 6.50488 8.89497C6.37361 8.7637 6.29986 8.58565 6.29986 8.4V7.7H5.59988C5.41423 7.7 5.23619 7.62625 5.10491 7.49497C4.97364 7.3637 4.89989 7.18565 4.89989 7C4.89989 6.81435 4.97364 6.6363 5.10491 6.50503C5.23619 6.37375 5.41423 6.3 5.59988 6.3H6.29986V5.6C6.29986 5.41435 6.37361 5.2363 6.50488 5.10503C6.63616 4.97375 6.8142 4.9 6.99985 4.9C7.1855 4.9 7.36354 4.97375 7.49481 5.10503C7.62608 5.2363 7.69983 5.41435 7.69983 5.6V6.3H8.39982C8.58547 6.3 8.76351 6.37375 8.89478 6.50503C9.02605 6.6363 9.0998 6.81435 9.0998 7C9.0998 7.18565 9.02605 7.3637 8.89478 7.49497C8.76351 7.62625 8.58547 7.7 8.39982 7.7H7.69983V8.4C7.69983 8.58565 7.62608 8.7637 7.49481 8.89497C7.36354 9.02625 7.1855 9.1 6.99985 9.1ZM2.09995 7.7H0.699985C0.514337 7.7 0.336293 7.62625 0.205021 7.49497C0.0737482 7.3637 0 7.18565 0 7C0 6.81435 0.0737482 6.6363 0.205021 6.50503C0.336293 6.37375 0.514337 6.3 0.699985 6.3H2.09995C2.2856 6.3 2.46365 6.37375 2.59492 6.50503C2.72619 6.6363 2.79994 6.81435 2.79994 7C2.79994 7.18565 2.72619 7.3637 2.59492 7.49497C2.46365 7.62625 2.2856 7.7 2.09995 7.7ZM2.09995 4.9H0.699985C0.514337 4.9 0.336293 4.82625 0.205021 4.69497C0.0737482 4.5637 0 4.38565 0 4.2C0 4.01435 0.0737482 3.8363 0.205021 3.70503C0.336293 3.57375 0.514337 3.5 0.699985 3.5H2.09995C2.2856 3.5 2.46365 3.57375 2.59492 3.70503C2.72619 3.8363 2.79994 4.01435 2.79994 4.2C2.79994 4.38565 2.72619 4.5637 2.59492 4.69497C2.46365 4.82625 2.2856 4.9 2.09995 4.9Z"
                                                                          fill="white" />
                                                                </svg>
                                                            </span>
                                                                <span class="text">Added</span>
                                                            </a>
                                                        @else
                                                            <a href="#" class="btn-card" role="button" data-bs-toggle="modal"
                                                               data-bs-target="#createScheduleModal" data-doctor-id="{{ $doctor->id }}">
                                                            <span class="icon">
                                                                <svg width="14" height="14" viewBox="0 0 14 14"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path class="whitepath"
                                                                          d="M13.2992 9.79999H11.8992C11.7136 9.79999 11.5355 9.72624 11.4042 9.59496C11.273 9.46369 11.1992 9.28564 11.1992 9.09999V7.69999C11.1992 7.51434 11.273 7.33629 11.4042 7.20501C11.5355 7.07374 11.7136 6.99999 11.8992 6.99999H13.2992C13.4848 6.99999 13.6629 7.07374 13.7941 7.20501C13.9254 7.33629 13.9992 7.51434 13.9992 7.69999V9.09999C13.9992 9.28564 13.9254 9.46369 13.7941 9.59496C13.6629 9.72624 13.4848 9.79999 13.2992 9.79999ZM13.2992 5.59999H11.8992C11.7136 5.59999 11.5355 5.52624 11.4042 5.39496C11.273 5.26369 11.1992 5.08564 11.1992 4.89999V3.49999C11.1992 3.31434 11.273 3.13629 11.4042 3.00501C11.5355 2.87374 11.7136 2.79999 11.8992 2.79999H13.2992C13.4848 2.79999 13.6629 2.87374 13.7941 3.00501C13.9254 3.13629 13.9992 3.31434 13.9992 3.49999V4.89999C13.9992 5.08564 13.9254 5.26369 13.7941 5.39496C13.6629 5.52624 13.4848 5.59999 13.2992 5.59999Z"
                                                                          fill="white" />
                                                                    <path
                                                                        d="M11.2009 0H2.10114C1.32796 0 0.701172 0.626801 0.701172 1.4V12.6C0.701172 13.3732 1.32796 14 2.10114 14H11.2009C11.9741 14 12.6009 13.3732 12.6009 12.6V1.4C12.6009 0.626801 11.9741 0 11.2009 0Z"
                                                                        fill="#A1A1A1" />
                                                                    <path class="whitepath"
                                                                          d="M2.09995 10.5H0.699985C0.514337 10.5 0.336293 10.4263 0.205021 10.295C0.0737482 10.1637 0 9.98565 0 9.8C0 9.61435 0.0737482 9.4363 0.205021 9.30503C0.336293 9.17375 0.514337 9.1 0.699985 9.1H2.09995C2.2856 9.1 2.46365 9.17375 2.59492 9.30503C2.72619 9.4363 2.79994 9.61435 2.79994 9.8C2.79994 9.98565 2.72619 10.1637 2.59492 10.295C2.46365 10.4263 2.2856 10.5 2.09995 10.5ZM6.99985 9.1C6.8142 9.1 6.63616 9.02625 6.50488 8.89497C6.37361 8.7637 6.29986 8.58565 6.29986 8.4V7.7H5.59988C5.41423 7.7 5.23619 7.62625 5.10491 7.49497C4.97364 7.3637 4.89989 7.18565 4.89989 7C4.89989 6.81435 4.97364 6.6363 5.10491 6.50503C5.23619 6.37375 5.41423 6.3 5.59988 6.3H6.29986V5.6C6.29986 5.41435 6.37361 5.2363 6.50488 5.10503C6.63616 4.97375 6.8142 4.9 6.99985 4.9C7.1855 4.9 7.36354 4.97375 7.49481 5.10503C7.62608 5.2363 7.69983 5.41435 7.69983 5.6V6.3H8.39982C8.58547 6.3 8.76351 6.37375 8.89478 6.50503C9.02605 6.6363 9.0998 6.81435 9.0998 7C9.0998 7.18565 9.02605 7.3637 8.89478 7.49497C8.76351 7.62625 8.58547 7.7 8.39982 7.7H7.69983V8.4C7.69983 8.58565 7.62608 8.7637 7.49481 8.89497C7.36354 9.02625 7.1855 9.1 6.99985 9.1ZM2.09995 7.7H0.699985C0.514337 7.7 0.336293 7.62625 0.205021 7.49497C0.0737482 7.3637 0 7.18565 0 7C0 6.81435 0.0737482 6.6363 0.205021 6.50503C0.336293 6.37375 0.514337 6.3 0.699985 6.3H2.09995C2.2856 6.3 2.46365 6.37375 2.59492 6.50503C2.72619 6.6363 2.79994 6.81435 2.79994 7C2.79994 7.18565 2.72619 7.3637 2.59492 7.49497C2.46365 7.62625 2.2856 7.7 2.09995 7.7ZM2.09995 4.9H0.699985C0.514337 4.9 0.336293 4.82625 0.205021 4.69497C0.0737482 4.5637 0 4.38565 0 4.2C0 4.01435 0.0737482 3.8363 0.205021 3.70503C0.336293 3.57375 0.514337 3.5 0.699985 3.5H2.09995C2.2856 3.5 2.46365 3.57375 2.59492 3.70503C2.72619 3.8363 2.79994 4.01435 2.79994 4.2C2.79994 4.38565 2.72619 4.5637 2.59492 4.69497C2.46365 4.82625 2.2856 4.9 2.09995 4.9Z"
                                                                          fill="white" />
                                                                </svg>
                                                            </span>
                                                                <span class="text">Add Doctor</span>
                                                            </a>
                                                        @endif


                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                    <div class="col-12 py-5">
                                        <div class="d-flex justify-content-center">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <!-- Previous Page Link -->
                                                    @if ($doctors->onFirstPage())
                                                        <li class="page-item disabled">
                                                            <a href="#" class="btn-previous" aria-label="Previous">
                                                                <span aria-hidden="true">
                                                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="17.5" cy="17.5" r="17.5" fill="white" />
                                                                        <path d="M22 23.2375L16.4372 17.5L22 11.7625L20.2874 10L13 17.5L20.2874 25L22 23.2375Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li class="page-item">
                                                            <a href="{{ $doctors->previousPageUrl() }}" class="btn-previous" aria-label="Previous">
                                                                <span aria-hidden="true">
                                                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="17.5" cy="17.5" r="17.5" fill="white" />
                                                                        <path d="M22 23.2375L16.4372 17.5L22 11.7625L20.2874 10L13 17.5L20.2874 25L22 23.2375Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    @endif

                                                    <ul class="pagination-list">
                                                        @foreach ($doctors->links()->elements as $element)
                                                            @if (is_string($element))
                                                                <!-- Make three dots (...) -->
                                                                <li class="page-item disabled"><a class="page-link">{{ $element }}</a></li>
                                                            @endif

                                                            @if (is_array($element))
                                                                @foreach ($element as $page => $url)
                                                                    @if ($page == $doctors->currentPage())
                                                                        <li class="page-item active">
                                                                            <a class="page-link">{{ $page }}</a>
                                                                        </li>
                                                                    @else
                                                                        <li class="page-item">
                                                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </ul>

                                                    <!-- Next Page Link -->
                                                    @if ($doctors->hasMorePages())
                                                        <li class="page-item">
                                                            <a href="{{ $doctors->nextPageUrl() }}" class="btn-next" aria-label="Next">
                                                                <span aria-hidden="true">
                                                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="17.5" cy="17.5" r="17.5" fill="white" />
                                                                        <path d="M13 11.7625L18.5628 17.5L13 23.2375L14.7126 25L22 17.5L14.7126 10L13 11.7625Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li class="page-item disabled">
                                                            <a href="#" class="btn-next" aria-label="Next">
                                                                <span aria-hidden="true">
                                                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="17.5" cy="17.5" r="17.5" fill="white" />
                                                                        <path d="M13 11.7625L18.5628 17.5L13 23.2375L14.7126 25L22 17.5L14.7126 10L13 11.7625Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- MAIN-SECTION END -->

    <!-- CREATE-SCHEDULE MODAL -->
  <div class="modal fade" id="createScheduleModal" tabindex="-1" aria-labelledby="createScheduleModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Create Schedule</h5>
                </div>
                <form action="{{ route('chamber.doctor.scheduleDate') }}" method=POST class="noteform">
                    @csrf
                    <input type="hidden" name="doctor_id" id="doctor_id">
                    <input type="hidden" name="chamber_id" id="chamber_id" value="{{ auth('chamber')->user()->chamber_id }}">
                    <div class="modal-body">
                        <div class="inputbox">
                          <label for="from" class="inputlabel">
                            From
                          </label>
                          <input type="date" name="add_from" id="from" class="form-control" placeholder="28/11/2023" required>
                        </div>

                        <div class="inputbox mt-3">
                          <label for="to" class="inputlabel">
                            To
                          </label>

                          <input type="date" name="add_to" id="to" class="form-control" placeholder="28/11/2023" required>
                        </div>
                     </div>
                    <div class="modal-footer justify-content-end gap-3">
                      <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-remove">Save</button>
                    </div>
                </form>
            </div>

    </div>
  </div>


@endsection

@push('after-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the modal element
            var createScheduleModal = document.getElementById('createScheduleModal');

            // Add an event listener for when the modal is shown
            createScheduleModal.addEventListener('show.bs.modal', function (event) {
                // Get the button that triggered the modal
                var button = event.relatedTarget;

                // Extract the doctor_id from the data-* attribute
                var doctorId = button.getAttribute('data-doctor-id');

                // Find the hidden input field inside the modal and set its value
                var inputDoctorId = createScheduleModal.querySelector('#doctor_id');
                inputDoctorId.value = doctorId;
            });
        });

    </script>
@endpush
