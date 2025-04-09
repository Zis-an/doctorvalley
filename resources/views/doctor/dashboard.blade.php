@extends('layouts.backend')
@section('title', 'Dashboard')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="mainsection" id="main-section">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="d-flex flex-column gap-4">
                    <!-- WELCOME-USER -->
                    <div class="card-welcome">
                        <div class="card-detail">
                            <h1 class="cardtitle">
                                Good Morning, <span>{{ auth()->user()->name }}</span>
                            </h1>

                            <div class="textbox">
                                <p class="cardtext">
                                    medicines cure diseases but only doctors can cure patients.
                                </p>
                            </div>

                            <div class="d-flex justify-content-end">
                                <p class="author">- Carl Jung</p>
                            </div>
                        </div>

                        <figure class="card-thumbnail">
                            <img src="{{ asset('storage/' . auth()->user()->photo) }}" alt="card-thumbnail">
                        </figure>
                    </div>

                    <!-- PROFILE-IMPRESSION-CHART -->
                    <div class="card-impression">
                        <div class="card-impression-header">
                            <h5 class="impression-title">Your Profile Impression</h5>
                            <p class="impression-text">
                                This graph shows your profile view for the last 6 months.
                                This views are counted when any users views your profile.
                                Every time they visits we increase your profile impression.
                            </p>
                        </div>

                        <div class="card-impression-body">
                            <div id="profile-impression-chart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="d-flex flex-column gap-4">
                    <!-- PROILE-PROGRESS -->
                    <div class="card-progress">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="progress-title">Your Profile</h6>
                            <p class="progress-completed">80% complete</p>
                        </div>

                        <div class="card-progress-body">
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 80%"></div>
                            </div>

                            <p class="progress-text">
                                Your social link field is empty !
                            </p>
                        </div>
                    </div>

                    <!-- TODAY SCHEDULES -->
                    <div class="schedule-today">
                        <div class="schedule-today-header">
                            <h6 class="schedule-title">Today’s Schedule</h6>
                        </div>

                        <div class="schedule-today-body">
                            @forelse ($todaySchedules as $schedule)
                                <div class="card-schedule active">
                                    <span class="schedule-time">{{ \Carbon\Carbon::parse($schedule->start_from)->format('h:iA') }} - {{ \Carbon\Carbon::parse($schedule->end_from)->format('h:iA') }}</span>
                                    <span class="hospitalname">{{ $schedule->chamber->chamber_name ?? 'Chamber Not Provided' }}</span>
                                    <span class="location">{{ $schedule->chamber->address ?? 'Location Not Provided' }}</span>
                                </div>
                            @empty
                                <div class="card-schedule">
                                    <span class="text-muted">No schedules for today</span>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- VIEW-COUNTERS -->
                    <div class="viewscounter">
                        <div class="card-view">
                            <figure class="card-view-icon">
                                <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.8281 29.5625C21.7191 29.5625 22.5736 29.2086 23.2036 28.5786C23.8336 27.9486 24.1875 27.0941 24.1875 26.2031C24.1875 25.3122 23.8336 24.4577 23.2036 23.8277C22.5736 23.1977 21.7191 22.8438 20.8281 22.8438C19.9372 22.8438 19.0827 23.1977 18.4527 23.8277C17.8227 24.4577 17.4688 25.3122 17.4688 26.2031C17.4688 27.0941 17.8227 27.9486 18.4527 28.5786C19.0827 29.2086 19.9372 29.5625 20.8281 29.5625Z"
                                        fill="#F04130" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.0781 2.6875H16.125C17.9069 2.6875 19.6159 3.39537 20.8759 4.65538C22.1359 5.91539 22.8438 7.62433 22.8438 9.40625V12.7656C22.8438 14.6218 24.3487 16.125 26.2031 16.125H29.5625C31.3444 16.125 33.0534 16.8329 34.3134 18.0929C35.5734 19.3529 36.2812 21.0618 36.2812 22.8438V36.9531C36.2812 38.8075 34.7762 40.3125 32.9219 40.3125H10.0781C9.18716 40.3125 8.33269 39.9586 7.70269 39.3286C7.07268 38.6986 6.71875 37.8441 6.71875 36.9531V6.04688C6.71875 4.19071 8.22375 2.6875 10.0781 2.6875ZM20.8281 32.25C22.0106 32.25 23.1161 31.9096 24.0477 31.3219L25.9254 33.1996C26.1801 33.4369 26.5171 33.5662 26.8652 33.56C27.2133 33.5539 27.5455 33.4129 27.7917 33.1667C28.0379 32.9205 28.1789 32.5883 28.185 32.2402C28.1912 31.8921 28.0619 31.5551 27.8246 31.3004L25.9487 29.4228C26.6626 28.2878 26.9791 26.9477 26.8483 25.6133C26.7175 24.2788 26.1469 23.0257 25.2261 22.0509C24.3054 21.0762 23.0869 20.4351 21.762 20.2285C20.4372 20.0219 19.0813 20.2614 17.9075 20.9095C16.7337 21.5576 15.8086 22.5775 15.2776 23.8087C14.7467 25.04 14.64 26.4128 14.9745 27.7112C15.3089 29.0097 16.0654 30.1602 17.125 30.9818C18.1846 31.8034 19.4873 32.2495 20.8281 32.25Z"
                                        fill="#F04130" />
                                    <path
                                        d="M25.5313 9.40625C25.5344 7.14614 24.7206 4.96106 23.2397 3.25366C26.2377 4.04193 28.9725 5.61235 31.1645 7.80429C33.3564 9.99624 34.9269 12.7311 35.7151 15.729C34.0077 14.2482 31.8226 13.4344 29.5625 13.4375H26.2032C26.025 13.4375 25.8541 13.3667 25.7281 13.2407C25.6021 13.1147 25.5313 12.9438 25.5313 12.7656V9.40625Z"
                                        fill="#F04130" />
                                </svg>
                            </figure>

                            <div class="card-view-detail">
                                <h6 class="view-title">Total Profile View</h6>
                                <p class="view-count">25,565</p>
                            </div>
                        </div>

                        <div class="card-view">
                            <figure class="card-view-icon">
                                <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.0781 2.6875C8.22196 2.6875 6.71875 4.1925 6.71875 6.04687V36.9531C6.71875 38.8075 8.22375 40.3125 10.0781 40.3125H32.9219C34.7762 40.3125 36.2812 38.8075 36.2812 36.9531V22.8437C36.2812 21.0618 35.5734 19.3529 34.3134 18.0929C33.0534 16.8329 31.3444 16.125 29.5625 16.125H26.2031C25.3122 16.125 24.4577 15.7711 23.8277 15.1411C23.1977 14.5111 22.8437 13.6566 22.8437 12.7656V9.40625C22.8437 7.62433 22.1359 5.91539 20.8759 4.65538C19.6159 3.39537 17.9069 2.6875 16.125 2.6875H10.0781ZM13.4375 26.875C13.4375 26.5186 13.5791 26.1768 13.8311 25.9248C14.0831 25.6728 14.4249 25.5312 14.7812 25.5312H28.2187C28.5751 25.5312 28.9169 25.6728 29.1689 25.9248C29.4209 26.1768 29.5625 26.5186 29.5625 26.875C29.5625 27.2314 29.4209 27.5732 29.1689 27.8252C28.9169 28.0772 28.5751 28.2187 28.2187 28.2187H14.7812C14.4249 28.2187 14.0831 28.0772 13.8311 27.8252C13.5791 27.5732 13.4375 27.2314 13.4375 26.875ZM14.7812 30.9062C14.4249 30.9062 14.0831 31.0478 13.8311 31.2998C13.5791 31.5518 13.4375 31.8936 13.4375 32.25C13.4375 32.6064 13.5791 32.9482 13.8311 33.2002C14.0831 33.4522 14.4249 33.5937 14.7812 33.5937H21.5C21.8564 33.5937 22.1982 33.4522 22.4502 33.2002C22.7022 32.9482 22.8437 32.6064 22.8437 32.25C22.8437 31.8936 22.7022 31.5518 22.4502 31.2998C22.1982 31.0478 21.8564 30.9062 21.5 30.9062H14.7812Z"
                                        fill="#F04130" />
                                    <path
                                        d="M23.2397 3.25366C24.7206 4.96106 25.5344 7.14614 25.5313 9.40625V12.7656C25.5313 13.1365 25.8323 13.4375 26.2032 13.4375H29.5625C31.8226 13.4344 34.0077 14.2482 35.7151 15.729C34.9269 12.7311 33.3564 9.99624 31.1645 7.80429C28.9725 5.61235 26.2377 4.04193 23.2397 3.25366V3.25366Z"
                                        fill="#F04130" />
                                </svg>
                            </figure>

                            <div class="card-view-detail">
                                <h6 class="view-title">Total Blog View</h6>
                                <p class="view-count">35,565</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN-SECTION END -->
@endsection
