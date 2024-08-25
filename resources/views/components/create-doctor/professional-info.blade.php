@extends('backoffice.doctor.createUpdateDoctor')
@section('tab-content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="tab-pane fade show active" id="professionalinformation-tab-pane" role="tabpanel"
        aria-labelledby="professionalinformation-tab" tabindex="0">
        <div class="professionalinfo">
            <div class="myprofile-detail">
                <figure class="icon">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="30" cy="30" r="30" fill="#F04130" fill-opacity="0.2" />
                        <g clip-path="url(#usericon-1)">
                            <path
                                d="M37.0625 19.5625C37.0625 23.1855 34.123 26.125 30.5 26.125C26.877 26.125 23.9375 23.1855 23.9375 19.5625C23.9375 15.9395 26.877 13 30.5 13C34.123 13 37.0625 15.9395 37.0625 19.5625ZM29.4062 29.9531V48L26.0977 46.3457C24.6689 45.6348 23.124 45.1836 21.5312 45.0264L14.9688 44.3701C13.8545 44.2539 13 43.3174 13 42.1895V28.3125C13 27.1025 13.9775 26.125 15.1875 26.125H17.2588C21.6064 26.125 25.8447 27.4648 29.4062 29.9531ZM31.5938 48V29.9531C35.1553 27.4648 39.3936 26.125 43.7412 26.125H45.8125C47.0225 26.125 48 27.1025 48 28.3125V42.1895C48 43.3105 47.1455 44.2539 46.0312 44.3633L39.4688 45.0195C37.8828 45.1768 36.3311 45.6279 34.9023 46.3389L31.5938 48Z"
                                fill="#F04130" />
                        </g>
                        <defs>
                            <clipPath id="usericon-1">
                                <rect width="35" height="35" fill="white" transform="translate(13 13)" />
                            </clipPath>
                        </defs>
                    </svg>
                </figure>

                <div class="detail">
                    <h2 class="profile-title">PROFESSIONAL INFORMATION</h2>
                    <p class="profiletext">
                        Update your professional information here.
                        This will help us to show your profile with proper information.
                    </p>
                </div>
            </div>

            <div class="professionalinfo-info">
                <div class="details">
                    <div class="treatment-summary">
                        <span class="summarytitle">Treatment Summary</span>
                        <p class="summarytext">
                            A Treatment Summary is a document produced by the doctor or
                            Specialist Nurse at the end of initial treatment for cancer.
                            It is shared with the patient and their GP.
                            The Treatment Summary: describes the treatment that that person has received.
                        </p>
                    </div>

                    <div class="details-header">
                        <h3 class="title">PROFESSIONAL EXPERIENCE(S)</h3>
                    </div>

                    <div class="details-body">
                        <!-- EMPTY-EXPERIENCE -->
                        <div class="emptyeducation">
                            <figure class="icon">
                                <svg width="104" height="104" viewBox="0 0 104 104" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M37.375 9.75H66.625C67.5188 9.75 68.25 10.4812 68.25 11.375V19.5H35.75V11.375C35.75 10.4812 36.4813 9.75 37.375 9.75ZM26 11.375V19.5H13C5.82969 19.5 0 25.3297 0 32.5V84.5C0 91.6703 5.82969 97.5 13 97.5H91C98.1703 97.5 104 91.6703 104 84.5V32.5C104 25.3297 98.1703 19.5 91 19.5H78V11.375C78 5.09844 72.9016 0 66.625 0H37.375C31.0984 0 26 5.09844 26 11.375ZM45.5 42.25C45.5 40.4625 46.9625 39 48.75 39H55.25C57.0375 39 58.5 40.4625 58.5 42.25V52H68.25C70.0375 52 71.5 53.4625 71.5 55.25V61.75C71.5 63.5375 70.0375 65 68.25 65H58.5V74.75C58.5 76.5375 57.0375 78 55.25 78H48.75C46.9625 78 45.5 76.5375 45.5 74.75V65H35.75C33.9625 65 32.5 63.5375 32.5 61.75V55.25C32.5 53.4625 33.9625 52 35.75 52H45.5V42.25Z"
                                        fill="#F04130" />
                                </svg>
                            </figure>

                            <div class="info">
                                <p>
                                    Currently no data exists! Please click on the following
                                    button to add your employment information.
                                </p>
                            </div>
                        </div>

                        <!-- ADD-EXPERIENCE -->
                        <div id="form-container">
                            <fieldset class="experience-fieldset">
                                <legend>Professional Experience</legend>
                                {{-- <form action="{{ route('backoffice.doctor.store.professional', $_GET['doctor_id'] ?? 0) }}" method="POST"
                                    class="educationinfoform mt-3" id="experienceform" enctype="multipart/form-data"> --}}
                                <form action="{{ route('backoffice.doctor.store.professional') }}" method="POST"
                                    class="educationinfoform mt-3" id="experienceform" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">
                                        <!-- Doctor ID -->
                                        {{-- <input type="hidden" id="doctor_id" value="{{ $_GET['doctor_id'] ?? 0  }}" name="doctor_id"> --}}
                                        <input type="hidden" id="doctor_id" value="{{ $_GET['doctor_id'] }}" name="doctor_id">

                                        <div class="col-md-6">
                                            <div class="inputbox">
                                                <label for="organization-name" class="inputlabel">
                                                    Institute/Organization Name <span>*</span>
                                                </label>
                                                <input type="text" name="organization_name[]" class="form-control"
                                                    placeholder="Dhaka Medical College" autocomplete="off">
                                                @if ($errors->has('organization_name.*'))
                                                    <p class="error-message">{{ $errors->first('organization_name.*') }}</p>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="inputbox">
                                                <label for="designation" class="inputlabel">
                                                    Designation <span>*</span>
                                                </label>
                                                <input type="text" name="designation[]" class="form-control"
                                                    placeholder="Dhaka Medical College" autocomplete="off">
                                                @if ($errors->has('designation.*'))
                                                    <p class="error-message">{{ $errors->first('designation.*') }}</p>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="inputbox">
                                                <label for="starting-calendar" class="inputlabel">
                                                    From Date <span>*</span>
                                                </label>
                                                <input type="date" name="from[]" class="form-control"
                                                    placeholder="01/01/2016" autocomplete="off">
                                                @if ($errors->has('from.*'))
                                                    <p class="error-message">{{ $errors->first('from.*') }}</p>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="inputbox">
                                                <label for="ending-calendar" class="inputlabel">
                                                    To Date <span>*</span>
                                                </label>
                                                <input type="date" name="to[]" class="form-control"
                                                    placeholder="31/12/2020" autocomplete="off">
                                                @if ($errors->has('to.*'))
                                                    <p class="error-message">{{ $errors->first('to.*') }}</p>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="checkfield">
                                                <!-- Hidden input with default value of 0 -->
                                                <input type="hidden" name="current[]" value="0">
                                                <!-- Checkbox input -->
                                                <input type="checkbox" id="current-working" name="current[]" value="1" class="checkinput" autocomplete="off" hidden>
                                                <label for="current-working" class="checklabel">
                                                    Currently Working
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="inputbox">
                                                <label for="institutelocation" class="inputlabel">
                                                    Institute/Organization Location
                                                </label>
                                                <input type="text" name="location[]" class="form-control"
                                                    placeholder="Sherpur Sadar, Sherpur" autocomplete="off">
                                                @if ($errors->has('location.*'))
                                                    <p class="error-message">{{ $errors->first('location.*') }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </fieldset>
                        </div>
                        <!-- Button to add more forms -->
                        <div class="col-12">
                            <div class="edubtns d-flex justify-content-center">
                                <button id="add-experience-form"
                                    class="mt-3 d-flex justify-content-center align-items-center z-doc-exp">
                                    ADD MORE EXPERIENCE
                                    <span class="icon">
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#plus-symble-1)">
                                                <path
                                                    d="M10.4014 20.6365C15.9248 20.6365 20.4014 16.1599 20.4014 10.6365C20.4014 5.11304 15.9248 0.636475 10.4014 0.636475C4.87793 0.636475 0.401367 5.11304 0.401367 10.6365C0.401367 16.1599 4.87793 20.6365 10.4014 20.6365ZM9.46387 14.074V11.574H6.96387C6.44434 11.574 6.02637 11.156 6.02637 10.6365C6.02637 10.1169 6.44434 9.69897 6.96387 9.69897H9.46387V7.19897C9.46387 6.67944 9.88184 6.26147 10.4014 6.26147C10.9209 6.26147 11.3389 6.67944 11.3389 7.19897V9.69897H13.8389C14.3584 9.69897 14.7764 10.1169 14.7764 10.6365C14.7764 11.156 14.3584 11.574 13.8389 11.574H11.3389V14.074C11.3389 14.5935 10.9209 15.0115 10.4014 15.0115C9.88184 15.0115 9.46387 14.5935 9.46387 14.074Z"
                                                    fill="#F04130" />
                                            </g>
                                            <defs>
                                                <clipPath id="plus-symble-1">
                                                    <rect width="20" height="20" fill="white"
                                                        transform="translate(0.401367 0.636475)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <!-- Single ADD button to submit all forms -->
                        <div class="col-12">
                            <div class="edubtns col-md-6 col-12">
                                <button type="submit" id="submit-all-forms" class="btn-profile-add border-2 mt-3">SAVE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
