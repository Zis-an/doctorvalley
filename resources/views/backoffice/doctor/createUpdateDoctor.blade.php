@extends('layouts.backend')
@section('content')
    <!-- MY-PROFILE SECTION START -->
    <main class="myprofile" id="main-section">
        <ul class="nav nav-tabs" id="profileTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="personalinformation-tab" data-bs-toggle="tab"
                    data-bs-target="#personalinformation-tab-pane" type="button" role="tab"
                    aria-controls="personalinformation-tab-pane" aria-selected="true">
                    Personal Information
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="professionalinformation-tab" data-bs-toggle="tab"
                    data-bs-target="#professionalinformation-tab-pane" type="button" role="tab"
                    aria-controls="professionalinformation-tab-pane" aria-selected="false">
                    Professional Information
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="educationalinformation-tab" data-bs-toggle="tab"
                    data-bs-target="#educationalinformation-tab-pane" type="button" role="tab"
                    aria-controls="educationalinformation-tab-pane" aria-selected="false">
                    Educational Information
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="userprofileimage-tab" data-bs-toggle="tab"
                    data-bs-target="#userprofileimage-tab-pane" type="button" role="tab"
                    aria-controls="userprofileimage-tab-pane" aria-selected="false">
                    Profile Image
                </button>
            </li>
        </ul>

        <div class="tab-content" id="profileTabContent">

            <!-- PERSONAL-INFORMATION -->
            @include('components.create-doctor.personal-info')

            <!-- PROFESSIONAL-INFORMATION -->
            @include('components.create-doctor.professional-info')

            <!-- EDUCATIONAL-IMFORMATION -->
            @include('components.create-doctor.educational-info')

            <!-- PROFILE-IMAGE -->
            @include('components.create-doctor.profile-image')

        </div>
    </main>
    <!-- MY-PROFILE SECTION END -->
@endsection
