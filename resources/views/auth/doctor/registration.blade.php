@extends('layouts.frontend')

@section('title', 'Doctor Sign Up')
@section('content')
    <main class="main">
        <!-- DOCTORS-TODAY SECTION START -->
        <section class="doctorstoday">
            <div class="container" >

                <div class="authentication-body" style="max-width: 40rem; margin: 0 auto;">
                    <h3 class="title text-center">Doctor Sign Up</h3>

                    <div class="">
                        <x-message.alert></x-message.alert>
                        <form class="authform" action="{{ route('doctor.registration') }}" method="POST">
                            @csrf

                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="inputbox">
                                        <label for="name" class="inputlabel">Name <span>*</span>
                                        </label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" autocomplete="off" value="{{ old('name') }}">
                                        @error('name')
                                        <p class="error-message">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="inputbox">
                                        <label for="bmdc" class="inputlabel">BMDC No. <span>*</span>
                                        </label>
                                        <input type="text" id="bmdc" name="bmdc" class="form-control" placeholder="Enter bmdc" autocomplete="off" value="{{ old('bmdc') }}">
                                        @error('bmdc')
                                        <p class="error-message">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="inputbox">
                                        <label for="email" class="inputlabel">Email <span>*</span>
                                        </label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" autocomplete="off" value="{{ old('email') }}">
                                        @error('email')
                                        <p class="error-message">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="inputbox">
                                        <label for="phone" class="inputlabel">Phone <span>*</span>
                                        </label>
                                        <input type="number" id="phone" name="phone" class="form-control" placeholder="Enter phone" autocomplete="off" value="{{ old('phone') }}">
                                        @error('phone')
                                        <p class="error-message">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="inputbox">
                                        <label for="password" class="inputlabel">Password <span>*</span></label>
                                        <div class="position-relative">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" autocomplete="off">
                                            <span class="position-absolute top-50 translate-middle-y" style="right: 10px; cursor: pointer;">
				                                <i class="fa fa-eye-slash toggle-password" data-target="#password" id="togglePasswordIcon"></i>
			                                </span>
                                        </div>
                                        @error('password')
                                        <p class="error-message">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="inputbox">
                                        <label for="pass_confirm" class="inputlabel">Confirm Password <span>*</span> </label>
                                        <div class="position-relative">
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Enter password" autocomplete="off">
                                            <span class="position-absolute top-50 translate-middle-y" style="right: 10px; cursor: pointer;">
				                                <i class="fa fa-eye-slash toggle-password" data-target="#password_confirmation" id="togglePasswordIcon"></i>
			                                </span>
                                        </div>
                                        @error('password_confirmation')
                                            <p class="error-message">{{ $message }}</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="checkfield">
                                            <label class="px-2">Already have an account?</label>
                                            <a href="{{ route('doctor.login') }}">Sign In</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center gap-3">
                                        <button type="submit" class="btn-submit">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('after-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.toggle-password').forEach(icon => {
                icon.addEventListener('click', function () {
                    const input = document.querySelector(this.getAttribute('data-target'));
                    const currentIcon = this;

                    if (input.getAttribute('type') === 'password') {
                        input.setAttribute('type', 'text');
                        currentIcon.classList.remove('fa-eye-slash');
                        currentIcon.classList.add('fa-eye');
                    } else {
                        input.setAttribute('type', 'password');
                        currentIcon.classList.remove('fa-eye');
                        currentIcon.classList.add('fa-eye-slash');
                    }
                });
            });
        });
    </script>
@endpush
