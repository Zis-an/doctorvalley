
@extends('backoffice.doctor.createUpdateDoctor')

@section('tab-content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif (session('error'))
        <div class="alert alert-error">{{ session('error') }}</div>
    @endif

    <div class="tab-pane fade show active" id="professionalinformation-tab-pane" role="tabpanel" aria-labelledby="professionalinformation-tab" tabindex="0">
        <div class="professionalinfo">
            <div class="myprofile-detail">
                <figure class="icon">
                    <!-- SVG Icon -->
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
                    <div class="details-header">
                        <h3 class="title">PROFESSIONAL EXPERIENCE(S)</h3>
                    </div>

                    <div class="details-body" id="experience-forms-container">
                        <form action="{{ !empty($experience) ? route('doctor.update.professional', $doctor_id) : route('doctor.store.professional') }}" method="POST">
                            @csrf
                            @if(!empty($experience))
                                @method('PUT')
                            @endif

                            <!-- Loop through old input or existing experiences -->
                            @php
                                $experiences = old('organization_name') ?: $experience ?? [];
                            @endphp

                            @foreach($experiences as $i => $ex)
                                <div class="form-container-update" id="experience-section-{{ $i }}">
                                    <fieldset class="experience-fieldset">
                                        <legend>Professional Experience</legend>
                                        <div class="row g-3">
                                            <input type="hidden" name="experience_id[{{ $i }}]" value="{{ old('experience_id.' . $i, $ex->id ?? '') }}">
                                            <input type="hidden" name="doctor_id" value="{{ $doctor_id }}">

                                            <div class="col-md-12">
                                                <div class="inputbox">
                                                    <label class="inputlabel">Institute/Organization Name <span>*</span></label>
                                                    <input type="text" name="organization_name[{{ $i }}]" class="form-control" value="{{ old('organization_name.' . $i, $ex->organization_name ?? '') }}" autocomplete="off">
                                                    @error('organization_name.' . $i)
                                                    <p class="error-message">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="inputbox">
                                                    <label class="inputlabel">Designation <span>*</span></label>
                                                    <input type="text" name="designation[{{ $i }}]" class="form-control" value="{{ old('designation.' . $i, $ex->designation ?? '') }}" autocomplete="off">
                                                    @error('designation.' . $i)
                                                    <p class="error-message">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="inputbox">
                                                    <label class="inputlabel">Department <span>*</span></label>
                                                    <input type="text" name="department[{{ $i }}]" class="form-control" value="{{ old('department.' . $i, $ex->department ?? '') }}" autocomplete="off">
                                                    @error('department.' . $i)
                                                    <p class="error-message">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="inputbox">
                                                    <label class="inputlabel">From Date <span>*</span></label>
                                                    <input type="date" name="from[{{ $i }}]" class="form-control" value="{{ old('from.' . $i, $ex->from ?? '') }}">
                                                    @error('from.' . $i)
                                                    <p class="error-message">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="inputbox">
                                                    <label class="inputlabel">To Date </label>
                                                    <input type="date" name="to[{{ $i }}]" class="form-control" value="{{ old('to.' . $i, $ex->to ?? '') }}">
                                                    @error('to.' . $i)
                                                    <p class="error-message">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkfield">
                                                    <input type="hidden" name="current[{{ $i }}]" value="0">
                                                    <input type="checkbox" id="current-working-{{ $i }}" name="current[{{ $i }}]" value="1" class="checkinput" {{ old('current.' . $i, $ex->current ?? '') == 1 ? 'checked' : '' }} hidden>
                                                    <label for="current-working-{{ $i }}" class="checklabel">Currently Working</label>
                                                    @error('current.' . $i)
                                                    <p class="error-message">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="inputbox">
                                                    <label class="inputlabel">Location <span>*</span></label>
                                                    <input type="text" name="location[{{ $i }}]" class="form-control" value="{{ old('location.' . $i, $ex->location ?? '') }}" autocomplete="off">
                                                    @error('location.' . $i)
                                                    <p class="error-message">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            @endforeach

                            <!-- New Experience sections will be appended here dynamically -->
                            <div id="new-experience-sections"></div>

                            <!-- Button to add more experience -->
                            <div class="col-12">
                                <div class="edubtns d-flex justify-content-center">
                                    <button id="add-experience-form" type="button" class="mt-3 d-flex justify-content-center align-items-center z-doc-exp">
                                        ADD MORE EXPERIENCE
                                        <span class="icon">
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#plus-symble-1)">
                                                <path d="M10.4014 20.6365C15.9248 20.6365 20.4014 16.1599 20.4014 10.6365C20.4014 5.11304 15.9248 0.636475 10.4014 0.636475C4.87793 0.636475 0.401367 5.11304 0.401367 10.6365C0.401367 16.1599 4.87793 20.6365 10.4014 20.6365ZM9.46387 14.074V11.574H6.96387C6.44434 11.574 6.02637 11.156 6.02637 10.6365C6.02637 10.1169 6.44434 9.69897 6.96387 9.69897H9.46387V7.19897C9.46387 6.67944 9.88184 6.26147 10.4014 6.26147C10.9209 6.26147 11.3389 6.67944 11.3389 7.19897V9.69897H13.8389C14.3584 9.69897 14.7764 10.1169 14.7764 10.6365C14.7764 11.156 14.3584 11.574 13.8389 11.574H11.3389V14.074C11.3389 14.5935 10.9209 15.0115 10.4014 15.0115C9.88184 15.0115 9.46387 14.5935 9.46387 14.074Z" fill="#F04130"/>
                                            </g>
                                            <defs>
                                                <clipPath id="plus-symble-1">
                                                    <rect width="20" height="20" fill="white" transform="translate(0.401367 0.636475)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    </button>
                                </div>
                            </div>

                            <!-- Submit button for both store and update -->
                            <div class="col-12">
                                <div class="edubtns col-md-6 col-12">
                                    <button type="submit" id="submit-all-forms" class="btn-profile-add border-2 mt-3">
                                        {{ !empty($experience) ? 'UPDATE' : 'SAVE' }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- JavaScript for adding dynamic professional information forms -->
@push('after-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formContainer = document.getElementById('new-experience-sections');
            const addButton = document.getElementById('add-experience-form');
            let experienceCount = {{ count(old('organization_name', $experience ?? [])) }};  // Set initial count based on existing experience or old input

            /**
             * Section 1: Add More Experience Functionality
             * This section dynamically adds new professional experience forms when the "Add More Experience" button is clicked.
             */
            function addExperienceForm() {
                const newExperienceForm = `
                <div class="form-container">
                    <fieldset class="experience-fieldset">
                        <legend>Professional Experience</legend>
                        <div class="row g-3">
                            <input type="hidden" name="doctor_id" value="{{ $doctor_id }}">

                            <div class="col-md-12">
                                <div class="inputbox">
                                    <label class="inputlabel">Institute/Organization Name <span>*</span></label>
                                    <input type="text" name="organization_name[${experienceCount}]" class="form-control" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputbox">
                                    <label class="inputlabel">Designation <span>*</span></label>
                                    <input type="text" name="designation[${experienceCount}]" class="form-control" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputbox">
                                    <label class="inputlabel">Department <span>*</span></label>
                                    <input type="text" name="department[${experienceCount}]" class="form-control" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputbox">
                                    <label class="inputlabel">From Date <span>*</span></label>
                                    <input type="date" name="from[${experienceCount}]" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputbox">
                                    <label class="inputlabel">To Date </label>
                                    <input type="date" id="to-date-${experienceCount}" name="to[${experienceCount}]" class="form-control">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="checkfield">
                                    <input type="hidden" name="current[${experienceCount}]" value="0">
                                    <input type="checkbox" id="current-working-${experienceCount}" name="current[${experienceCount}]" value="1" class="checkinput" hidden>
                                    <label for="current-working-${experienceCount}" class="checklabel">Currently Working</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="inputbox">
                                    <label class="inputlabel">Location  <span>*</span></label>
                                    <input type="text" name="location[${experienceCount}]" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>`;

                // Insert the new form
                formContainer.insertAdjacentHTML('beforeend', newExperienceForm);

                // Handle the relationship between "To Date" and "Currently Working"
                const currentCheckbox = document.getElementById(`current-working-${experienceCount}`);
                const toDateInput = document.getElementById(`to-date-${experienceCount}`);
                handleCurrentAndToDate(currentCheckbox, toDateInput);

                experienceCount++;
            }

            // Add event listener to the "Add More Experience" button
            addButton.addEventListener('click', addExperienceForm);

            /**
             * Section 2: Handle "To Date" and "Currently Working" Validation
             * This section ensures that if the user selects a "To Date", the "Currently Working" checkbox is disabled and vice versa.
             */
            function handleCurrentAndToDate(currentCheckbox, toDateInput) {
                currentCheckbox.addEventListener('change', function() {
                    if (currentCheckbox.checked) {
                        toDateInput.disabled = true;
                        toDateInput.value = '';  // Clear "To Date" if "Currently Working" is checked
                    } else {
                        toDateInput.disabled = false;
                    }
                });

                toDateInput.addEventListener('input', function() {
                    if (toDateInput.value) {
                        currentCheckbox.disabled = true;
                        currentCheckbox.checked = false;
                    } else {
                        currentCheckbox.disabled = false;
                    }
                });
            }

            // Initialize the current/to-date relationship for existing experience sections
            @foreach ($experiences as $i => $ex)
            const currentCheckbox_{{ $i }} = document.getElementById('current-working-{{ $i }}');
            const toDateInput_{{ $i }} = document.getElementById('to-date-{{ $i }}');
            handleCurrentAndToDate(currentCheckbox_{{ $i }}, toDateInput_{{ $i }});
            @endforeach
        });
    </script>
@endpush













