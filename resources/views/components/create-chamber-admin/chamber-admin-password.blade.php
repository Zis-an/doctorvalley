<div class="personalinfo-info">
    <div class="details">
        <div class="details-body">
            <!-- ADD-PERSONAL-INFORMATION -->
            <form action="{{route('chamber.admin.password.update') }}" method="POST" class="educationinfoform" id="personalinfoform">
                @csrf

                <div class="row g-3">

                    <input type="hidden" name="id" value="{{ auth('chamber')->user()->id }}">
                    <input type="hidden" name="chamber_id" value="{{ auth('chamber')->user()->chamber_id }}">

                    <div class="col-12">
                        <div class="inputbox">
                            <label for="current_password" class="inputlabel">Current Password <span>*</span></label>
                            <div class="position-relative">
                                <input type="password" name="current_password" id="password" class="form-control" placeholder="Enter password" autocomplete="off" required>
                                <span class="position-absolute top-50 translate-middle-y" style="right: 10px; cursor: pointer;">
				                    <i class="fa fa-eye-slash toggle-password" data-target="#password" id="togglePasswordIcon"></i>
			                    </span>
                            </div>
                            @if($errors->has('current_password'))
                                <p class="error-message">{{ $errors->first('current_password') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="inputbox">
                            <label for="address" class="inputlabel">New Password <span>*</span></label>
                            <div class="position-relative">
                                <input type="password" name="password" id="passwordNew" class="form-control" placeholder="Enter New password" autocomplete="off" required>
                                <span class="position-absolute top-50 translate-middle-y" style="right: 10px; cursor: pointer;">
                                    <i class="fa fa-eye-slash toggle-password-new" data-target="#passwordNew" id="togglePasswordIcon"></i>
                                </span>
                            </div>
                                @if($errors->has('password'))
                                <p class="error-message">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="inputbox">
                            <label for="address" class="inputlabel">Confirm Password <span>*</span> </label>
                            <div class="position-relative">
                                <input type="password" name="password_confirmation" id="passwordConfirm" class="form-control" placeholder="Enter password" autocomplete="off" required>
                                <span class="position-absolute top-50 translate-middle-y" style="right: 10px; cursor: pointer;">
                                    <i class="fa fa-eye-slash toggle-password-confirm" data-target="#passwordConfirm" id="togglePasswordIcon"></i>
                                </span>
                            </div>
                            @if($errors->has('password_confirmation'))
                                <p class="error-message">{{ $errors->first('password_confirmation') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="edubtns">
                            <button type="submit" class="btn-profile-add">Update</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


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

            document.querySelectorAll('.toggle-password-new').forEach(icon => {
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

            document.querySelectorAll('.toggle-password-confirm').forEach(icon => {
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
