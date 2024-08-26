@extends('backoffice.doctor.createUpdateDoctor')
@section('tab-content')
    <div class="tab-pane fade show active" id="personalinformation-tab-pane" role="tabpanel"
        aria-labelledby="personalinformation-tab" tabindex="0">
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
                    <h2 class="profile-title">PERSONAL INFORMATION</h2>
                    <p class="profiletext">
                        Update your personal information here.
                        This will help us to show your profile with proper information.
                    </p>
                </div>
            </div>

            <div class="personalinfo-info">
                <div class="details">
                    <div class="details-body">
                        <!-- ADD-PERSONAL-INFORMATION -->
                        <form
                            action="{{ !empty($doctor) ? route('backoffice.doctor.update.personal', $doctor->id) : route('backoffice.doctor.store.personal') }}"
                            method="POST" class="educationinfoform" id="personalinfoform">
                            @if (!empty($doctor))
                                @method('PUT')
                            @endif
                            @csrf

                            <!-- Country ID -->
                            <input type="hidden" name="country_id" value="1">

                            <div class="row g-3">
                                <div class="col-md-6 col-12">
                                    <div class="inputbox">
                                        <label for="full-name" class="inputlabel">
                                            Full Name <span>*</span>
                                        </label>
                                        <input type="text" id="full-name" name="name"
                                            value="{{ !empty($doctor) ? $doctor->name : old('name') }}" class="form-control"
                                            placeholder="Dr Stephen Strange" autocomplete="off">
                                        @if ($errors->has('name'))
                                            <p class="error-message">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="inputbox">
                                        <label for="bmdcnumber" class="inputlabel">
                                            BMDC Registration No <span>*</span>
                                        </label>
                                        <input type="text" id="bmdcnumber" name="bmdc"
                                            value="{{ !empty($doctor) ? $doctor->bmdc : old('bmdc') }}" class="form-control"
                                            placeholder="A-40742" autocomplete="off">
                                        @if ($errors->has('bmdc'))
                                            <p class="error-message">{{ $errors->first('bmdc') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="inputbox">
                                        <label for="emailaddress" class="inputlabel">
                                            E-mail <span>*</span>
                                        </label>
                                        <input type="email" id="emailaddress" name="email"
                                            value="{{ !empty($doctor) ? $doctor->email : old('email') }}"
                                            class="form-control" placeholder="doctor.strange@gmail.com" autocomplete="off">
                                        @if ($errors->has('email'))
                                            <p class="error-message">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="inputbox">
                                        <label for="phonenumber" class="inputlabel">
                                            Phone Number <span>*</span>
                                        </label>
                                        <input type="tel" id="phonenumber"
                                            value="{{ !empty($doctor) ? $doctor->phone : old('phone') }}" name="phone"
                                            class="form-control" placeholder="01965088417" autocomplete="off">
                                        @if ($errors->has('phone'))
                                            <p class="error-message">{{ $errors->first('phone') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="gender">
                                        <label class="gender-title">
                                            Select Your Gender:
                                        </label>

                                        <div class="gender-box">
                                            <div class="gender-single">
                                                <input type="radio" id="male" name="gender" value="male"
                                                    {{ !empty($doctor) ? ($doctor->gender == 'male' ? 'checked' : '') : 'checked' }}
                                                    hidden>
                                                @if ($errors->has('gender'))
                                                    <p class="error-message">{{ $errors->first('gender') }}</p>
                                                @endif
                                                <label for="male">
                                                    <span class="icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.525 1.1331C15.7232 0.650955 16.1946 0.34024 16.7143 0.34024H22.7143C23.4268 0.34024 24 0.913455 24 1.62595V7.62595C24 8.1456 23.6893 8.61703 23.2071 8.81524C22.725 9.01345 22.1732 8.90631 21.8036 8.53667L20.0143 6.74738L17.1964 9.56524C18.2411 11.0867 18.8571 12.9242 18.8571 14.9117C18.8571 20.1188 14.6357 24.3402 9.42857 24.3402C4.22143 24.3402 0 20.1188 0 14.9117C0 9.70453 4.22143 5.4831 9.42857 5.4831C11.4107 5.4831 13.2536 6.09381 14.775 7.14381L17.5929 4.32595L15.8036 2.53667C15.4339 2.16703 15.3268 1.61524 15.525 1.1331ZM9.42857 20.9117C12.7446 20.9117 15.4286 18.2277 15.4286 14.9117C15.4286 11.5956 12.7446 8.91167 9.42857 8.91167C6.1125 8.91167 3.42857 11.5956 3.42857 14.9117C3.42857 18.2277 6.1125 20.9117 9.42857 20.9117Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <span class="gentext">Male</span>
                                                </label>
                                            </div>

                                            <div class="gender-single">
                                                <input type="radio" id="female" value="female"
                                                    {{ !empty($doctor) ? ($doctor->gender == 'female' ? 'checked' : '') : '' }}
                                                    name="gender" hidden>
                                                @if ($errors->has('gender'))
                                                    <p class="error-message">{{ $errors->first('gender') }}</p>
                                                @endif
                                                <label for="female">
                                                    <span class="icon">
                                                        <svg width="18" height="25" viewBox="0 0 18 25"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14.25 8.59024C14.25 11.4918 11.9016 13.8402 9 13.8402C6.09844 13.8402 3.75 11.4918 3.75 8.59024C3.75 5.68868 6.09844 3.34024 9 3.34024C11.9016 3.34024 14.25 5.68868 14.25 8.59024ZM10.5 16.7043C14.3391 16.0012 17.25 12.6356 17.25 8.59024C17.25 4.03399 13.5562 0.34024 9 0.34024C4.44375 0.34024 0.75 4.03399 0.75 8.59024C0.75 12.6356 3.66094 16.0012 7.5 16.7043V18.3402H6C5.17031 18.3402 4.5 19.0106 4.5 19.8402C4.5 20.6699 5.17031 21.3402 6 21.3402H7.5V22.8402C7.5 23.6699 8.17031 24.3402 9 24.3402C9.82969 24.3402 10.5 23.6699 10.5 22.8402V21.3402H12C12.8297 21.3402 13.5 20.6699 13.5 19.8402C13.5 19.0106 12.8297 18.3402 12 18.3402H10.5V16.7043Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <span class="gentext">Female</span>
                                                </label>
                                            </div>

                                            <div class="gender-single">
                                                <input type="radio" id="others" value="others" name="gender"
                                                    value="others"
                                                    {{ !empty($doctor) ? ($doctor->gender == 'others' ? 'checked' : '') : '' }}
                                                    hidden>
                                                @if ($errors->has('gender'))
                                                    <p class="error-message">{{ $errors->first('gender') }}</p>
                                                @endif
                                                <label for="others">
                                                    <span class="icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.25 0.34024C5.55469 0.34024 5.82656 0.523053 5.94375 0.804303C6.06094 1.08555 5.99531 1.40899 5.77969 1.61993L4.32656 3.07305L5.25 4.00118L5.57812 3.67305C6.01875 3.23243 6.73125 3.23243 7.16719 3.67305C7.60312 4.11368 7.60781 4.82618 7.16719 5.26212L6.83906 5.59024L7.55156 6.30274C8.79844 5.38399 10.3359 4.84024 12 4.84024C13.6641 4.84024 15.2016 5.38399 16.4484 6.30274L19.6734 3.07774L18.2203 1.62462C18.0047 1.40899 17.9438 1.08555 18.0563 0.80899C18.1688 0.532428 18.4453 0.344928 18.75 0.344928H23.25C23.6625 0.344928 24 0.682428 24 1.09493V5.59493C24 5.89962 23.8172 6.17149 23.5359 6.28868C23.2547 6.40587 22.9313 6.34024 22.7203 6.12462L21.2672 4.67149L18.0422 7.89649C18.9562 9.13868 19.5 10.6762 19.5 12.3402C19.5 16.0996 16.7344 19.2121 13.125 19.7559V20.5902H13.875C14.4984 20.5902 15 21.0918 15 21.7152C15 22.3387 14.4984 22.8402 13.875 22.8402H13.125V23.2152C13.125 23.8387 12.6234 24.3402 12 24.3402C11.3766 24.3402 10.875 23.8387 10.875 23.2152V22.8402H10.125C9.50156 22.8402 9 22.3387 9 21.7152C9 21.0918 9.50156 20.5902 10.125 20.5902H10.875V19.7559C7.26562 19.2121 4.5 16.0996 4.5 12.3402C4.5 10.6762 5.04375 9.13868 5.9625 7.8918L5.25 7.1793L4.92188 7.50743C4.48125 7.94805 3.76875 7.94805 3.33281 7.50743C2.89687 7.0668 2.89219 6.3543 3.33281 5.91837L3.66094 5.59024L2.73281 4.6668L1.27969 6.11993C1.06406 6.33555 0.740625 6.39649 0.464062 6.28399C0.1875 6.17149 0 5.89493 0 5.59024V1.09024C0 0.67774 0.3375 0.34024 0.75 0.34024H5.25ZM16.5 12.3402C16.5 9.85587 14.4844 7.84024 12 7.84024C9.51562 7.84024 7.5 9.85587 7.5 12.3402C7.5 14.8246 9.51562 16.8402 12 16.8402C14.4844 16.8402 16.5 14.8246 16.5 12.3402Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <span class="gentext">Others</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Speciality -->
                                {{-- <div class="col-12">
                                    <div class="inputbox">
                                        <label for="speciality" class="inputlabel">
                                            Speciality <span>*</span>
                                        </label>
                                        <input type="text" class="form-control" id="speciality" name="speciality[]"
                                            autocomplete="off">
                                            @if ($errors->has('speciality'))
                                            <p class="error-message">{{ $errors->first('speciality') }}</p>
                                        @endif
                                    </div>
                                </div> --}}

                                <!-- Province -->
                                <div class="col-md-6 col-12">
                                    <div class="inputbox">
                                        <label for="divisions" class="inputlabel">Division <span>*</span></label>
                                        <select id="divisions" name="province_id" class="wide">
                                            <option value="">Select Division</option>
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->id }}"
                                                    {{ !empty($doctor) ? ($doctor->province_id == $province->id ? 'selected' : '') : (old('province_id') == $province->id ? 'selected' : '') }}>
                                                    {{ $province->province_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('province_id'))
                                            <p class="error-message">{{ $errors->first('province_id') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <!-- City -->
                                <div class="col-md-6 col-12">
                                    <div class="inputbox">
                                        <label for="districts" class="inputlabel">District <span>*</span></label>
                                        <select id="districts" name="city_id" class="wide">
                                            <option value="">Select District</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}"
                                                    {{ !empty($doctor) ? ($doctor->city_id == $city->id ? 'selected' : '') : (old('city_id') == $city->id ? 'selected' : '') }}>
                                                    {{ $city->city_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('city_id'))
                                            <p class="error-message">{{ $errors->first('city_id') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <!-- Area -->
                                <div class="col-md-6 col-12">
                                    <div class="inputbox">
                                        <label for="thanas" class="inputlabel">Thana <span>*</span></label>
                                        <select id="thanas" name="area_id" class="wide">
                                            <option value="">Select Thana</option>
                                            @foreach ($areas as $area)
                                                <option value="{{ $area->id }}"
                                                    {{ !empty($doctor) ? ($doctor->area_id == $area->id ? 'selected' : '') : (old('area_id') == $area->id ? 'selected' : '') }}>
                                                    {{ $area->area_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('area_id'))
                                            <p class="error-message">{{ $errors->first('area_id') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="inputbox">
                                        <label for="address" class="inputlabel">
                                            Address
                                        </label>
                                        <input type="text" id="address" name="address"
                                            value="{{ !empty($doctor) ? $doctor->address : old('address') }}" class="form-control"
                                            placeholder="Sherpur Sadar, Sherpur" autocomplete="off">
                                        @if ($errors->has('address'))
                                            <p class="error-message">{{ $errors->first('address') }}</p>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-md-6 col-12">
                                    <div class="inputbox">
                                        <label for="password" class="inputlabel">
                                            Password
                                        </label>
                                        <input type="password" id="password" value="{{ !empty($doctor) ? $doctor->password : old('password') }}" name="password" class="form-control">
                                        @if ($errors->has('password'))
                                            <p class="error-message">{{ $errors->first('password') }}</p>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-md-6 col-12">
                                    <div class="inputbox">
                                        <label for="username" class="inputlabel">
                                            Username
                                        </label>
                                        <input type="text" id="username" name="username"
                                            value="{{ !empty($doctor) ? $doctor->username : old('username') }}" class="form-control">
                                        @if ($errors->has('username'))
                                            <p class="error-message">{{ $errors->first('username') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="inputbox">
                                        <label for="bio" class="inputlabel">
                                            Bio
                                        </label>
                                        <textarea id="bio" name="bio" class="form-control"
                                            placeholder="He is Marvel Universe doctor. who has the ability to do magic." rows="4" autocomplete="off">{{ !empty($doctor) ? $doctor->bio : old('bio') }}</textarea>
                                        @if ($errors->has('bio'))
                                            <p class="error-message">{{ $errors->first('bio') }}</p>
                                        @endif
                                    </div>
                                </div>

                                {{-- <div class="col-md-6 col-12">
                                    <div class="socialbox">
                                        <span class="icon">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </span>
                                        <div class="detail">
                                            <input type="text" name="links[]"
                                                placeholder="https://facebook.com/ratulalmamun" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="socialbox">
                                        <span class="icon">
                                            <i class="fa-brands fa-twitter"></i>
                                        </span>
                                        <div class="detail">
                                            <input type="text" name="links[]"
                                                placeholder="https://twitter.com/ratulalmamun" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="socialbox">
                                        <span class="icon">
                                            <i class="fa-brands fa-youtube"></i>
                                        </span>
                                        <div class="detail">
                                            <input type="text" name="links[]"
                                                placeholder="https://youtube.com/ratulalmamun" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="socialbox">
                                        <span class="icon">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </span>
                                        <div class="detail">
                                            <input type="text" name="links[]"
                                                placeholder="https://linkedin.com/ratulalmamun" autocomplete="off">
                                        </div>
                                    </div>
                                </div> --}}

                                @php
                                    $links = !empty($doctor) ? json_decode($doctor->links, true) : [];
                                @endphp

                                <div class="col-md-6 col-12">
                                    <div class="socialbox">
                                        <span class="icon">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </span>
                                        <div class="detail">
                                            <input type="text" name="links[]"
                                                placeholder="https://facebook.com/ratulalmamun"
                                                value="{{ $links[0] ?? '' }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="socialbox">
                                        <span class="icon">
                                            <i class="fa-brands fa-twitter"></i>
                                        </span>
                                        <div class="detail">
                                            <input type="text" name="links[]"
                                                placeholder="https://twitter.com/ratulalmamun"
                                                value="{{ $links[1] ?? '' }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="socialbox">
                                        <span class="icon">
                                            <i class="fa-brands fa-youtube"></i>
                                        </span>
                                        <div class="detail">
                                            <input type="text" name="links[]"
                                                placeholder="https://youtube.com/ratulalmamun"
                                                value="{{ $links[2] ?? '' }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="socialbox">
                                        <span class="icon">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </span>
                                        <div class="detail">
                                            <input type="text" name="links[]"
                                                placeholder="https://linkedin.com/ratulalmamun"
                                                value="{{ $links[3] ?? '' }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="inputbox">
                                        <label for="status" class="inputlabel">
                                            Status <span>*</span>
                                        </label>
                                        <select id="selectstatus" name="status" class="form-control" autocomplete="off">
                                            <option value="" disabled {{ empty($doctor) ? 'selected' : '' }}>Select Status</option>
                                            <option value="1" {{ !empty($doctor) && $doctor->status == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="2" {{ !empty($doctor) && $doctor->status == 2 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <p class="error-message">{{ $errors->first('status') }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="edubtns">
                                        <button type="submit" class="btn-profile-add">{{ !empty($doctor) ? "UPDATE" : "SAVE" }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
