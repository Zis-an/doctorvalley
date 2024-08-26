@extends('layouts.backend')
@push('after-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select/nice-select2.css') }}">
@endpush
@section('content')
    <!-- MY-PROFILE SECTION START -->
    <main class="myprofile" id="main-section">
        <ul class="nav nav-tabs" id="profileTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->is('profile/personal') || request()->is('edit/personal/*') ? 'active' : '' }}"
                    href="{{ route('backoffice.doctor.profile.personal') }}"
                    @if (request()->is('edit/*')) class="disabled" @endif>Personal Information</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->is('profile/professional') || request()->is('edit/professional/*') ? 'active' : '' }}"
                    href="{{ route('backoffice.doctor.profile.professional') }}"
                    @if (request()->is('edit/*')) class="disabled" @endif>Professional Information</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->is('profile/educational') || request()->is('edit/educational/*') ? 'active' : '' }}"
                    href="{{ route('backoffice.doctor.profile.educational') }}"
                    @if (request()->is('edit/*')) class="disabled" @endif>Educational Information</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->is('profile/image') || request()->is('edit/image/*') ? 'active' : '' }}"
                    href="{{ route('backoffice.doctor.profile.image') }}"
                    @if (request()->is('edit/*')) class="disabled" @endif>Profile Image</a>
            </li>
        </ul>

        <div class="tab-content" id="profileTabContent">
            <!-- The content from the routes will be loaded here -->
            @yield('tab-content')
        </div>
    </main>
    <!-- MY-PROFILE SECTION END -->
@endsection
@push('after-scripts')
    {{-- <script src="{{ asset('assets/js/fileupload/uploadprofile.js') }}"></script> --}}
    <script src="{{ asset('assets/js/tag-generator/tag-generator.js') }}"></script>
    <script src="{{ asset('assets/js/showhide/showhide.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select/nice-select2.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select/doctorselect.js') }}"></script>

    <!-- js to disable tabs -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (window.location.href.includes('/edit/')) {
                // Find all nav-link elements
                let navLinks = document.querySelectorAll('#profileTab .nav-link');

                // Disable all tabs except the active one
                navLinks.forEach(function(link) {
                    if (!link.classList.contains('active')) {
                        link.classList.add('disabled');
                        link.style.pointerEvents = 'none'; // Optional: Disable clicking
                    }
                });
            }
        });
    </script>

    <!-- professional-info's creation script  -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formContainer = document.getElementById('form-container');
            const addButton = document.getElementById('add-experience-form');
            const submitEdButton = document.getElementById('submit-all-forms');

            if (formContainer && addButton && submitEdButton) {
                let formCounter = 1;
                let checkboxCounter = 1;

                function assignUniqueId(form) {
                    // Assign a unique ID to the form
                    const uniqueFormId = `experience-form-${formCounter}`;
                    form.id = uniqueFormId;
                    formCounter++;
                    // Handle checkboxes within the form
                    const checkboxes = form.querySelectorAll('input[type="checkbox"]');
                    checkboxes.forEach((checkbox) => {
                        const label = form.querySelector(`label[for="${checkbox.id}"]`);
                        if (label) {
                            // Generate a unique ID for the checkbox
                            const uniqueCheckboxId = `current-working-${checkboxCounter}`;
                            checkbox.id = uniqueCheckboxId;
                            // Update the label's 'for' attribute to match the new checkbox ID
                            label.setAttribute('for', uniqueCheckboxId);
                            // Increment the checkboxCounter
                            checkboxCounter++;
                        }
                        // Add event listener to handle checkbox state
                        checkbox.addEventListener('change', function() {
                            if (this.checked) {
                                this.previousElementSibling.disabled =
                                    true; // Disable hidden input (value=0) when checked
                            } else {
                                this.previousElementSibling.disabled =
                                    false; // Enable hidden input when unchecked
                            }
                        });
                    });
                }

                // Assign a unique ID to the default form
                const defaultForm = formContainer.querySelector('form');
                if (defaultForm) {
                    assignUniqueId(defaultForm);
                }

                // Add Event Listener to Add Experience Button
                addButton.addEventListener('click', function() {
                    const newFieldset = formContainer.querySelector('fieldset').cloneNode(true);
                    const newForm = newFieldset.querySelector('form');
                    newForm.reset();
                    assignUniqueId(newForm);
                    formContainer.appendChild(newFieldset);
                });

                // Submit button's functionality
                submitEdButton.addEventListener('click', function(event) {
                    event.preventDefault();
                    const forms = formContainer.querySelectorAll('form');
                    const mainForm = document.createElement('form');
                    mainForm.method = 'POST';
                    mainForm.action =
                        '{{ route('backoffice.doctor.store.professional') }}'; // Update with your route
                    document.body.appendChild(mainForm);
                    forms.forEach((form) => {
                        const formElements = form.querySelectorAll('input, select, textarea');
                        formElements.forEach((element) => {
                            const clonedElement = element.cloneNode(true);
                            mainForm.appendChild(clonedElement);
                        });
                    });
                    mainForm.submit();
                });
            }
        });
    </script>

    <!-- educational-info's creation script  -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formContainer = document.getElementById('education-form-container');
            const addButton = document.getElementById('add-education-form');
            const submitEdButton = document.getElementById('submit-education-forms');

            if (formContainer && addButton && submitEdButton) {
                let formCounter = 1;
                let checkboxCounter = 1;
                let dropDownCounter = 1;

                function assignUniqueId(form) {
                    // Assign a unique ID to the form
                    const uniqueFormId = `education-form-${formCounter}`;
                    form.id = uniqueFormId;
                    formCounter++;
                    // Handle checkboxes within the form
                    const checkboxes = form.querySelectorAll('input[type="checkbox"]');
                    checkboxes.forEach((checkbox) => {
                        const label = form.querySelector(`label[for="${checkbox.id}"]`);
                        if (label) {
                            // Generate a unique ID for the checkbox
                            const uniqueCheckboxId = `current-studying-${checkboxCounter}`;
                            checkbox.id = uniqueCheckboxId;
                            // Update the label's 'for' attribute to match the new checkbox ID
                            label.setAttribute('for', uniqueCheckboxId);
                            // Increment the checkboxCounter
                            checkboxCounter++;
                        }
                        // Add event listener to handle checkbox state
                        checkbox.addEventListener('change', function() {
                            if (this.checked) {
                                this.previousElementSibling.disabled =
                                    true; // Disable hidden input (value=0) when checked
                            } else {
                                this.previousElementSibling.disabled =
                                    false; // Enable hidden input when unchecked
                            }
                        });
                    });

                    // Dropdown
                    const dropdowns = form.querySelectorAll('select');
                    dropdowns.forEach((dropdown, index) => {
                        const label = form.querySelector(`label[for="${dropdown.id}"]`);
                        if (label) {
                            // Generate a unique ID for the dropdown
                            const uniqueDropdownId = `degree-select-${formCounter}-${index + 1}`;
                            dropdown.id = uniqueDropdownId;
                            // Update the label's 'for' attribute to match the new dropdown ID
                            label.setAttribute('for', uniqueDropdownId);
                        }
                    });
                }

                // Assign a unique ID to the default form
                const defaultForm = formContainer.querySelector('form');
                if (defaultForm) {
                    assignUniqueId(defaultForm);
                }

                // Add Event Listener to Add Experience Button
                addButton.addEventListener('click', function() {
                    const newFieldset = formContainer.querySelector('fieldset').cloneNode(true);
                    const newForm = newFieldset.querySelector('form');
                    newForm.reset();
                    assignUniqueId(newForm);
                    formContainer.appendChild(newFieldset);
                });

                // Submit button's functionality
                submitEdButton.addEventListener('click', function(event) {
                    event.preventDefault();
                    const forms = formContainer.querySelectorAll('form');
                    const mainForm = document.createElement('form');
                    mainForm.method = 'POST';
                    mainForm.action =
                        '{{ route('backoffice.doctor.store.qualification') }}'; // Update with your route
                    document.body.appendChild(mainForm);
                    forms.forEach((form) => {
                        const formElements = form.querySelectorAll('input, select, textarea');
                        formElements.forEach((element) => {
                            const clonedElement = element.cloneNode(true);
                            // Ensure that the name attribute is correctly handled
                            if (element.tagName === 'SELECT') {
                                // Handle dropdown values
                                clonedElement.querySelectorAll('option').forEach(option => {
                                    option.selected = element.querySelector(
                                            `option[value="${option.value}"]`)
                                        .selected;
                                });
                            }
                            mainForm.appendChild(clonedElement);
                        });
                    });
                    mainForm.submit();
                });
            }
        });
    </script>

    <!-- profile-image's creation script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const profileImageInput = document.getElementById('profileImage');
            const uploadedImage = document.getElementById('uploadedImage');
            const form = document.getElementById('profileImageForm');
            const updateImageButton = document.getElementById('updateImageButton');

            if (profileImageInput && uploadedImage && form && updateImageButton) {
                profileImageInput.addEventListener('change', function(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            uploadedImage.src = e.target.result;
                        }
                        reader.readAsDataURL(file);
                    }
                });

                updateImageButton.addEventListener('click', function() {
                    form.submit();
                });
            } else {
            }
        });
    </script>

@endpush
