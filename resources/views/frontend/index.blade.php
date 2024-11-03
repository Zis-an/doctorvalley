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
                  @foreach($schedules as $schedule)
                      @if($schedule->schedule_day == $today)
                          @foreach($doctors as $doctor)
                              @if($doctor->id == $schedule->doctor_id)
                                  <div class="swiper-slide">
                                      <a href="{{ route('doctor', $doctor->id) }}" class="slidelink">
                                          <div class="card-doctor">
                                              <div class="card-doctor-header">
                                                  <img src="{{ asset('storage/' . $doctor->photo) }}" alt="doctor-thumbnail">
                                              </div>
                                              <div class="card-doctor-body">
                                                  <div class="name-status">
                                                      <h5 class="name">{{ $doctor->name }}</h5>
                                                      <span class="status active"></span>
                                                  </div>
                                                  <p class="position">
                                                      @php $count = 0; @endphp
                                                      @foreach($doctorSpecialities as $docSpec)
                                                          @if($docSpec->doctor_id == $doctor->id && $count < 3)
                                                              {{ $docSpec->speciality->speciality_name ?? 'Speciality not found' }}
                                                              @php $count++; @endphp
                                                              @if($count < 3 && $loop->remaining > 0), @endif
                                                          @endif
                                                      @endforeach
                                                  </p>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                              @endif
                          @endforeach
                      @endif
                  @endforeach
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
              <a href="{{ route('doctors') }}" class="btn-link">Active Doctors</a>
            </div>
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

        <div class="row g-3 w-100 justify-content-start">
            @foreach($blogs as $blog)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="{{ route('blog', $blog->id) }}" class="bloglink">
                        <div class="cardblog">
                            <div class="cardblog-header">
                                <div class="tags">
                                    @if (!empty($blog->tags))
                                        @foreach (explode(',', $blog->tags) as $tag)
                                            <span class="tag">{{ $tag }}</span>
                                        @endforeach
                                    @endif
                                </div>

                                <figure class="blogthumbnail">
                                    <img src="{{ asset('storage/' . $blog->thumb_path) }}" alt="blog-thumbnail">
                                </figure>
                            </div>

                            <div class="cardblog-body">
                                <h5 class="blogtitle">
                                    {{ $blog->blog_title }}
                                </h5>

                                <div class="bloginfos">
                                    <p class="blogtext">
                                        {{ strip_tags($blog->description) }}
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
                          {{ $blog->authorable->name }}
                        </span>
                                    </li>

                                    <li class="bloglist-item">
                        <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                          </svg>
                        </span>
                                        <span class="author">
                          {{ \Carbon\Carbon::parse($blog->created_at)->format('l F j, Y') }}
                        </span>
                                    </li>
                                </ul>

                                <span class="viewdetail">Read article</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
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
                @foreach($doctors as $doctor)
                    @if($doctor->priority == 1)
                        <div class="doctorlasts-left">
                            <div class="card-gallery">
                                <div class="card-gallery-header">
                                    <figure class="card-thumbnail">
                                        <img src="{{ asset('storage/' . $doctor->photo) }}" alt="doctor-thumbnail">
                                    </figure>
                                </div>

                                <div class="card-gallery-body">
                                    <div class="doctorname">
                                        <p class="name">{{ $doctor->name }}</p>
                                    </div>
                                    <div class="doctorpost">
{{--                                        <p class="position">--}}
{{--                                            @foreach($doctorSpecialities as $docSpec)--}}
{{--                                                @if($docSpec->doctor_id == $doctor->id)--}}
{{--                                                    {{ $docSpec->speciality->speciality_name ?? 'Speciality not found' }} <br/>--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </p>--}}
                                        <p class="position">
                                            @php $count = 0; @endphp
                                            @foreach($doctorSpecialities as $docSpec)
                                                @if($docSpec->doctor_id == $doctor->id && $count < 3)
                                                    {{ $docSpec->speciality->speciality_name ?? 'Speciality not found' }}
                                                    @php $count++; @endphp
                                                    @if($count < 3 && $loop->remaining > 0), @endif
                                                @endif
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach


              <div class="doctorlasts-right">
                <div class="gallery-thumbs">
                  @foreach($doctors as $doctor)
                      @if($doctor->priority != 1)
                        <div class="card-thumb">
                            <div class="card-thumb-header">
                                <figure class="card-thumbnail">
                                    <img src="{{ asset('storage/' . $doctor->photo) }}" alt="doctor-thumbnail">
                                </figure>
                            </div>
                            <div class="card-thumb-body">
                                <div class="doctorname">
                                    <p class="name">{{ $doctor->name }}</p>
                                </div>
                            </div>
                        </div>
                      @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-3 col-12">
            <div class="categories">
{{--                <ul class="sidebarlist">--}}
{{--                    @foreach($specialities as $speciality)--}}
{{--                        <li class="sidebarlist-item">--}}
{{--                            <a href="{{ route('doctors', ['specialities' => $speciality->id]) }}" class="sidebarlist-link">--}}
{{--                                <span class="categorytitle">{{ $speciality->speciality_name }}</span>--}}
{{--                                @foreach($doctorCounts as $count)--}}
{{--                                    @if($count->speciality_id == $speciality->id)--}}
{{--                                        <span class="categorycounter">({{ $count->doctor_count }})</span>--}}
{{--                                    @endif--}}
{{--                                @endforeach--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}

                <ul class="sidebarlist">
                    @foreach($specialities as $speciality)
                        @php
                            $doctorCount = $doctorCounts->firstWhere('speciality_id', $speciality->id);
                        @endphp

                        @if($doctorCount && $doctorCount->doctor_count > 0)
                            <li class="sidebarlist-item">
                                <a href="{{ route('doctors', ['specialities' => $speciality->id]) }}" class="sidebarlist-link">
                                    <span class="categorytitle">{{ $speciality->speciality_name }}</span>
                                    <span class="categorycounter">({{ $doctorCount->doctor_count }})</span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
                <div class="seeall">
                <a href="{{ route('doctors') }}" class="seeall-link">See All</a>
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
