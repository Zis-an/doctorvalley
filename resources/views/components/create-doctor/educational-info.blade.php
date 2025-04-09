@extends('backoffice.doctor.createUpdateDoctor')
@section('tab-content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="tab-pane fade show active" id="educationalinformation-tab-pane" role="tabpanel" aria-labelledby="educationalinformation-tab" tabindex="0">
        <div class="educationinfo">
            <div class="myprofile-detail">
                <figure class="icon">
                    <!-- SVG Icon -->
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
                        <h3 class="title">Academic Qualification(s)</h3>
                    </div>

                    <div class="details-body" id="education-forms-container">
                        <form action="{{ !empty($educations) ? route('doctor.update.educational', $doctor_id) : route('doctor.store.qualification') }}" method="POST"  class="educationinfoform">
                            @csrf
                            @if(!empty($educations))
                                @method('PUT')
                            @endif

                            <!-- Loop through old input or existing educations -->
                            @php
                                $educations = old('degree_id') ?: $educations ?? [];
                            @endphp

                            @foreach($educations as $i => $education)
                                <div class="form-container-update" id="education-section-{{ $i }}">
                                    <fieldset class="experience-fieldset">
                                        <legend>Educational Information</legend>
                                        <div class="row g-3">
                                            <input type="hidden" name="education_id[{{ $i }}]" value="{{ old('education_id.' . $i, $education->id ?? '') }}">
                                            <input type="hidden" name="doctor_id" value="{{ $doctor_id }}">

                                            <div class="col-md-6">
                                                <div class="inputbox">
                                                    <label for="" class="inputlabel">Degree Title <span>*</span></label>

                                                    <select id="normal-select-degree-{{ $i }}" name="degree_id[{{ $i }}]" class="form-select wide" onchange="toggleMajorCourseField(this, {{ $i }})">
                                                        <option value="" disabled>--Select Degree--</option>
                                                        @foreach ($degrees as $degree)
                                                            <option value="{{ $degree->id }}" data-has-major="{{ $degree->has_major_course }}" {{ old('degree_id.' . $i, $education->degree_id ?? '') == $degree->id ? 'selected' : '' }}>
                                                                {{ $degree->degree_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('degree_id'))
                                                        <p class="error-message">{{ $errors->first('degree_id') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="inputbox">
                                                    <label for="" class="inputlabel">Select Institute <span>*</span></label>
                                                    <select id="" name="institute_id[{{ $i }}]" class="form-select wide">
                                                        <option value="" disabled>--Select Institute--</option>
                                                        @foreach ($institutes as $institute)
                                                            <option value="{{ $institute->id }}" {{ old('institute_id.' . $i, $education->institute_id ?? '') == $institute->id ? 'selected' : '' }}>
                                                                {{ $institute->institute_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('institute_id.' . $i)
                                                    <p class="error-message">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 major-course-container" id="major-course-container-{{ $i }}" style="display: none;">
                                                <div class="inputbox">
                                                    <label for="majorcourse" class="inputlabel">Major Course <span>*</span></label>
                                                    <input type="text" name="major[{{ $i }}]" id="majorcourse-{{ $i }}" class="form-control" placeholder="Dental" autocomplete="off" value="{{ old('major.' . $i, $education->major ?? '') }}">
                                                    @error('major.' . $i)
                                                    <p class="error-message">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="inputbox">
                                                    <label class="inputlabel">From Date <span>*</span></label>
                                                    <input type="date" name="from[{{ $i }}]" class="form-control" value="{{ old('from.' . $i, $education->from ?? '') }}">
                                                    @error('from.' . $i)
                                                    <p class="error-message">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="inputbox">
                                                    <label class="inputlabel">To Date</label>
                                                    <input type="date" name="to[{{ $i }}]" class="form-control" value="{{ old('to.' . $i, $education->to ?? '') }}">
                                                    @error('to.' . $i)
                                                    <p class="error-message">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkfield">
                                                    <input type="hidden" name="current[{{ $i }}]" value="0">
                                                    <input type="checkbox" id="current-education-{{ $i }}" name="current[{{ $i }}]" class="checkinput" hidden value="1" {{ old('current.' . $i, $education->current ?? 0) == 1 ? 'checked' : '' }}>
                                                    <label for="current-education-{{ $i }}" class="checklabel">Currently Studying</label>
                                                    @error('current.' . $i)
                                                    <p class="error-message">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            @endforeach

                            <!-- New Education sections will be appended here dynamically -->
                            <div id="new-education-sections"></div>

                            <!-- Button to add more qualifications -->
                            <div class="col-12">
                                <div class="edubtns d-flex justify-content-center">
                                    <button id="add-education-form" type="button" class="mt-3 d-flex justify-content-center align-items-center z-doc-exp">
                                        ADD MORE QUALIFICATION
                                        <span class="icon"></span>
                                    </button>
                                </div>
                            </div>

                            <!-- Submit button for update/store -->
                            <div class="col-12">
                                <div class="edubtns col-md-6 col-12">
                                    <button type="submit" id="submit-all-forms" class="btn-profile-add border-2 mt-3">{{ !empty($educations) ? 'UPDATE' : 'SAVE' }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- JavaScript for adding dynamic educational qualification forms -->

@push('after-scripts')
<script>
    // Ensure the toggleMajorCourseField is globally defined
    function toggleMajorCourseField(selectElement, index) {
        // Get the selected option
        const selectedOption = selectElement.options[selectElement.selectedIndex];
        console.log(selectedOption);

        // Check if the degree has a major course
        const hasMajorCourse = selectedOption.getAttribute('data-has-major');

        // Get the major course container by index
        const majorCourseContainer = document.getElementById(`major-course-container-${index}`);

        // Show or hide the major course field based on the has_major_course value
        if (majorCourseContainer) {
            const degreeName = selectedOption.text.toLowerCase();
            if (hasMajorCourse == "1" && !(degreeName.includes('mbbs') || degreeName.includes('bds'))) {
                majorCourseContainer.style.display = 'block';  // Show the major course field
            } else {
                majorCourseContainer.style.display = 'none';   // Hide the major course field
            }
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        let educationCount = {{ count(old('degree_id', isset($educations) ? $educations : [])) }};  // Set initial count

        // Initialize NiceSelect for the existing selects on page load
        function initializeNiceSelect() {
            document.querySelectorAll('.form-select.wide').forEach(function(select) {
                NiceSelect.bind(select, { searchable: true });
            });
        }

        // Initialize NiceSelect on page load for existing form elements
        initializeNiceSelect();

        // Initialize the major course toggle and handle "To Date" / "Currently Studying" logic on existing elements
        @foreach ($educations as $i => $education)
        const degreeSelect_{{ $i }} = document.getElementById('normal-select-degree-{{ $i }}');
        if (degreeSelect_{{ $i }}) {
            toggleMajorCourseField(degreeSelect_{{ $i }}, {{ $i }});  // Call the toggle function for each existing degree

            // Attach event listener for degree select field on change
            degreeSelect_{{ $i }}.addEventListener('change', function() {
                toggleMajorCourseField(this, {{ $i }});
            });

            // Handle "To Date" and "Currently Studying" validation
            const currentCheckbox_{{ $i }} = document.getElementById('current-education-{{ $i }}');
            const toDateInput_{{ $i }} = document.getElementById('to-date-{{ $i }}');

            if (currentCheckbox_{{ $i }} && toDateInput_{{ $i }}) {
                handleCurrentAndToDate(currentCheckbox_{{ $i }}, toDateInput_{{ $i }});
            }
        }
        @endforeach

        // Function to add a new education form dynamically
        function addEducationForm() {
            const formContainer = document.getElementById('new-education-sections');

            const newEducationForm = `
            <div class="form-container">
                <fieldset class="experience-fieldset">
                    <legend>Educational Information</legend>
                    <div class="row g-3">
                        <input type="hidden" name="doctor_id" value="{{ $doctor_id }}">

                        <div class="col-md-6">
                            <div class="inputbox">
                                <label for="normal-select-degree-${educationCount}" class="inputlabel">Degree Title <span>*</span></label>
                                <select id="normal-select-degree-${educationCount}" name="degree_id[${educationCount}]" class="form-select wide" onchange="toggleMajorCourseField(this, ${educationCount})">
                                    <option value="" disabled>--Select Degree--</option>
                                    @foreach ($degrees as $degree)
            <option value="{{ $degree->id }}" data-has-major="{{ $degree->has_major_course }}">{{ $degree->degree_name }}</option>
                                    @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="inputbox">
            <label for="normal-select-institute-${educationCount}" class="inputlabel">Select Institute <span>*</span></label>
                                <select id="normal-select-institute-${educationCount}" name="institute_id[${educationCount}]" class="form-select wide">
                                    <option value="" disabled>--Select Institute--</option>
                                    @foreach ($institutes as $institute)
            <option value="{{ $institute->id }}">{{ $institute->institute_name }}</option>
                                    @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-12 major-course-container" id="major-course-container-${educationCount}" style="display: none;">
                            <div class="inputbox">
                                <label for="majorcourse-${educationCount}" class="inputlabel">Major Course <span>*</span></label>
                                <input type="text" name="major[${educationCount}]" id="majorcourse-${educationCount}" class="form-control" placeholder="Dental" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="inputbox">
                                <label class="inputlabel">From Date <span>*</span></label>
                                <input type="date" name="from[${educationCount}]" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="inputbox">
                                <label class="inputlabel">To Date</label>
                                <input type="date" id="to-date-${educationCount}" name="to[${educationCount}]" class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="checkfield">
                                <input type="hidden" name="current[${educationCount}]" value="0">
                                <input type="checkbox" id="current-education-${educationCount}" name="current[${educationCount}]" class="checkinput" hidden value="1">
                                <label for="current-education-${educationCount}" class="checklabel">Currently Studying</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>`;

            // Append new form
            formContainer.insertAdjacentHTML('beforeend', newEducationForm);

            // Attach event listener to the newly added degree select field
            const newDegreeSelect = document.getElementById(`normal-select-degree-${educationCount}`);
            const newCurrentCheckbox = document.getElementById(`current-education-${educationCount}`);
            const newToDateInput = document.getElementById(`to-date-${educationCount}`);

            if (newDegreeSelect) {
                newDegreeSelect.addEventListener('change', function() {
                    toggleMajorCourseField(newDegreeSelect, educationCount);
                });
            }

            // Handle the relationship between "To Date" and "Currently Studying" for the new form
            if (newCurrentCheckbox && newToDateInput) {
                handleCurrentAndToDate(newCurrentCheckbox, newToDateInput);
            }

            // Re-initialize NiceSelect for the new selects
            NiceSelect.bind(newDegreeSelect, { searchable: true });
            const newInstituteSelect = document.getElementById(`normal-select-institute-${educationCount}`);
            NiceSelect.bind(newInstituteSelect, { searchable: true });

            // Increment the education count
            educationCount++;
        }

        // Event listener for adding new qualifications
        document.getElementById('add-education-form').addEventListener('click', addEducationForm);

        // Function to handle "To Date" and "Currently Studying" validation
        function handleCurrentAndToDate(currentCheckbox, toDateInput) {
            if (!currentCheckbox || !toDateInput) return;

            currentCheckbox.addEventListener('change', function() {
                if (currentCheckbox.checked) {
                    toDateInput.disabled = true;
                    toDateInput.value = '';  // Ensure the `to` field is empty if "Currently Studying" is checked
                } else {
                    toDateInput.disabled = false;
                }
            });

            toDateInput.addEventListener('input', function() {
                if (toDateInput.value) {
                    currentCheckbox.disabled = true;
                    currentCheckbox.checked = false;  // Uncheck "Currently Studying" if a "To Date" is provided
                } else {
                    currentCheckbox.disabled = false;
                }
            });
        }
    });
</script>
@endpush



