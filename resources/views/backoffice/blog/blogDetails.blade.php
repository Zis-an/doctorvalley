@extends('layouts.backend')
@section('content')
    <main class="myprofile" id="main-section">
        <div class="myprofile-detail">
            <div class="d-flex justify-content-between w-100">
                <div class="d-flex align-items-center gap-3">
                    <figure class="icon">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="30" r="30" fill="#F04130" fill-opacity="0.2" />
                            <g clip-path="url(#usericon-1)">
                                <path
                                    d="M37.0625 19.5625C37.0625 23.1855 34.123 26.125 30.5 26.125C26.877 26.125 23.9375 23.1855 23.9375 19.5625C23.9375 15.9395 26.877 13 30.5 13C34.123 13 37.0625 15.9395 37.0625 19.5625ZM29.4062 29.9531V48L26.0977 46.3457C24.6689 45.6348 23.124 45.1836 21.5312 45.0264L14.9688 44.3701C13.8545 44.2539 13 43.3174 13 42.1895V28.3125C13 27.1025 13.9775 26.125 15.1875 26.125H17.2588C21.6064 26.125 25.8447 27.4648 29.4062 29.9531ZM31.5938 48V29.9531C35.1553 27.4648 39.3936 26.125 43.7412 26.125H45.8125C47.0225 26.125 48 27.1025 48 28.3125V42.1895C48 43.3105 47.1455 44.2539 46.0312 44.3633L39.4688 45.0195C37.8828 45.1768 36.3311 45.6279 34.9023 46.3389L31.5938 48Z"
                                    fill="#F04130" />
                            </g>
                            <defs>
                                <clipPath id="usericon-1">
                                    <rect width="35" height="35" fill="white" transform="translate(13 13)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </figure>

                    <div class="detail w-auto">
                        <h2 class="profile-title">BLOG DETAILS</h2>
                    </div>
                </div>

                <div class="filteroptions">
                    <button type="button" class="btn-search" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.9028 11.4444H12.1347L11.8625 11.1819C12.8153 10.0736 13.3889 8.63472 13.3889 7.06944C13.3889 3.57917 10.5597 0.75 7.06944 0.75C3.57917 0.75 0.75 3.57917 0.75 7.06944C0.75 10.5597 3.57917 13.3889 7.06944 13.3889C8.63472 13.3889 10.0736 12.8153 11.1819 11.8625L11.4444 12.1347V12.9028L16.3056 17.7542L17.7542 16.3056L12.9028 11.4444V11.4444ZM7.06944 11.4444C4.64861 11.4444 2.69444 9.49028 2.69444 7.06944C2.69444 4.64861 4.64861 2.69444 7.06944 2.69444C9.49028 2.69444 11.4444 4.64861 11.4444 7.06944C11.4444 9.49028 9.49028 11.4444 7.06944 11.4444Z"
                                fill="white" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="blogsearch px-4">
            <div class="collapse" id="collapseExample">
                <div class="searchform">
                    <button class="btn-search">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.9028 11.4444H12.1347L11.8625 11.1819C12.8153 10.0736 13.3889 8.63472 13.3889 7.06944C13.3889 3.57917 10.5597 0.75 7.06944 0.75C3.57917 0.75 0.75 3.57917 0.75 7.06944C0.75 10.5597 3.57917 13.3889 7.06944 13.3889C8.63472 13.3889 10.0736 12.8153 11.1819 11.8625L11.4444 12.1347V12.9028L16.3056 17.7542L17.7542 16.3056L12.9028 11.4444V11.4444ZM7.06944 11.4444C4.64861 11.4444 2.69444 9.49028 2.69444 7.06944C2.69444 4.64861 4.64861 2.69444 7.06944 2.69444C9.49028 2.69444 11.4444 4.64861 11.4444 7.06944C11.4444 9.49028 9.49028 11.4444 7.06944 11.4444Z"
                                fill="white"></path>
                        </svg>
                    </button>

                    <div class="mysearches">
                        <input type="search" placeholder="What are you looking for?" class="searchfield">
                    </div>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif (session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        <div class="me-4">
            {{-- Set as Featured button --}}
            <form action="{{ route('blog.featured', $blog->id) }}" method="POST" class="">
                @csrf
                <div class="col-12">
                    <div class="edubtns justify-content-end">
                        <button type="submit" class="btn-profile-add" style="width: 200px;">Set as Featured</button>
                        {{--                {{ $blog->featured_blog ? 'Unmark as Featured' : 'Set as Featured' }}--}}
                    </div>
                </div>
            </form>
        </div>

        <div class="mt-5 ms-5">
            <h5>{{ $blog->blog_title }}</h5>
            <hr class="me-5">
            <p class="me-5" style="text-align: justify">
                {{ strip_tags($blog->description) }}
            </p>
        </div>
    </main>
@endsection
