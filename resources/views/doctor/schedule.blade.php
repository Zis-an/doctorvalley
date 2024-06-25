@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="mainsection" id="main-section">
        <div class="schedule">
            <div class="schedule-header">
                <h5 class="section-title">WEEKLY SCHEDULE</h5>
            </div>

            <div class="schedule-body">
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="schedule">
                            <div id="schedule-calendar"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="calendar">
                            <div class="calendar-header">
                                <h3 id="monthAndYear" class="month-year"></h3>

                                <div class="calendar-buttons">
                                    <button id="previous" onclick="previous()" class="btn--previous">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15.6189 18.5172C15.2135 18.8479 14.6162 18.8243 14.2378 18.4463L8.39586 12.604C8.20002 12.4081 8.09401 12.1461 8.09401 11.8744C8.09401 11.6025 8.19984 11.341 8.39586 11.1444L14.238 5.3023C14.6415 4.89923 15.2947 4.89923 15.6972 5.3023C16.1009 5.70551 16.1009 6.35889 15.6973 6.76188L10.5853 11.8744L15.6972 16.9867C16.0757 17.3647 16.0993 17.9626 15.7682 18.368L15.6973 18.4464L15.6189 18.5172Z"
                                                fill="black" />
                                        </svg>
                                    </button>

                                    <button id="next" onclick="next()" class="btn--next">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.38113 5.48277C8.78651 5.15211 9.38375 5.17575 9.76215 5.55369L15.6041 11.396C15.8 11.5919 15.906 11.8539 15.906 12.1256C15.906 12.3975 15.8002 12.659 15.6041 12.8556L9.76203 18.6977C9.35848 19.1008 8.70527 19.1008 8.30278 18.6977C7.89909 18.2945 7.89909 17.6411 8.30266 17.2381L13.4147 12.1256L8.30278 7.01328C7.92434 6.63529 7.90067 6.03745 8.23178 5.63202L8.30274 5.55362L8.38113 5.48277Z"
                                                fill="black" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table-calendar" id="calendar" data-lang="en" aria-describedby="table">
                                    <thead id="thead-month" class="table-calendar-header">
                                        <tr>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="calendar-body" class="table-calendar-body"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- MAIN-SECTION END -->
@endsection

@push('after-scripts')

<script src="../../assets/js/calendar.js"></script>
<!-- FULL-CALENDAR-JS -->
<script src="../../assets/js/fullcalendar/index.global.min.js"></script>
<script src="../../assets/js/fullcalendar/schedule.js"></script>

@endpush
