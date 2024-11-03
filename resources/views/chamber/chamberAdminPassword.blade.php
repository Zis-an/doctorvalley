@extends('layouts.backend')
@section('content')
    <!-- MY-PROFILE SECTION START -->
    <main class="myprofile" id="main-section">
        <div class="personalinfo">
            <div class="myprofile-detail">
                <figure class="icon">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
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

                <div class="detail">
                    <h2 class="profile-title">CHANGE PASSWORD</h2>
                    <p class="profiletext">
                        Update your personal information here.
                        This will help us to show your profile with proper information.
                    </p>
                </div>
            </div>

            <x-message.alert></x-message.alert>


            @include('components.create-chamber-admin.chamber-admin-password')

        </div>
    </main>
    <!-- MY-PROFILE SECTION END -->
@endsection
