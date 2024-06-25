@extends('layouts.frontend')
@section('content')
  <!-- MAIN-SECTION START -->
  <main class="main">
    <!-- DOCTORS-TODAY SECTION START -->
    <section class="doctorstoday">
      <div class="container">
        <div class="doctorstoday-details">
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

          <div class="doctorstoday-info">
            <h1 class="doctorstoday-title">Doctors Today</h1>
            <p class="datetoday"></p>

            <div class="mt-4">
              <a href="{{ route('frontend.doctors') }}" class="btn-link">Active Doctors</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- DOCTORS-TODAY SECTION END -->

    <!-- BLOG-SECTION START -->
    <section class="blogs">
      <div class="container">
        <div class="blogs-header">
          <h2 class="blogtitle">Blogs</h2>
        </div>

        <div class="row g-3 w-100 justify-content-center">
          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="cardblog">
                <div class="cardblog-header">
                  <div class="tags">
                    <span class="tag">Surgery</span>
                    <span class="tag">Health</span>
                    <span class="tag">Psychology</span>
                    <span class="tag">Vaccination</span>
                  </div>

                  <figure class="blogthumbnail">
                    <img src="https://img.freepik.com/free-photo/young-handsome-physician-medical-robe-with-stethoscope_1303-17818.jpg?w=740&t=st=1685617446~exp=1685618046~hmac=4be7778b590ce88f19fad3303fcaad93200be186574bd1b0066eee635485c254" alt="blog-thumbnail">
                  </figure>
                </div>

                <div class="cardblog-body">
                  <h5 class="blogtitle">
                    রমজানের সুস্থতা-Healthy Ramadan Fasting Tips-Doctortodays
                  </h5>

                  <div class="bloginfos">
                    <p class="blogtext">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Qui omnis voluptatum dolore delectus nihil odit in dolorum et magni? Voluptate!
                    </p>
                  </div>

                  <ul class="bloglist">
                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                      </span>
                      <span class="author">
                        Rakibul Islam Rocky
                      </span>
                    </li>

                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                      </span>
                      <span class="author">
                        1 June 2023
                      </span>
                    </li>
                  </ul>

                  <span class="viewdetail">Read article</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="cardblog">
                <div class="cardblog-header">
                  <div class="tags">
                    <span class="tag">Surgery</span>
                    <span class="tag">Health</span>
                    <span class="tag">Psychology</span>
                    <span class="tag">Vaccination</span>
                  </div>

                  <figure class="blogthumbnail">
                    <img src="https://img.freepik.com/free-photo/young-woman-practicing-yoga-home_1303-20239.jpg?size=626&ext=jpg" alt="blog-thumbnail">
                  </figure>
                </div>

                <div class="cardblog-body">
                  <h5 class="blogtitle">
                    রমজানের সুস্থতা-Healthy Ramadan Fasting Tips-Doctortodays
                  </h5>

                  <div class="bloginfos">
                    <p class="blogtext">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Qui omnis voluptatum dolore delectus nihil odit in dolorum et magni? Voluptate!
                    </p>
                  </div>

                  <ul class="bloglist">
                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                      </span>
                      <span class="author">
                        Rakibul Islam Rocky
                      </span>
                    </li>

                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                      </span>
                      <span class="author">
                        1 June 2023
                      </span>
                    </li>
                  </ul>

                  <span class="viewdetail">Read article</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="cardblog">
                <div class="cardblog-header">
                  <div class="tags">
                    <span class="tag">Surgery</span>
                    <span class="tag">Health</span>
                    <span class="tag">Psychology</span>
                    <span class="tag">Vaccination</span>
                  </div>

                  <figure class="blogthumbnail">
                    <img src="https://img.freepik.com/free-photo/woman-making-beauty-procedures-beauty-salon_1303-16721.jpg?size=626&ext=jpg" alt="blog-thumbnail">
                  </figure>
                </div>

                <div class="cardblog-body">
                  <h5 class="blogtitle">
                    রমজানের সুস্থতা-Healthy Ramadan Fasting Tips-Doctortodays
                  </h5>

                  <div class="bloginfos">
                    <p class="blogtext">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Qui omnis voluptatum dolore delectus nihil odit in dolorum et magni? Voluptate!
                    </p>
                  </div>

                  <ul class="bloglist">
                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                      </span>
                      <span class="author">
                        Rakibul Islam Rocky
                      </span>
                    </li>

                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                      </span>
                      <span class="author">
                        1 June 2023
                      </span>
                    </li>
                  </ul>

                  <span class="viewdetail">Read article</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="cardblog">
                <div class="cardblog-header">
                  <div class="tags">
                    <span class="tag">Surgery</span>
                    <span class="tag">Health</span>
                    <span class="tag">Psychology</span>
                    <span class="tag">Vaccination</span>
                  </div>

                  <figure class="blogthumbnail">
                    <img src="https://img.freepik.com/free-photo/smiling-young-cook-female-wearing-chef-uniform-covered-eye-with-pepper-her-hand-isolated-white-wall_141793-36616.jpg?size=626&ext=jpg" alt="blog-thumbnail">
                  </figure>
                </div>

                <div class="cardblog-body">
                  <h5 class="blogtitle">
                    রমজানের সুস্থতা-Healthy Ramadan Fasting Tips-Doctortodays
                  </h5>

                  <div class="bloginfos">
                    <p class="blogtext">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Qui omnis voluptatum dolore delectus nihil odit in dolorum et magni? Voluptate!
                    </p>
                  </div>

                  <ul class="bloglist">
                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                      </span>
                      <span class="author">
                        Rakibul Islam Rocky
                      </span>
                    </li>

                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                      </span>
                      <span class="author">
                        1 June 2023
                      </span>
                    </li>
                  </ul>

                  <span class="viewdetail">Read article</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="cardblog">
                <div class="cardblog-header">
                  <div class="tags">
                    <span class="tag">Surgery</span>
                    <span class="tag">Health</span>
                    <span class="tag">Psychology</span>
                    <span class="tag">Vaccination</span>
                  </div>

                  <figure class="blogthumbnail">
                    <img src="https://img.freepik.com/free-photo/doctor-suggesting-hospital-program-patient_53876-14806.jpg?size=626&ext=jpg" alt="blog-thumbnail">
                  </figure>
                </div>

                <div class="cardblog-body">
                  <h5 class="blogtitle">
                    রমজানের সুস্থতা-Healthy Ramadan Fasting Tips-Doctortodays
                  </h5>

                  <div class="bloginfos">
                    <p class="blogtext">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Qui omnis voluptatum dolore delectus nihil odit in dolorum et magni? Voluptate!
                    </p>
                  </div>

                  <ul class="bloglist">
                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                      </span>
                      <span class="author">
                        Rakibul Islam Rocky
                      </span>
                    </li>

                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                      </span>
                      <span class="author">
                        1 June 2023
                      </span>
                    </li>
                  </ul>

                  <span class="viewdetail">Read article</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="cardblog">
                <div class="cardblog-header">
                  <div class="tags">
                    <span class="tag">Surgery</span>
                    <span class="tag">Health</span>
                    <span class="tag">Psychology</span>
                    <span class="tag">Vaccination</span>
                  </div>

                  <figure class="blogthumbnail">
                    <img src="https://img.freepik.com/free-photo/overhead-view-laptop-stethoscope-medical-uniform-green-backdrop_23-2148129641.jpg?size=626&ext=jpg" alt="blog-thumbnail">
                  </figure>
                </div>

                <div class="cardblog-body">
                  <h5 class="blogtitle">
                    রমজানের সুস্থতা-Healthy Ramadan Fasting Tips-Doctortodays
                  </h5>

                  <div class="bloginfos">
                    <p class="blogtext">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Qui omnis voluptatum dolore delectus nihil odit in dolorum et magni? Voluptate!
                    </p>
                  </div>

                  <ul class="bloglist">
                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                      </span>
                      <span class="author">
                        Rakibul Islam Rocky
                      </span>
                    </li>

                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                      </span>
                      <span class="author">
                        1 June 2023
                      </span>
                    </li>
                  </ul>

                  <span class="viewdetail">Read article</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="cardblog">
                <div class="cardblog-header">
                  <div class="tags">
                    <span class="tag">Surgery</span>
                    <span class="tag">Health</span>
                    <span class="tag">Psychology</span>
                    <span class="tag">Vaccination</span>
                  </div>

                  <figure class="blogthumbnail">
                    <img src="https://img.freepik.com/free-photo/overhead-view-healthcare-desk-with-laptop-succulent-plant_23-2148214012.jpg?size=626&ext=jpg" alt="blog-thumbnail">
                  </figure>
                </div>

                <div class="cardblog-body">
                  <h5 class="blogtitle">
                    রমজানের সুস্থতা-Healthy Ramadan Fasting Tips-Doctortodays
                  </h5>

                  <div class="bloginfos">
                    <p class="blogtext">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Qui omnis voluptatum dolore delectus nihil odit in dolorum et magni? Voluptate!
                    </p>
                  </div>

                  <ul class="bloglist">
                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                      </span>
                      <span class="author">
                        Rakibul Islam Rocky
                      </span>
                    </li>

                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                      </span>
                      <span class="author">
                        1 June 2023
                      </span>
                    </li>
                  </ul>

                  <span class="viewdetail">Read article</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="cardblog">
                <div class="cardblog-header">
                  <div class="tags">
                    <span class="tag">Surgery</span>
                    <span class="tag">Health</span>
                    <span class="tag">Psychology</span>
                    <span class="tag">Vaccination</span>
                  </div>

                  <figure class="blogthumbnail">
                    <img src="https://img.freepik.com/free-photo/aerial-view-doctor-stethoscope-computer-laptop_53876-33538.jpg?size=626&ext=jpg" alt="blog-thumbnail">
                  </figure>
                </div>

                <div class="cardblog-body">
                  <h5 class="blogtitle">
                    রমজানের সুস্থতা-Healthy Ramadan Fasting Tips-Doctortodays
                  </h5>

                  <div class="bloginfos">
                    <p class="blogtext">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Qui omnis voluptatum dolore delectus nihil odit in dolorum et magni? Voluptate!
                    </p>
                  </div>

                  <ul class="bloglist">
                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                      </span>
                      <span class="author">
                        Rakibul Islam Rocky
                      </span>
                    </li>

                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                      </span>
                      <span class="author">
                        1 June 2023
                      </span>
                    </li>
                  </ul>

                  <span class="viewdetail">Read article</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="cardblog">
                <div class="cardblog-header">
                  <div class="tags">
                    <span class="tag">Surgery</span>
                    <span class="tag">Health</span>
                    <span class="tag">Psychology</span>
                    <span class="tag">Vaccination</span>
                  </div>

                  <figure class="blogthumbnail">
                    <img src="https://img.freepik.com/free-photo/medical-equipment_53876-24740.jpg?size=626&ext=jpg" alt="blog-thumbnail">
                  </figure>
                </div>

                <div class="cardblog-body">
                  <h5 class="blogtitle">
                    রমজানের সুস্থতা-Healthy Ramadan Fasting Tips-Doctortodays
                  </h5>

                  <div class="bloginfos">
                    <p class="blogtext">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Qui omnis voluptatum dolore delectus nihil odit in dolorum et magni? Voluptate!
                    </p>
                  </div>

                  <ul class="bloglist">
                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                      </span>
                      <span class="author">
                        Rakibul Islam Rocky
                      </span>
                    </li>

                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                      </span>
                      <span class="author">
                        1 June 2023
                      </span>
                    </li>
                  </ul>

                  <span class="viewdetail">Read article</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="cardblog">
                <div class="cardblog-header">
                  <div class="tags">
                    <span class="tag">Surgery</span>
                    <span class="tag">Health</span>
                    <span class="tag">Psychology</span>
                    <span class="tag">Vaccination</span>
                  </div>

                  <figure class="blogthumbnail">
                    <img src="https://img.freepik.com/free-vector/female-doctor-working-laptop-character_603843-788.jpg?size=626&ext=jpg" alt="blog-thumbnail">
                  </figure>
                </div>

                <div class="cardblog-body">
                  <h5 class="blogtitle">
                    রমজানের সুস্থতা-Healthy Ramadan Fasting Tips-Doctortodays
                  </h5>

                  <div class="bloginfos">
                    <p class="blogtext">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Qui omnis voluptatum dolore delectus nihil odit in dolorum et magni? Voluptate!
                    </p>
                  </div>

                  <ul class="bloglist">
                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                      </span>
                      <span class="author">
                        Rakibul Islam Rocky
                      </span>
                    </li>

                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                      </span>
                      <span class="author">
                        1 June 2023
                      </span>
                    </li>
                  </ul>

                  <span class="viewdetail">Read article</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="cardblog">
                <div class="cardblog-header">
                  <div class="tags">
                    <span class="tag">Surgery</span>
                    <span class="tag">Health</span>
                    <span class="tag">Psychology</span>
                    <span class="tag">Vaccination</span>
                  </div>

                  <figure class="blogthumbnail">
                    <img src="https://img.freepik.com/premium-photo/telemedicine-service-online-video-call-doctor-actively-chat-with-patient_31965-21091.jpg?size=626&ext=jpg" alt="blog-thumbnail">
                  </figure>
                </div>

                <div class="cardblog-body">
                  <h5 class="blogtitle">
                    রমজানের সুস্থতা-Healthy Ramadan Fasting Tips-Doctortodays
                  </h5>

                  <div class="bloginfos">
                    <p class="blogtext">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Qui omnis voluptatum dolore delectus nihil odit in dolorum et magni? Voluptate!
                    </p>
                  </div>

                  <ul class="bloglist">
                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                      </span>
                      <span class="author">
                        Rakibul Islam Rocky
                      </span>
                    </li>

                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                      </span>
                      <span class="author">
                        1 June 2023
                      </span>
                    </li>
                  </ul>

                  <span class="viewdetail">Read article</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="cardblog">
                <div class="cardblog-header">
                  <div class="tags">
                    <span class="tag">Surgery</span>
                    <span class="tag">Health</span>
                    <span class="tag">Psychology</span>
                    <span class="tag">Vaccination</span>
                  </div>

                  <figure class="blogthumbnail">
                    <img src="https://img.freepik.com/free-photo/form-records-desk-pen-information_1232-4181.jpg?size=626&ext=jpg" alt="blog-thumbnail">
                  </figure>
                </div>

                <div class="cardblog-body">
                  <h5 class="blogtitle">
                    রমজানের সুস্থতা-Healthy Ramadan Fasting Tips-Doctortodays
                  </h5>

                  <div class="bloginfos">
                    <p class="blogtext">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Qui omnis voluptatum dolore delectus nihil odit in dolorum et magni? Voluptate!
                    </p>
                  </div>

                  <ul class="bloglist">
                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                      </span>
                      <span class="author">
                        Rakibul Islam Rocky
                      </span>
                    </li>

                    <li class="bloglist-item">
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        </svg>
                      </span>
                      <span class="author">
                        1 June 2023
                      </span>
                    </li>
                  </ul>

                  <span class="viewdetail">Read article</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- BLOG-SECTION END -->

    <!-- DOCTOR-INFO SECTION START -->
    <div class="doctorsinfo">
      <div class="container">
        <div class="row gy-5">
          <div class="col-md-8 col-lg-9 col-12">
            <div class="doctorlasts">
              <div class="doctorlasts-left">
                <div class="card-gallery">
                  <div class="card-gallery-header">
                    <figure class="card-thumbnail">
                      <img src="assets/images/doctors/doctor-3.png" alt="doctor-thumbnail">
                    </figure>
                  </div>

                  <div class="card-gallery-body">
                    <div class="doctorname">
                      <p class="name">ডাঃ মোঃ শরীফুল ইসলাম শরীফ</p>
                    </div>
                    <div class="doctorpost">
                      <p class="position">ক্যান্সার, অর্থোসার্জারী ও প্লাষ্টিক সার্জারি বিশেষজ্ঞ</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="doctorlasts-right">
                <div class="gallery-thumbs">
                  <div class="card-thumb">
                    <div class="card-thumb-header">
                      <figure class="card-thumbnail">
                        <img src="assets/images/doctors/doctor-1.png" alt="doctor-thumbnail">
                      </figure>
                    </div>
                    <div class="card-thumb-body">
                      <div class="doctorname">
                        <p class="name">ডাঃ মোঃ শরীফুল ইসলাম শরীফ</p>
                      </div>
                    </div>
                  </div>

                  <div class="card-thumb">
                    <div class="card-thumb-header">
                      <figure class="card-thumbnail">
                        <img src="assets/images/doctors/doctor-2.png" alt="doctor-thumbnail">
                      </figure>
                    </div>
                    <div class="card-thumb-body">
                      <div class="doctorname">
                        <p class="name">ডাঃ অমিত চন্দ্র দেব</p>
                      </div>
                    </div>
                  </div>

                  <div class="card-thumb">
                    <div class="card-thumb-header">
                      <figure class="card-thumbnail">
                        <img src="assets/images/doctors/doctor-3.png" alt="doctor-thumbnail">
                      </figure>
                    </div>

                    <div class="card-thumb-body">
                      <div class="doctorname">
                        <p class="name">ডাঃ মোঃ শামছুর রহমান</p>
                      </div>
                    </div>
                  </div>

                  <div class="card-thumb">
                    <div class="card-thumb-header">
                      <figure class="card-thumbnail">
                        <img src="assets/images/doctors/doctor-4.png" alt="doctor-thumbnail">
                      </figure>
                    </div>
                    <div class="card-thumb-body">
                      <div class="doctorname">
                        <p class="name">ডাঃ জোবাইদুল হক</p>
                      </div>
                    </div>
                  </div>

                  <div class="card-thumb">
                    <div class="card-thumb-header">
                      <figure class="card-thumbnail">
                        <img src="assets/images/doctors/doctor-5.png" alt="doctor-thumbnail">
                      </figure>
                    </div>
                    <div class="card-thumb-body">
                      <div class="doctorname">
                        <p class="name">ডাঃ মোঃ লুৎফর রহমান</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-3 col-12">
            <div class="categories">
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

                <li class="sidebarlist-item">
                  <a href="#" class="sidebarlist-link">
                    <span class="categorytitle">বিশেষজ্ঞ পুষ্টিবিদ</span>
                    <span class="categorycounter">(1)</span>
                  </a>
                </li>

                <li class="sidebarlist-item">
                  <a href="#" class="sidebarlist-link">
                    <span class="categorytitle">বিশেষজ্ঞ সার্জন</span>
                    <span class="categorycounter">(10)</span>
                  </a>
                </li>

                <li class="sidebarlist-item">
                  <a href="#" class="sidebarlist-link">
                    <span class="categorytitle">মাথা ও মনোরোগ বিশেষজ্ঞ</span>
                    <span class="categorycounter">(1)</span>
                  </a>
                </li>

                <li class="sidebarlist-item">
                  <a href="#" class="sidebarlist-link">
                    <span class="categorytitle">মেডিসিন বিশেষজ্ঞ</span>
                    <span class="categorycounter">(21)</span>
                  </a>
                </li>

                <li class="sidebarlist-item">
                  <a href="#" class="sidebarlist-link">
                    <span class="categorytitle">ল্যাপারোস্কোপিক সার্জন</span>
                    <span class="categorycounter">(1)</span>
                  </a>
                </li>

                <li class="sidebarlist-item">
                  <a href="#" class="sidebarlist-link">
                    <span class="categorytitle">শিশুরোগ বিশেষজ্ঞ</span>
                    <span class="categorycounter">(3)</span>
                  </a>
                </li>

                <li class="sidebarlist-item">
                  <a href="#" class="sidebarlist-link">
                    <span class="categorytitle">হাড়-ভাঙ্গা বিশেষজ্ঞ</span>
                    <span class="categorycounter">(4)</span>
                  </a>
                </li>

                <li class="sidebarlist-item">
                  <a href="#" class="sidebarlist-link">
                    <span class="categorytitle">হেড-নেক সার্জন</span>
                    <span class="categorycounter">(5)</span>
                  </a>
                </li>
              </ul>

              <div class="seeall">
                <a href="#" class="seeall-link">See All</a>
              </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <!-- DOCTOR-INFO SECTION END -->
  </main>
  <!-- MAIN-SECTION END -->
@endsection
