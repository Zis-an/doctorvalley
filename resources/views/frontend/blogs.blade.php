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
            @foreach($blogs as $blog)
                <!-- BLOG ITEM START -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="{{ route('blog', $blog->id) }}" class="bloglink">
                        <div class="card-article">
                            <div class="card-article-header">
                                <img src="{{ asset('storage/' . $blog->thumb_path) }}" alt="card-thumbnail">
                            </div>
                            <div class="card-article-body">
                                <div class="title-date">
                                    <h4 class="title">{{ $blog->blog_title }}</h4>
                                    <p class="date">{{ $blog->created_at }}</p>
                                </div>

                                <div class="articledescript">
                                    <p class="articletext">
                                        {{ strip_tags($blog->description) }}
                                    </p>
                                </div>

                                <span class="articlelink">Read article -&gt;</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- BLOG ITEM END -->
            @endforeach
        </div>
      </div>
    </div>

    <div class="blogdescript">
      <div class="container">
        <div class="card-bigblog">
          <div class="row gx-4 gy-0">
            <div class="col-lg-6 col-12">
              <div class="card-bigblog-thumbnail">
                <img src="{{ asset('storage/' . $featured_blog->thumb_path) }}" alt="blog-thumbnail">
              </div>
            </div>

            <div class="col-lg-6 col-12">
              <div class="card-bigblog-details">
                <div class="info">
                  <div class="info-head">
                    <h1 class="blogtitle">
                      {{ $featured_blog->blog_title }}
                    </h1>
                    <p class="date">{{ \Carbon\Carbon::parse($featured_blog->created_at)->format('l F j, Y') }}</p>
                  </div>

                  <div class="info-body">
                    <p class="blogtext">
                        {{ strip_tags($featured_blog->description) }}
                    </p>
                  </div>
                </div>

                <div class="readinfo">
                  <a href="{{ route('blog', $featured_blog->id) }}" class="btn-read">Read More</a>
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

          <div class="viewall">
            <a href="#" class="btn-viewall">View All</a>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
