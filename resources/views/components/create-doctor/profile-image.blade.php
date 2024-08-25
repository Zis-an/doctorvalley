@extends('backoffice.doctor.createUpdateDoctor')
@section('tab-content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="tab-pane fade show active" id="userprofileimage-tab-pane" role="tabpanel" aria-labelledby="userprofileimage-tab"
        tabindex="0">
        <div class="profileimage">
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
                    <h2 class="profile-title">PROFILE IMAGE</h2>
                    <p class="profiletext">
                        Update your profile image here.
                        This will help us to show your profile with proper image.
                    </p>
                </div>
            </div>

            <div class="profileimage-info">
                <div class="details emptyprofile">
                    <figure class="default-thumb">
                        <form id="profileImageForm" action="{{ route('backoffice.doctor.store.image') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <img src="{{ asset('assets/images/avatar/default-profile.svg') }}" alt="default-profile"
                                id="uploadedImage" class="default-image">
                            <!-- Doctor ID -->
                            <input type="hidden" id="personal-info-id" value="{{ $_GET['doctor_id'] }}" name="doctor_id">
                            <input type="file" id="profileImage" name="photo" multiple hidden>
                            <label for="profileImage" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Upload Profile">
                                <svg width="56" height="57" viewBox="0 0 56 57" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M55.5 28.4C55.5 43.8154 43.1811 56.2999 28 56.2999C12.8188 56.2999 0.5 43.8154 0.5 28.4C0.5 12.9845 12.8188 0.5 28 0.5C43.1811 0.5 55.5 12.9845 55.5 28.4Z"
                                        fill="#707070" stroke="white" />
                                    <path
                                        d="M31.0119 22.9519L32.3473 24.3064L19.1972 37.6462H17.8619V36.2916L31.0119 22.9519ZM36.2371 14.0881C35.8743 14.0881 35.4969 14.2354 35.2211 14.5151L32.565 17.2096L38.0079 22.731L40.664 20.0365C41.2301 19.4623 41.2301 18.5347 40.664 17.9605L37.2677 14.5151C36.9774 14.2206 36.6145 14.0881 36.2371 14.0881ZM31.0119 18.785L14.959 35.0695V40.591H20.4019L36.4548 24.3064L31.0119 18.785Z"
                                        fill="white" />
                                </svg>
                            </label>
                        </form>
                    </figure>

                    <div class="empty-info">
                        <p>You don't have any photo</p>
                        <p>Please upload photo By CliCKING EDIT ICON AND THEN CLICK UPDATE IMAGE BUTTON</p>
                    </div>

                    <div class="updateinfo">
                        <button type="submit" id="updateImageButton" class="btn-update">UPDATE IMAGE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
