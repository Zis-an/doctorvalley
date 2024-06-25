@extends('layouts.frontend')
@section('content')

<!-- BLOG-BANNER SECTION START -->
<section class="blogbanner" style="background: url({{ asset('assets/images/blogs/blog-hero-bg.jpg') }}) no-repeat center center/cover">
    <div class="container">
      <div class="blogbanner-content">
        <h1 class="banner-title">Our Blogs</h1>
      </div>
    </div>
    <div class="overlay"></div>
  </section>
  <!-- BLOG-BANNER SECTION END -->

<main class="main">
    <div class="myblogs">
      <div class="container">
        <div class="row g-lg-4 g-3">
          <!-- BLOG ITEM START -->
          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="card-article">
                <div class="card-article-header">
                  <img src="{{ asset('assets/images/blogs/blog-1.jpg') }}" alt="card-thumbnail">
                </div>

                <div class="card-article-body">
                  <div class="title-date">
                    <h4 class="title">Blog 1</h4>
                    <p class="date">Friday, 2 June 2023</p>
                  </div>

                  <div class="articledescript">
                    <p class="articletext">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde eligendi maxime, veritatis tempora veniam quas animi quaerat aut natus voluptatum illo sit nisi, similique sed neque! Nihil ad quasi consectetur!
                    </p>
                  </div>

                  <span class="articlelink">Read article -&gt;</span>
                </div>
              </div>
            </a>
          </div>
          <!-- BLOG ITEM END -->

          <!-- BLOG ITEM START -->
          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="card-article">
                <div class="card-article-header">
                  <img src="{{ asset('assets/images/blogs/blog-2.jpg') }}" alt="card-thumbnail">
                </div>

                <div class="card-article-body">
                  <div class="title-date">
                    <h4 class="title">Blog 2</h4>
                    <p class="date">Friday, 2 June 2023</p>
                  </div>

                  <div class="articledescript">
                    <p class="articletext">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde eligendi maxime, veritatis tempora veniam quas animi quaerat aut natus voluptatum illo sit nisi, similique sed neque! Nihil ad quasi consectetur!
                    </p>
                  </div>

                  <span class="articlelink">Read article -&gt;</span>
                </div>
              </div>
            </a>
          </div>
          <!-- BLOG ITEM END -->

          <!-- BLOG ITEM START -->
          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="card-article">
                <div class="card-article-header">
                  <img src="{{ asset('assets/images/blogs/blog-3.jpg') }}" alt="card-thumbnail">
                </div>

                <div class="card-article-body">
                  <div class="title-date">
                    <h4 class="title">Blog 3</h4>
                    <p class="date">Friday, 2 June 2023</p>
                  </div>

                  <div class="articledescript">
                    <p class="articletext">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde eligendi maxime, veritatis tempora veniam quas animi quaerat aut natus voluptatum illo sit nisi, similique sed neque! Nihil ad quasi consectetur!
                    </p>
                  </div>

                  <span class="articlelink">Read article -&gt;</span>
                </div>
              </div>
            </a>
          </div>
          <!-- BLOG ITEM END -->

          <!-- BLOG ITEM START -->
          <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <a href="{{ route('frontend.blog.details') }}" class="bloglink">
              <div class="card-article">
                <div class="card-article-header">
                  <img src="{{ asset('assets/images/blogs/blog-4.jpg') }}" alt="card-thumbnail">
                </div>

                <div class="card-article-body">
                  <div class="title-date">
                    <h4 class="title">Blog 4</h4>
                    <p class="date">Friday, 2 June 2023</p>
                  </div>

                  <div class="articledescript">
                    <p class="articletext">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde eligendi maxime, veritatis tempora veniam quas animi quaerat aut natus voluptatum illo sit nisi, similique sed neque! Nihil ad quasi consectetur!
                    </p>
                  </div>

                  <span class="articlelink">Read article -&gt;</span>
                </div>
              </div>
            </a>
          </div>
          <!-- BLOG ITEM END -->
        </div>
      </div>
    </div>

    <div class="blogdescript">
      <div class="container">
        <div class="card-bigblog">
          <div class="row gx-4 gy-0">
            <div class="col-lg-6 col-12">
              <div class="card-bigblog-thumbnail">
                <img src="{{ asset('assets/images/blogs/blog-7.jpg') }}" alt="blog-thumbnail">
              </div>
            </div>

            <div class="col-lg-6 col-12">
              <div class="card-bigblog-details">
                <div class="info">
                  <div class="info-head">
                    <h1 class="blogtitle">
                      The hidden struggle of working moms? Guilt. How to overcome it
                    </h1>
                    <p class="date">Friday, June 2 2023</p>
                  </div>

                  <div class="info-body">
                    <p class="blogtext">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lorem condimentum sed proin vitae eu. Consectetur diam mattis proin ut ut et Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur diam mattis proin ut ut et Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                  </div>
                </div>

                <div class="readinfo">
                  <a href="{{ route('frontend.blog.details') }}" class="btn-read">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="allblogs">
      <div class="container">
        <div class="allblogs-content">
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

          <div class="viewall">
            <a href="#" class="btn-viewall">View All</a>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
