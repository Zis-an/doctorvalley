@extends('layouts.backend')

@push('after-styles')
    <style>
        .error-message {
            color: red;
            margin-top: 2px;

        }
    </style>
@endpush
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="mainsection" id="main-section">
        <section class="chambersection">
            <div class="container">
                <div class="chambersection-details">
                    <div class="chambersection-header">
                        <h1 class="title">DOCTOR SCHEDULE</h1>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif (session('error'))
                        <div class="alert alert-error">{{ session('error') }}</div>
                    @endif

                    <div class="chambersection-body">
                        <div class="createschedule">
                            <form action="{{ route('chamber.schedule.storeOrUpdate') }}" method="POST">
                                @csrf
                                <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">

                                <div class="row g-4">
                                    <div class="col-lg-9 col-md-8 col-12">
                                        <div class="detail">
                                            <h4 class="name text-capitalize">
                                                Schedule of <span>{{ $doctor->name ?? '' }}</span>
                                            </h4>
                                            <p class="text">
                                                Create/Update the schedule of the doctor.
                                                You can set a special note by clicking special note button
                                                if doctor not available or any specific reason.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-12">
                                        <figure class="thumbnail">
                                            <img src="{{ !empty($doctor->photo) ? asset($doctor->photo) : '../assets/images/avatar/profile.svg' }}" alt="doctor-dp">
                                        </figure>
                                    </div>

                                    <div class="col-lg-9 col-md-8 col-12">
                                        <table class="table table-responsive" aria-describedby="table">
                                            <thead>
                                            <tr class="tablerow">
                                                <th>
                                                    <div class="checkfield">
                                                        <input type="checkbox" class="checkinput" id="everyday" autocomplete="off" hidden
                                                            {{ count($scheduleDays) == count($schedules->pluck('schedule_day')->toArray()) ? 'checked' : '' }}>
                                                        <label for="everyday" class="checklabel fw-bold">
                                                            Everyday
                                                        </label>
                                                    </div>
                                                </th>
                                                <th class="text-center">From</th>
                                                <th class="text-center">To</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($scheduleDays as $scheduleDay)
                                                <tr class="tablerow">
                                                    <td>
                                                        <div class="checkfield">
                                                            <input type="checkbox" class="checkinput schedule-day-checkbox" id="{{ $scheduleDay }}" autocomplete="off" hidden name="schedule_day[]" value="{{ $scheduleDay }}"
                                                                {{ in_array($scheduleDay, old('schedule_day', $schedules->pluck('schedule_day')->toArray())) ? 'checked' : '' }}>
                                                            <label for="{{ $scheduleDay }}" class="checklabel fw-bold text-capitalize">
                                                                {{ $scheduleDay }}
                                                            </label>
                                                        </div>
                                                        @if ($errors->has('schedule_day'))
                                                            <p class="error-message">{{ $errors->first('schedule_day') }}</p>
                                                        @endif
                                                    </td>

                                                    <td class="text-center">
                                                        <input type="time" name="start_time[{{ $scheduleDay }}]" class="form-control schedulefield" value="{{ old('start_time.' . $scheduleDay, optional($schedules->where('schedule_day', $scheduleDay)->first())->start_from) }}">
                                                        @if ($errors->has("start_time.{$scheduleDay}"))
                                                            <p class="error-message">{{ $errors->first("start_time.{$scheduleDay}") }}</p>
                                                        @endif
                                                    </td>

                                                    <td class="text-center">
                                                        <input type="time" name="end_time[{{ $scheduleDay }}]" class="form-control schedulefield" value="{{ old('end_time.' . $scheduleDay, optional($schedules->where('schedule_day', $scheduleDay)->first())->end_from) }}">
                                                        @if ($errors->has("end_time.{$scheduleDay}"))
                                                            <p class="error-message">{{ $errors->first("end_time.{$scheduleDay}") }}</p>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-12">
                                        <div class="schedulesbutton">
                                            <button type="button" class="btn-special" data-bs-toggle="modal" data-bs-target="#specialNoteModal">SPECIAL NOTE</button>
                                            <button type="submit" class="btn-save">SAVE</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- MAIN-SECTION END -->


    <!-- SPECIAL-NOTE MODAL -->
    <div class="modal fade" id="specialNoteModal" tabindex="-1" aria-labelledby="specialNoteModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Special Note</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('chamber.schedule.specialNote') }}" class="noteform" method="POST">
                        @csrf
                        <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                        <input type="hidden" name="chamber_id" value="{{ auth()->guard('chamber')->user()->chamber_id }}">
                        <div class="inputbox">
                            <label for="date" class="inputlabel">
                                Select Date <span>*</span>
                            </label>
                            <input type="date" name="date" id="date" class="form-control" placeholder="28/11/2023" required value="{{ old('date') }}">
                        </div>

                        <div class="inputbox">
                            <label for="specialnote" class="inputlabel">
                                Special Note
                            </label>

                            <textarea id="specialnote" name="special_note" class="form-control" rows="5" required>{{ old('special_note') }}</textarea>
                        </div>

                        <div class="modal-footer justify-content-end gap-3">
                            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-remove">Save</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('after-scripts')


    {{--<script>
        document.addEventListener('DOMContentLoaded', function() {
            const everydayCheckbox = document.getElementById('everyday');
            const scheduleDayCheckboxes = document.querySelectorAll('.schedule-day-checkbox');
            const scheduleFields = document.querySelectorAll('.schedulefield');

            // Check if all checkboxes are checked initially and sync "Everyday"
            function updateEverydayStatus() {
                const allChecked = Array.from(scheduleDayCheckboxes).every(checkbox => checkbox.checked);
                everydayCheckbox.checked = allChecked;
            }

            // When "Everyday" is checked/unchecked, toggle other checkboxes
            everydayCheckbox.addEventListener('change', function() {
                scheduleDayCheckboxes.forEach(function(checkbox) {
                    checkbox.checked = everydayCheckbox.checked;
                });

                // Enable or disable the time inputs when "Everyday" is checked/unchecked
                scheduleFields.forEach(function(field) {
                    field.disabled = !everydayCheckbox.checked;
                });
            });

            // When unchecking any individual day, uncheck "Everyday"
            scheduleDayCheckboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (!checkbox.checked) {
                        everydayCheckbox.checked = false;
                    }
                    updateEverydayStatus();
                });
            });

            // Update "Everyday" checkbox status on page load
            updateEverydayStatus();
        });
    </script>--}}


    {{--<script>
        document.addEventListener('DOMContentLoaded', function() {
            const everydayCheckbox = document.getElementById('everyday');
            const scheduleDayCheckboxes = document.querySelectorAll('.schedule-day-checkbox');

            // Enable/Disable start_time and end_time fields based on checkbox status
            function toggleFields(checkbox) {
                const row = checkbox.closest('tr');
                const startField = row.querySelector(`input[name="start_time[${checkbox.value}]"]`);
                const endField = row.querySelector(`input[name="end_time[${checkbox.value}]"]`);

                if (checkbox.checked) {
                    startField.disabled = false;
                    endField.disabled = false;
                } else {
                    startField.disabled = true;
                    endField.disabled = true;
                    startField.value = "00:00";
                    endField.value = "00:00";
                }
            }

            // Initialize all checkboxes and fields based on current status
            scheduleDayCheckboxes.forEach(checkbox => {
                toggleFields(checkbox);
            });

            // When individual schedule day checkboxes are clicked
            scheduleDayCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    toggleFields(checkbox);
                    // Uncheck the "Everyday" checkbox if any individual checkbox is unchecked
                    if (!checkbox.checked) {
                        everydayCheckbox.checked = false;
                    }
                    updateEverydayStatus();
                });
            });

            // Check/uncheck all schedule day checkboxes when "Everyday" is clicked
            everydayCheckbox.addEventListener('change', function() {
                scheduleDayCheckboxes.forEach(checkbox => {
                    checkbox.checked = everydayCheckbox.checked;
                    toggleFields(checkbox);
                });
            });

            // Update "Everyday" checkbox status based on individual checkboxes
            function updateEverydayStatus() {
                const allChecked = Array.from(scheduleDayCheckboxes).every(checkbox => checkbox.checked);
                everydayCheckbox.checked = allChecked;
            }

            // Initial setup: Check the "Everyday" checkbox if all individual checkboxes are checked
            updateEverydayStatus();
        });
    </script>--}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const everydayCheckbox = document.getElementById('everyday');
            const scheduleDayCheckboxes = document.querySelectorAll('.schedule-day-checkbox');

            // Enable/Disable start_time and end_time fields based on checkbox status
            function toggleFields(checkbox) {
                const row = checkbox.closest('tr');
                const startField = row.querySelector(`input[name="start_time[${checkbox.value}]"]`);
                const endField = row.querySelector(`input[name="end_time[${checkbox.value}]"]`);

                if (checkbox.checked) {
                    startField.disabled = false;
                    endField.disabled = false;
                } else {
                    startField.disabled = true;
                    endField.disabled = true;
                    startField.value = ""; // Clear the input field
                    endField.value = "";   // Clear the input field
                    startField.setAttribute('placeholder', '--:--'); // Set a placeholder
                    endField.setAttribute('placeholder', '--:--');   // Set a placeholder
                }
            }

            // Initialize all checkboxes and fields based on current status
            scheduleDayCheckboxes.forEach(checkbox => {
                toggleFields(checkbox);
            });

            // When individual schedule day checkboxes are clicked
            scheduleDayCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    toggleFields(checkbox);
                    // Uncheck the "Everyday" checkbox if any individual checkbox is unchecked
                    if (!checkbox.checked) {
                        everydayCheckbox.checked = false;
                    }
                    updateEverydayStatus();
                });
            });

            // Check/uncheck all schedule day checkboxes when "Everyday" is clicked
            everydayCheckbox.addEventListener('change', function() {
                scheduleDayCheckboxes.forEach(checkbox => {
                    checkbox.checked = everydayCheckbox.checked;
                    toggleFields(checkbox);
                });
            });

            // Update "Everyday" checkbox status based on individual checkboxes
            function updateEverydayStatus() {
                const allChecked = Array.from(scheduleDayCheckboxes).every(checkbox => checkbox.checked);
                everydayCheckbox.checked = allChecked;
            }

            // Initial setup: Check the "Everyday" checkbox if all individual checkboxes are checked
            updateEverydayStatus();
        });
    </script>









@endpush
