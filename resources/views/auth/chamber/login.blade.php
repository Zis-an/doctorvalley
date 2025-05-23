@extends('layouts.frontend')

@section('title', 'Chamber Sign in')
@section('content')
    <main class="main">
        <!-- DOCTORS-TODAY SECTION START -->
        <section class="doctorstoday">
            <div class="container" >

                <div class="authentication-body" style="max-width: 40rem; margin: 0 auto;">
                    <h3 class="title text-center">Chamber Sign In</h3>
                    <div class="authinfo">
                        <x-message.alert></x-message.alert>
                        <form class="authform" action="{{ route('chamber.login') }}" method="POST">
                            @csrf

                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="inputbox">
                                        <label for="username" class="inputlabel">
                                            E-mail <span>*</span>
                                        </label>
                                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter username or email" autocomplete="off">
                                        @error('username')
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
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="checkfield">
                                            <input type="checkbox" name="remember" value="1" class="checkinput" id="rememberme" autocomplete="off" hidden>
                                            <label for="rememberme" class="checklabel">
                                                Remember me
                                            </label>
                                        </div>

                                        <div class="checkfield">
                                            <label class="px-2">Don't have an account?</label>
                                            <a href="{{ route('chamber.registrationForm') }}">Sign Up</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center gap-3">
                                        <button type="submit" class="btn-submit">Sign In</button>
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
    </script>
@endpush
