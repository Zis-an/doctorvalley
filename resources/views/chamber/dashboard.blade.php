@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="mainsection" id="main-section">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="d-flex flex-column gap-4">
                    <div class="dashtodaydoctors">
                        <div class="dashtodaydoctors-header">
                            <h5 class="title">Today’s Doctor</h5>
                        </div>

                        <div class="dashtodaydoctors-body">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="doctoday">
                                        <figure class="thumb">
                                            <img src="../assets/images/avatar/avatar.svg" alt="doc-thumb">
                                        </figure>

                                        <div class="doctoday-detail">
                                            <h5 class="name">Doctor Stephen Strange</h5>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="speciality">Neurobiologist</span>
                                                <span class="speciality">Medicinologist</span>
                                            </div>
                                            <p class="text">MBBS (BCS) MPFC (Dhaka)</p>
                                            <p class="text">Bangladesh Ghuskhor Medical College</p>
                                        </div>

                                        <div class="doctoday-footer">
                                            <p class="text">4pm - 6am</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="doctoday">
                                        <figure class="thumb">
                                            <img src="../assets/images/avatar/avatar.svg" alt="doc-thumb">
                                        </figure>

                                        <div class="doctoday-detail">
                                            <h5 class="name">Doctor Stephen Strange</h5>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="speciality">Neurobiologist</span>
                                                <span class="speciality">Medicinologist</span>
                                            </div>
                                            <p class="text">MBBS (BCS) MPFC (Dhaka)</p>
                                            <p class="text">Bangladesh Ghuskhor Medical College</p>
                                        </div>

                                        <div class="doctoday-footer">
                                            <p class="text">4pm - 6am</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="doctoday">
                                        <figure class="thumb">
                                            <img src="../assets/images/avatar/avatar.svg" alt="doc-thumb">
                                        </figure>

                                        <div class="doctoday-detail">
                                            <h5 class="name">Doctor Stephen Strange</h5>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="speciality">Neurobiologist</span>
                                                <span class="speciality">Medicinologist</span>
                                            </div>
                                            <p class="text">MBBS (BCS) MPFC (Dhaka)</p>
                                            <p class="text">Bangladesh Ghuskhor Medical College</p>
                                        </div>

                                        <div class="doctoday-footer">
                                            <p class="text">4pm - 6am</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="viewschedule">
                        <a href="{{ route('chamber.schedule') }}" class="link">Weekly Schedule</a>
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

                    <!-- VIEW-COUNTERS -->
                    <div class="viewscounter">
                        <h5 class="countertitle">Most Viewed Doctor</h5>

                        <div class="card-view">
                            <figure class="card-view-thumb">
                                <img src="../assets/images/avatar/avatar.svg" alt="card-thumb">
                            </figure>

                            <div class="card-view-detail">
                                <h6 class="view-title">Doctor Stephen Strange</h6>
                                <p class="view-count">75,565</p>
                            </div>
                        </div>

                        <div class="card-view">
                            <figure class="card-view-thumb">
                                <img src="../assets/images/avatar/avatar.svg" alt="card-thumb">
                            </figure>

                            <div class="card-view-detail">
                                <h6 class="view-title">Doctor Stephen Strange</h6>
                                <p class="view-count">25,565</p>
                            </div>
                        </div>

                        <div class="card-view">
                            <figure class="card-view-thumb">
                                <img src="../assets/images/avatar/avatar.svg" alt="card-thumb">
                            </figure>

                            <div class="card-view-detail">
                                <h6 class="view-title">Doctor Stephen Strange</h6>
                                <p class="view-count">35,565</p>
                            </div>
                        </div>
                    </div>

                    <!-- CATEGORY-LIST -->
                    <div class="d-flex flex-column gap-4 bg-white p-3">
                        <h5 class="ctgtitle">Doctors Category</h5>

                        <ul class="sidebarlist">
                            <li class="sidebarlist-item">
                                <a href="#" class="sidebarlist-link">
                                    <span class="categorytitle">ইউরোলোজি বিশেষজ্ঞ</span>
                                    <span class="categorycounter">(2)</span>
                                </a>
                            </li>

                            <li class="sidebarlist-item">
                                <a href="#" class="sidebarlist-link">
                                    <span class="categorytitle">ক্যান্সার ও টিউমার বিশেষজ্ঞ</span>
                                    <span class="categorycounter">(3)</span>
                                </a>
                            </li>

                            <li class="sidebarlist-item">
                                <a href="#" class="sidebarlist-link">
                                    <span class="categorytitle">গাইনী ও প্রসূতি বিশেষজ্ঞ</span>
                                    <span class="categorycounter">(6)</span>
                                </a>
                            </li>

                            <li class="sidebarlist-item">
                                <a href="#" class="sidebarlist-link">
                                    <span class="categorytitle">গাইনী সার্জন</span>
                                    <span class="categorycounter">(5)</span>
                                </a>
                            </li>

                            <li class="sidebarlist-item">
                                <a href="#" class="sidebarlist-link">
                                    <span class="categorytitle">গ্যাস্ট্রোলিভার বিষেশজ্ঞ</span>
                                    <span class="categorycounter">(5)</span>
                                </a>
                            </li>

                            <li class="sidebarlist-item">
                                <a href="#" class="sidebarlist-link">
                                    <span class="categorytitle">চর্ম ও যৌন রোগ বিশেষজ্ঞ</span>
                                    <span class="categorycounter">(6)</span>
                                </a>
                            </li>

                            <li class="sidebarlist-item">
                                <a href="#" class="sidebarlist-link">
                                    <span class="categorytitle">ডায়াবেটিস বিশেষজ্ঞ</span>
                                    <span class="categorycounter">(7)</span>
                                </a>
                            </li>

                            <li class="sidebarlist-item">
                                <a href="#" class="sidebarlist-link">
                                    <span class="categorytitle">নাক-কান-গলা রোগ বিশেষজ্ঞ</span>
                                    <span class="categorycounter">(7)</span>
                                </a>
                            </li>

                            <li class="sidebarlist-item">
                                <a href="#" class="sidebarlist-link">
                                    <span class="categorytitle">নিউরোমেডিসিন বিশেষজ্ঞ</span>
                                    <span class="categorycounter">(4)</span>
                                </a>
                            </li>

                            <li class="sidebarlist-item">
                                <a href="#" class="sidebarlist-link">
                                    <span class="categorytitle">ফিজিওথেরাপিষ্ট</span>
                                    <span class="categorycounter">(1)</span>
                                </a>
                            </li>

                            <li class="sidebarlist-item">
                                <a href="#" class="sidebarlist-link">
                                    <span class="categorytitle">বক্ষব্যাধি ও হৃদরোগ বিশেষজ্ঞ</span>
                                    <span class="categorycounter">(7)</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN-SECTION END -->
@endsection
