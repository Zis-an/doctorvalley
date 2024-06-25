@extends('layouts.frontend')
@section('content')
  <!-- MAIN-SECTION START -->
  <main class="main">
    <section class="doctors-section">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-3 col-md-4 d-none d-md-block">
            <div class="stickyfilter">
              <div class="filter">
                <div class="inputbox">
                  <label for="doctorscategory" class="inputlabel">DOCTOR</label>
                  <select id="doctorscategory" placeholder-text="ইউরোলোজি বিশেষজ্ঞ" autocomplete="off">
                    <option value="ইউরোলোজি বিশেষজ্ঞ">
                      ইউরোলোজি বিশেষজ্ঞ
                    </option>
                    <option value="ক্যান্সার ও টিউমার বিশেষজ্ঞ">
                      ক্যান্সার ও টিউমার বিশেষজ্ঞ
                    </option>
                    <option value="গাইনী ও প্রসূতি বিশেষজ্ঞ">
                      গাইনী ও প্রসূতি বিশেষজ্ঞ
                    </option>
                    <option value="গাইনী সার্জন">
                      গাইনী সার্জন
                    </option>
                    <option value="গ্যাস্ট্রোলিভার বিষেশজ্ঞ">
                      গ্যাস্ট্রোলিভার বিষেশজ্ঞ
                    </option>
                    <option value="চর্ম ও যৌন রোগ বিশেষজ্ঞ">
                      চর্ম ও যৌন রোগ বিশেষজ্ঞ
                    </option>
                    <option value="নাক-কান-গলা রোগ বিশেষজ্ঞ">
                      নাক-কান-গলা রোগ বিশেষজ্ঞ
                    </option>
                    <option value="নিউরোমেডিসিন বিশেষজ্ঞ">
                      নিউরোমেডিসিন বিশেষজ্ঞ
                    </option>
                    <option value="ফিজিওথেরাপিষ্ট">
                      ফিজিওথেরাপিষ্ট
                    </option>
                    <option value="বক্ষব্যাধি ও হৃদরোগ বিশেষজ্ঞ">
                      বক্ষব্যাধি ও হৃদরোগ বিশেষজ্ঞ
                    </option>
                    <option value="বিশেষজ্ঞ পুষ্টিবিদ">
                      বিশেষজ্ঞ পুষ্টিবিদ
                    </option>
                    <option value="মাথা ও মনোরোগ বিশেষজ্ঞ">
                      মাথা ও মনোরোগ বিশেষজ্ঞ
                    </option>
                    <option value="মেডিসিন বিশেষজ্ঞ">
                      মেডিসিন বিশেষজ্ঞ
                    </option>
                    <option value="ল্যাপারোস্কোপিক সার্জন">
                      ল্যাপারোস্কোপিক সার্জন
                    </option>
                    <option value="শিশুরোগ বিশেষজ্ঞ">
                      শিশুরোগ বিশেষজ্ঞ
                    </option>
                    <option value="হাড়-ভাঙ্গা বিশেষজ্ঞ">
                      হাড়-ভাঙ্গা বিশেষজ্ঞ
                    </option>
                    <option value="হেড-নেক সার্জন">
                      হেড-নেক সার্জন
                    </option>
                  </select>
                </div>

                <div class="inputbox">
                  <label for="districts" class="inputlabel">DISTIRCT</label>
                  <select id="districts" placeholder-text="Sherpur" autocomplete="off">
                    <option value="Sherpur">Sherpur</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Mymensingh">Mymensingh</option>
                  </select>
                </div>

                <div class="inputbox">
                  <label for="thanas" class="inputlabel">THANA</label>
                  <select id="thanas" placeholder-text="Sherpur Sadar" autocomplete="off">
                    <option value="Sherpur Sadar">Sherpur Sadar</option>
                    <option value="Nakla">Nakla</option>
                    <option value="Nalitabari">Nalitabari</option>
                    <option value="Sribordi">Sribordi</option>
                    <option value="Jhenaigati">Jhenaigati</option>
                  </select>
                </div>

                <div class="inputbox">
                  <label for="days" class="inputlabel">DAYS</label>
                  <select id="days" placeholder-text="Saturday" autocomplete="off">
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-9 col-md-8">
            <!-- MOBILE-FILTER -->
            <div class="d-md-none d-block">
              <div class="mobilefilter">
                <h5 class="mobilefilter-title">Doctors</h5>

                <button class="btn-filter" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileFilter" aria-controls="mobileFilter">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                    <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
                  </svg>
                </button>

                <!-- FILTER-OFFCANVAS -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileFilter" aria-labelledby="mobileFilter">
                  <div class="offcanvas-header">
                    <h5 class="text-white">Filter Doctors</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                      </svg>
                    </button>
                  </div>

                  <div class="offcanvas-body">
                    <div class="filter">
                      <div class="inputbox">
                        <label for="doctorscategory-mobile" class="inputlabel">DOCTOR</label>
                        <select id="doctorscategory-mobile" placeholder-text="ইউরোলোজি বিশেষজ্ঞ" autocomplete="off">
                          <option value="ইউরোলোজি বিশেষজ্ঞ">
                            ইউরোলোজি বিশেষজ্ঞ
                          </option>
                          <option value="ক্যান্সার ও টিউমার বিশেষজ্ঞ">
                            ক্যান্সার ও টিউমার বিশেষজ্ঞ
                          </option>
                          <option value="গাইনী ও প্রসূতি বিশেষজ্ঞ">
                            গাইনী ও প্রসূতি বিশেষজ্ঞ
                          </option>
                          <option value="গাইনী সার্জন">
                            গাইনী সার্জন
                          </option>
                          <option value="গ্যাস্ট্রোলিভার বিষেশজ্ঞ">
                            গ্যাস্ট্রোলিভার বিষেশজ্ঞ
                          </option>
                          <option value="চর্ম ও যৌন রোগ বিশেষজ্ঞ">
                            চর্ম ও যৌন রোগ বিশেষজ্ঞ
                          </option>
                          <option value="নাক-কান-গলা রোগ বিশেষজ্ঞ">
                            নাক-কান-গলা রোগ বিশেষজ্ঞ
                          </option>
                          <option value="নিউরোমেডিসিন বিশেষজ্ঞ">
                            নিউরোমেডিসিন বিশেষজ্ঞ
                          </option>
                          <option value="ফিজিওথেরাপিষ্ট">
                            ফিজিওথেরাপিষ্ট
                          </option>
                          <option value="বক্ষব্যাধি ও হৃদরোগ বিশেষজ্ঞ">
                            বক্ষব্যাধি ও হৃদরোগ বিশেষজ্ঞ
                          </option>
                          <option value="বিশেষজ্ঞ পুষ্টিবিদ">
                            বিশেষজ্ঞ পুষ্টিবিদ
                          </option>
                          <option value="মাথা ও মনোরোগ বিশেষজ্ঞ">
                            মাথা ও মনোরোগ বিশেষজ্ঞ
                          </option>
                          <option value="মেডিসিন বিশেষজ্ঞ">
                            মেডিসিন বিশেষজ্ঞ
                          </option>
                          <option value="ল্যাপারোস্কোপিক সার্জন">
                            ল্যাপারোস্কোপিক সার্জন
                          </option>
                          <option value="শিশুরোগ বিশেষজ্ঞ">
                            শিশুরোগ বিশেষজ্ঞ
                          </option>
                          <option value="হাড়-ভাঙ্গা বিশেষজ্ঞ">
                            হাড়-ভাঙ্গা বিশেষজ্ঞ
                          </option>
                          <option value="হেড-নেক সার্জন">
                            হেড-নেক সার্জন
                          </option>
                        </select>
                      </div>

                      <div class="inputbox">
                        <label for="districts-mobile" class="inputlabel">DISTIRCT</label>
                        <select id="districts-mobile" placeholder-text="Sherpur" autocomplete="off">
                          <option value="Sherpur">Sherpur</option>
                          <option value="Dhaka">Dhaka</option>
                          <option value="Barishal">Barishal</option>
                          <option value="Sylhet">Sylhet</option>
                          <option value="Khulna">Khulna</option>
                          <option value="Chittagong">Chittagong</option>
                          <option value="Rangpur">Rangpur</option>
                          <option value="Mymensingh">Mymensingh</option>
                        </select>
                      </div>

                      <div class="inputbox">
                        <label for="thanas-mobile" class="inputlabel">THANA</label>
                        <select id="thanas-mobile" placeholder-text="Sherpur Sadar" autocomplete="off">
                          <option value="Sherpur Sadar">Sherpur Sadar</option>
                          <option value="Nakla">Nakla</option>
                          <option value="Nalitabari">Nalitabari</option>
                          <option value="Sribordi">Sribordi</option>
                          <option value="Jhenaigati">Jhenaigati</option>
                        </select>
                      </div>

                      <div class="inputbox">
                        <label for="days-mobile" class="inputlabel">DAYS</label>
                        <select id="days-mobile" placeholder-text="Saturday" autocomplete="off">
                          <option value="Saturday">Saturday</option>
                          <option value="Sunday">Sunday</option>
                          <option value="Monday">Monday</option>
                          <option value="Tuesday">Tuesday</option>
                          <option value="Wednesday">Wednesday</option>
                          <option value="Thursday">Thursday</option>
                          <option value="Friday">Friday</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- DOCTORS-LIST -->
            <div class="row g-3">
              <div class="col-lg-4 col-sm-6 col-12">
                <a href="{{ route('frontend.doctor.details') }}" class="slidelink">
                  <div class="card-doctor">
                    <div class="card-doctor-header">
                      <img src="{{ asset('assets/images/doctors/doctor-7.png') }}" alt="doctor-thumbnail">
                    </div>

                    <div class="card-doctor-body">
                      <div class="name-status">
                        <h5 class="name">ডাঃ মোঃ শামছুর রহমান</h5>
                        <span class="status active"></span>
                      </div>
                      <p class="position">
                        বিশেষজ্ঞ সার্জন
                      </p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-sm-6 col-12">
                <a href="{{ route('frontend.doctor.details') }}" class="slidelink">
                  <div class="card-doctor">
                    <div class="card-doctor-header">
                      <img src="{{ asset('assets/images/doctors/doctor-1.png') }}" alt="doctor-thumbnail">
                    </div>

                    <div class="card-doctor-body">
                      <div class="name-status">
                        <h5 class="name">ডাঃ মোঃ শরীফুল ইসলাম শরীফ</h5>
                        <span class="status"></span>
                      </div>
                      <p class="position">
                        ক্যান্সার, অর্থোসার্জারী ও প্লাষ্টিক সার্জারি বিশেষজ্ঞ
                      </p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-sm-6 col-12">
                <a href="{{ route('frontend.doctor.details') }}" class="slidelink">
                  <div class="card-doctor">
                    <div class="card-doctor-header">
                      <img src="{{ asset('assets/images/doctors/doctor-2.png') }}" alt="doctor-thumbnail">
                    </div>

                    <div class="card-doctor-body">
                      <div class="name-status">
                        <h5 class="name">ডাঃ অমিত চন্দ্র দেব</h5>
                        <span class="status"></span>
                      </div>
                      <p class="position">
                        মেডিসিন, গ্যাষ্ট্রিক, লিভার, ডায়াবেটিস, বক্ষব্যাধি, মা ও শিশু রোগ বিশেষজ্ঞ এবং সার্জন
                      </p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-sm-6 col-12">
                <a href="{{ route('frontend.doctor.details') }}" class="slidelink">
                  <div class="card-doctor">
                    <div class="card-doctor-header">
                      <img src="{{ asset('assets/images/doctors/doctor-3.png') }}" alt="doctor-thumbnail">
                    </div>

                    <div class="card-doctor-body">
                      <div class="name-status">
                        <h5 class="name">ডাঃ জোবাইদুল হক</h5>
                        <span class="status"></span>
                      </div>
                      <p class="position">
                        নাক, কান, গলা রোগ বিশেষজ্ঞ ও সার্জন
                      </p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-sm-6 col-12">
                <a href="{{ route('frontend.doctor.details') }}" class="slidelink">
                  <div class="card-doctor">
                    <div class="card-doctor-header">
                      <img src="{{ asset('assets/images/doctors/doctor-4.png') }}" alt="doctor-thumbnail">
                    </div>

                    <div class="card-doctor-body">
                      <div class="name-status">
                        <h5 class="name">ডাঃ মোঃ লুৎফর রহমান</h5>
                        <span class="status"></span>
                      </div>
                      <p class="position">
                        স্ত্রী রোগ ও প্রসূতিবিদ্যা বিশেষজ্ঞ এবং সার্জন
                      </p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-sm-6 col-12">
                <a href="{{ route('frontend.doctor.details') }}" class="slidelink">
                  <div class="card-doctor">
                    <div class="card-doctor-header">
                      <img src="{{ asset('assets/images/doctors/doctor-5.png') }}" alt="doctor-thumbnail">
                    </div>

                    <div class="card-doctor-body">
                      <div class="name-status">
                        <h5 class="name">ডাঃ মোঃ শামছুর রহমান</h5>
                        <span class="status"></span>
                      </div>
                      <p class="position">
                        বিশেষজ্ঞ সার্জন
                      </p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-sm-6 col-12">
                <a href="{{ route('frontend.doctor.details') }}" class="slidelink">
                  <div class="card-doctor">
                    <div class="card-doctor-header">
                      <img src="{{ asset('assets/images/doctors/doctor-6.png') }}" alt="doctor-thumbnail">
                    </div>

                    <div class="card-doctor-body">
                      <div class="name-status">
                        <h5 class="name">ডাঃ মোঃ শামছুর রহমান</h5>
                        <span class="status"></span>
                      </div>
                      <p class="position">
                        বিশেষজ্ঞ সার্জন
                      </p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-sm-6 col-12">
                <a href="{{ route('frontend.doctor.details') }}" class="slidelink">
                  <div class="card-doctor">
                    <div class="card-doctor-header">
                      <img src="{{ asset('assets/images/doctors/doctor-8.png') }}" alt="doctor-thumbnail">
                    </div>

                    <div class="card-doctor-body">
                      <div class="name-status">
                        <h5 class="name">ডাঃ মোঃ শামছুর রহমান</h5>
                        <span class="status"></span>
                      </div>
                      <p class="position">
                        বিশেষজ্ঞ সার্জন
                      </p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-sm-6 col-12">
                <a href="{{ route('frontend.doctor.details') }}" class="slidelink">
                  <div class="card-doctor">
                    <div class="card-doctor-header">
                      <img src="{{ asset('assets/images/doctors/doctor-9.png') }}" alt="doctor-thumbnail">
                    </div>

                    <div class="card-doctor-body">
                      <div class="name-status">
                        <h5 class="name">ডাঃ মোঃ শামছুর রহমান</h5>
                        <span class="status"></span>
                      </div>
                      <p class="position">
                        বিশেষজ্ঞ সার্জন
                      </p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- MAIN-SECTION END -->
@endsection
