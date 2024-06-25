@extends('layouts.frontend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="main">
        <div class="doctordetails">
          <div class="container">
            <div class="doctordetails-content">
              <div class="row g-4">
                <!-- DOCTOR PROFILE INFO START -->
                <div class="col-lg-4 col-12">
                  <div class="profileinfo">
                    <!-- DOCTOR PROFILE START -->
                    <figure class="doctor-profile">
                      <img src="{{ asset('assets/images/doctors/doctor-7.png') }}" alt="doctor-profile">

                      <div class="docinfo">
                        <h6 class="name">Hasan Al Jahan Rocky</h6>
                        <p class="designation">ক্যান্সার, অর্থোসার্জারী ও প্লাষ্টিক সার্জারি বিশেষজ্ঞ</p>
                      </div>
                    </figure>
                    <!-- DOCTOR PROFILE END -->

                    <!-- DOCTOR BIOGRAPHY START -->
                    <div class="biography">
                      <div class="biography-header">
                        <h5 class="biography-title">Biography</h5>
                      </div>

                      <div class="biography-body">
                        <p class="biography-text">
                          Physician or scientist, or group, whose work has led to significant advances in the fields of health care and scientific research.
                        </p>
                      </div>
                    </div>
                    <!-- DOCTOR BIOGRAPHY END -->
                  </div>
                </div>
                <!-- DOCTOR PROFILE INFO END -->

                <!-- PROFILE DETAILS START -->
                <div class="col-lg-4 col-12">
                  <div class="profile-information">
                    <h5 class="name">Hasan Al Jahan Rocky</h5>

                    <!-- DOCTOR STUDYLIST START -->
                    <ul class="studylist">
                      <li class="studylist-item">
                        MBBS (Dhaka), BCS (Health)
                      </li>
                      <li class="studylist-item">
                        MS, MCPS (অর্থোসার্জারী)
                      </li>
                      <li class="studylist-item">
                        Diploma In প্লাষ্টিক সার্জারি
                      </li>
                      <li class="studylist-item">
                        Consultant (ক্যান্সার)
                      </li>
                    </ul>
                    <!-- DOCTOR STUDYLIST END -->

                    <!-- DOCTOR WORKING PLACE -->
                    <p class="workingplace">
                      National Institute of Cancer Research & Hospital (NICRH)
                    </p>

                    <!-- DOCTOR SPECILITIES START -->
                    <div class="specilities">
                      <div class="specilities-header">
                        <h5 class="specilities-title">Specilities</h5>
                      </div>

                      <div class="specilities-body">
                        <span class="spacility">ক্যান্সার</span>
                        <span class="spacility">প্লাষ্টিক সার্জারি</span>
                        <span class="spacility">অর্থোসার্জারী</span>
                      </div>
                    </div>
                    <!-- DOCTOR SPECILITIES END -->

                    <!-- DOCTOR EXPERIENCE START -->
                    <div class="experience">
                      <h5 class="experience-title">Experience</h5>
                      <p class="experience-text">Surgeon</p>
                    </div>
                    <!-- DOCTOR EXPERIENCE END -->

                    <!-- DOCTOR CONTACT-INFO START -->
                    <div class="contacts">
                      <div class="contacts-header">
                        <h5 class="contacts-title">Share On</h5>
                      </div>

                      <div class="contacts-body">
                        <ul class="followlist">
                          <li class="followlist-item">
                            <a href="https://www.facebook.com" target="_blank" class="followlist-link facebook-link" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share on Facebook">
                              <i class="fa-brands fa-facebook-f"></i>
                            </a>
                          </li>

                          <li class="followlist-item">
                            <a href="https://www.twitter.com" target="_blank" class="followlist-link twitter-link" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share on Twitter">
                              <i class="fa-brands fa-twitter"></i>
                            </a>
                          </li>

                          <li class="followlist-item">
                            <a href="https://www.instagram.com" target="_blank" class="followlist-link youtube-link" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share on Youtube">
                              <i class="fa-brands fa-youtube"></i>
                            </a>
                          </li>

                          <li class="followlist-item">
                            <a href="https://www.linkedin.com" target="_blank" class="followlist-link linkedin-link" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share on Linkedin">
                              <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- DOCTOR CONTACT-INFO END -->
                  </div>
                </div>
                <!-- PROFILE DETAILS END -->

                <div class="col-lg-4 col-12">
                  <!-- DOCTOR CHEMBER START -->
                  <div class="chember">
                    <div class="chember-header">
                      <h5 class="chember-title">Appointments</h5>
                    </div>

                    <div class="chember-body">
                      <ul class="schedulelist">
                        <li class="schedulelist-item">
                          <span class="daytime">
                            <span class="icon">
                              <i class="fa-regular fa-clock"></i>
                            </span>
                            <span class="text">Thursday (5PM-10PM)</span>
                          </span>

                          <span class="chambername">
                            <span class="icon">
                              <i class="fa-regular fa-hospital"></i>
                            </span>
                            <span class="text">Abedin Hospital</span>
                          </span>

                          <span class="chamberaddress">
                            <span class="icon">
                              <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <span class="text">Sadar Hospital Road, Narayanpur, Sherpur Town, Sherpur</span>
                          </span>
                          <span class="chember-contact">
                            <span class="icon">
                              <i class="fa-solid fa-phone"></i>
                            </span>
                            <a href="tel:+8801965088417" class="link">+8801965088417</a>
                          </span>
                          <!-- <button class="btn-appointment" type="button">Appointment</button> -->
                        </li>

                        <li class="schedulelist-item">
                          <span class="daytime">
                            <span class="icon">
                              <i class="fa-regular fa-clock"></i>
                            </span>
                            <span class="text">Thursday (5PM-10PM)</span>
                          </span>

                          <span class="chambername">
                            <span class="icon">
                              <i class="fa-regular fa-hospital"></i>
                            </span>
                            <span class="text">Abedin Hospital</span>
                          </span>

                          <span class="chamberaddress">
                            <span class="icon">
                              <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <span class="text">Sadar Hospital Road, Narayanpur, Sherpur Town, Sherpur</span>
                          </span>
                          <span class="chember-contact">
                            <span class="icon">
                              <i class="fa-solid fa-phone"></i>
                            </span>
                            <a href="tel:+8801965088417" class="link">+8801965088417</a>
                          </span>
                          <!-- <button class="btn-appointment" type="button">Appointment</button> -->
                        </li>

                        <li class="schedulelist-item">
                          <span class="daytime">
                            <span class="icon">
                              <i class="fa-regular fa-clock"></i>
                            </span>
                            <span class="text">Thursday (5PM-10PM)</span>
                          </span>

                          <span class="chambername">
                            <span class="icon">
                              <i class="fa-regular fa-hospital"></i>
                            </span>
                            <span class="text">Abedin Hospital</span>
                          </span>

                          <span class="chamberaddress">
                            <span class="icon">
                              <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <span class="text">Sadar Hospital Road, Narayanpur, Sherpur Town, Sherpur</span>
                          </span>
                          <span class="chember-contact">
                            <span class="icon">
                              <i class="fa-solid fa-phone"></i>
                            </span>
                            <a href="tel:+8801965088417" class="link">+8801965088417</a>
                          </span>
                          <!-- <button class="btn-appointment" type="button">Appointment</button> -->
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- DOCTOR CHEMBER END -->
                </div>
              </div>
            </div>
          </div>

          <div class="moredoc">
            <div class="moredoc-header py-4">
              <div class="container">
                <h4 class="suggestedtitle">Suggested Doctors</h4>
              </div>
            </div>

            <div class="moredoc-body">
              <div class="container">
                <div class="slider">
                  <div class="swiper doctorslider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
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

                      <div class="swiper-slide">
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

                      <div class="swiper-slide">
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

                      <div class="swiper-slide">
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

                      <div class="swiper-slide">
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

                      <div class="swiper-slide">
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

                      <div class="swiper-slide">
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

                      <div class="swiper-slide">
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

                      <div class="swiper-slide">
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

                  <div class="slider-buttons">
                    <button class="swiper-button-next">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                    </button>

                    <button class="swiper-button-prev">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- MAIN-SECTION END -->
@endsection
