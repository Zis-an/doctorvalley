@extends('layouts.guest')

@section('title', 'Sign in')
@section('content')
    <div class="authentication-body">
        <h3 class="title text-center">Sign In</h3>

        <div class="authinfo">
            <x-message.alert></x-message.alert>
            <form class="authform" action="{{ route('admin.login') }}" method="POST">
                @csrf

                <div class="row g-4">
                    <div class="col-12">
                        <div class="inputbox">
                            <label for="username" class="inputlabel">
                                Username or e-mail <span>*</span>
                            </label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Enter username or email" autocomplete="off">
                            @error('username')
                            <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="inputbox">
                            <label for="password" class="inputlabel">
                                Password <span>*</span>
                            </label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" autocomplete="off">
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
@endsection