@extends('backoffice.doctor.createUpdateDoctor')
@section('tab-content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="tab-pane fade show active" id="educationalinformation-tab-pane" role="tabpanel"
        aria-labelledby="educationalinformation-tab" tabindex="0">
        <div class="educationinfo">
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
                    <h2 class="profile-title">EDUCATIONAL INFORMATION</h2>
                    <p class="profiletext">
                        Update your educational information here.
                        This will help us to show your profile with proper information.
                    </p>
                </div>
            </div>

            <div class="educationinfo-info">
                <div class="details">
                    <div class="details-header">
                        <h3 class="title">Academic Qualifination(s)</h3>
                    </div>

                    <div class="details-body">
                        <!-- EMPTY-EDUCATION -->
                        <div class="emptyeducation">
                            <figure class="icon">
                                <svg width="130" height="104" viewBox="0 0 130 104" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#graduate-cap-1)">
                                        <path
                                            d="M65.0002 6.5C63.3549 6.5 61.7299 6.78437 60.1861 7.33281L3.20957 27.9094C1.27988 28.6203 0.000196867 30.4484 0.000196867 32.5C0.000196867 34.5516 1.27988 36.3797 3.20957 37.0906L14.9705 41.3359C11.6393 46.5766 9.7502 52.7719 9.7502 59.2922V65C9.7502 70.7688 7.55645 76.7203 5.22051 81.4125C3.9002 84.0531 2.39707 86.6531 0.650197 89.05C0.000196874 89.9234 -0.182616 91.0609 0.183009 92.0969C0.548634 93.1328 1.40176 93.9047 2.45801 94.1688L15.458 97.4188C16.3111 97.6422 17.2252 97.4797 17.9768 97.0125C18.7283 96.5453 19.2564 95.7734 19.4189 94.9C21.1658 86.2063 20.2924 78.4062 18.9924 72.8203C18.3424 69.9359 17.4689 66.9906 16.2502 64.2891V59.2922C16.2502 53.1578 18.3221 47.3687 21.9174 42.7375C24.5377 39.5891 27.9299 37.05 31.9111 35.4859L63.8018 22.9531C65.4674 22.3031 67.3564 23.1156 68.0064 24.7812C68.6564 26.4469 67.8439 28.3359 66.1783 28.9859L34.2877 41.5187C31.7689 42.5141 29.5549 44.0375 27.7471 45.9062L60.1658 57.6063C61.7096 58.1547 63.3346 58.4391 64.9799 58.4391C66.6252 58.4391 68.2502 58.1547 69.7939 57.6063L126.791 37.0906C128.721 36.4 130 34.5516 130 32.5C130 30.4484 128.721 28.6203 126.791 27.9094L69.8143 7.33281C68.2705 6.78437 66.6455 6.5 65.0002 6.5ZM26.0002 82.875C26.0002 90.0453 43.4689 97.5 65.0002 97.5C86.5314 97.5 104 90.0453 104 82.875L100.892 53.3406L72.008 63.7812C69.7533 64.5938 67.3768 65 65.0002 65C62.6236 65 60.2268 64.5938 57.9924 63.7812L29.108 53.3406L26.0002 82.875Z"
                                            fill="#F04130" />
                                    </g>
                                    <defs>
                                        <clipPath id="graduate-cap-1">
                                            <rect width="130" height="104" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </figure>

                            <div class="info">
                                <p>
                                    Currently no data exists! Please click on the following button to add your
                                    EDUCATIONAL information.
                                </p>
                            </div>
                        </div>

                        <!-- ADD-EDUCATION -->
                        <div id="education-form-container">
                            <fieldset class="experience-fieldset">
                                <legend>Educational Information</legend>
                                <form action="{{ route('backoffice.doctor.store.qualification') }}" method="POST"
                                    class="educationinfoform mt-5" id="educationform" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">
                                        <!-- Doctor ID -->
                                        <input type="hidden" id="personal-info-id" value="{{ isset($_GET['doctor_id']) ? $_GET['doctor_id'] : 0 }}" name="doctor_id">
                                        <div class="col-md-6">
                                            <div class="inputbox">
                                                {{-- <label for="normal-select-1" class="inputlabel"> --}}
                                                <label for="dropdown-select-1" class="inputlabel">
                                                    Degree Title <span>*</span>
                                                </label>
                                                {{-- <select id="normal-select-1" name="degree_id[]" class="wide"
                                                    autocomplete="off"> --}}

                                                <select id="dropdown-select-1" name="degree_id[]" class="wide">
                                                    @foreach ($degrees as $degree)
                                                        <option value="{{ $degree }}">{{ $degree }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('degree_id.*'))
                                                    <p class="error-message">{{ $errors->first('degree_id.*') }}</p>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="inputbox">
                                                {{-- <label for="selectinstitute" class="inputlabel"> --}}
                                                <label for="dropdown-select-2" class="inputlabel">
                                                    Select Institute <span>*</span>
                                                </label>
                                                {{-- <select id="selectinstitute" name="institute_id[]" class="wide"
                                                    autocomplete="off"> --}}
                                                <select id="dropdown-select-2" name="institute_id[]" class="wide" autocomplete="off">
                                                    @foreach ($institutes as $institute)
                                                        <option value="{{ $institute->id }}">{{ $institute->institute_name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('institute_id.*'))
                                                    <p class="error-message">{{ $errors->first('institute_id.*') }}</p>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="inputbox">
                                                <label for="majorcourse" class="inputlabel">
                                                    Major Course <span>*</span>
                                                </label>
                                                <input type="text" name="major[]" id="majorcourse"
                                                    class="form-control" placeholder="Dental" autocomplete="off">
                                                @if ($errors->has('major.*'))
                                                    <p class="error-message">{{ $errors->first('major.*') }}</p>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="inputbox">
                                                <label for="institutename" class="inputlabel">
                                                    Institution Name <span>*</span>
                                                </label>
                                                <input type="text" name="institute_name[]" id="institutename"
                                                    class="form-control" placeholder="Dental" autocomplete="off">
                                                <p class="error-message d-none">This field is required</p>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="inputbox">
                                                <label for="starting-calendar" class="inputlabel">
                                                    From Date <span>*</span>
                                                </label>
                                                <input type="date" name="from[]" class="form-control"
                                                    placeholder="01/01/2016" id="starting-calendar" autocomplete="off">
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
                                                    placeholder="31/12/2020" id="ending-calendar" autocomplete="off">
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
                                                <input type="checkbox" id="current-studying" name="current[]"
                                                    value="1" class="checkinput" autocomplete="off" hidden>
                                                <label for="current-studying" class="checklabel">
                                                    Currently Studying
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </fieldset>

                        </div>
                        <!-- Button to add more forms -->
                        <div class="col-12">
                            <div class="edubtns d-flex justify-content-center">
                                <button id="add-education-form"
                                    class="mt-3 d-flex justify-content-center align-items-center z-doc-exp">
                                    ADD MORE QUALIFICATION
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
                                <button type="submit" id="submit-education-forms"
                                    class="btn-profile-add border-2 mt-3">SAVE</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
