<div class="personalinfo-info">
    <div class="details">
        <div class="details-body">
            <!-- ADD-PERSONAL-INFORMATION -->
            <form action="{{route('chamber.admin.profile.update', $chamberAdmin->id) }}" method="POST" class="educationinfoform" id="personalinfoform">
                @if (!empty($chamberAdmin))
                    @method('PUT')
                @endif
                @csrf

                <input type="hidden" name="role_id" value="1">

                <div class="row g-3">
                    <div class="col-md-6 col-12">
                        <div class="inputbox">
                            <label for="name" class="inputlabel">
                                Name <span>*</span>
                            </label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ !empty($chamberAdmin) ? $chamberAdmin->name : old('name')}}"
                                placeholder="Alex Mercer" autocomplete="off">
                            @if($errors->has('name'))
                                <p class="error-message">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="inputbox">
                            <label for="username" class="inputlabel">
                                Username <span>*</span>
                            </label>
                            <input type="text" name="username" id="username" value="{{ !empty($chamberAdmin) ? $chamberAdmin->username : old('username') }}" class="form-control" placeholder="alex"
                                autocomplete="off">
                                @if($errors->has('username'))
                                <p class="error-message">{{ $errors->first('username') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="inputbox">
                            <label for="emailaddress" class="inputlabel">
                                E-mail <span>*</span>
                            </label>
                            <input type="email" name="email" id="emailaddress" value="{{ !empty($chamberAdmin) ? $chamberAdmin->email : old('email') }}" class="form-control"
                                placeholder="doctor.strange@gmail.com" autocomplete="off">
                                @if($errors->has('email'))
                                <p class="error-message">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="inputbox">
                            <label for="phonenumber" class="inputlabel">
                                Phone Number <span>*</span>
                            </label>
                            <input type="tel" name="phone" id="phonenumber" value="{{ !empty($chamberAdmin) ? $chamberAdmin->phone : old('phone') }}"
                                class="form-control" placeholder="01965088417" autocomplete="off">
                                @if($errors->has('phone'))
                                <p class="error-message">{{ $errors->first('phone') }}</p>
                            @endif
                        </div>
                    </div>

                    @php

                    @endphp

                    @if( auth('chamber')->check())
                    <input type="hidden" name="chamber_id" value="{{ auth('chamber')->user()->chamber_id }}">
                    @else
                    <div class=" {{ empty($chamberAdmin) ? 'col-md-6' : 'col-12' }} ">
                        <div class="inputbox">
                            <label for="chamber" class="inputlabel">
                                Chamber <span>*</span>
                            </label>
                            <select id="chamber" name="chamber_id" class="form-select" placeholder-text="Select Chamber"
                                autocomplete="off">
                                @foreach ($chambers as $chamber)
                                    <option value="{{ $chamber->id }}" {{ !empty($chamberAdmin) ? ($chamber->id == $chamberAdmin->chamber_id ? 'selected' : '') : '' }} class="select-dropdown__list-item">{{ $chamber->chamber_name }}</option>
                                @endforeach
                                @if($chambers->isEmpty())
                                    <option value="" class="select-dropdown__list-item" disabled>No Chambers Available</option>
                                @endif
                            </select>
                            @if($errors->has('chamber_id'))
                                <p class="error-message">{{ $errors->first('chamber_id') }}</p>
                            @endif
                        </div>
                    </div>
                    @endif

                    @if (empty($chamberAdmin))
                        <div class="{{ auth('chamber')->check() ? 'col-12' : 'col-md-6' }}">
                            <div class="inputbox">
                                <label for="address" class="inputlabel">Password</label>
                                <div class="position-relative">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" autocomplete="off">
                                    <span class="position-absolute top-50 translate-middle-y" style="right: 10px; cursor: pointer;">
				                        <i class="fa fa-eye-slash toggle-password" data-target="#password" id="togglePasswordIcon"></i>
			                        </span>
                                </div>
                                    @if($errors->has('password'))
                                    <p class="error-message">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                        </div>
                    @endif

                    <div class="col-12">
                        <div class="inputbox">
                            <label for="status" class="inputlabel">
                                Status <span>*</span>
                            </label>
                            <select id="selectstatus" name="status" class="form-control" autocomplete="off">
                                <option value="" selected disabled>Select Status</option>
                                <option value="1" {{ !empty($chamberAdmin) ? ($chamberAdmin->status == 1 ? 'selected' : '') : '' }}>Active</option>
                                <option value="2" {{ !empty($chamberAdmin) ? ($chamberAdmin->status == 2 ? 'selected' : '') : '' }}>Inactive</option>
                            </select>
                            {{-- <p class="error-message d-none">This field is required</p> --}}
                            @if ($errors->has('status'))
                                <p class="error-message">{{ $errors->first('status') }}</p>
                            @endif
                        </div>
                    </div>

{{--                    <div class="col-md-6 col-12">--}}
{{--                        <div class="inputbox">--}}
{{--                            <label for="username" class="inputlabel">--}}
{{--                                Role <span>*</span>--}}
{{--                            </label>--}}
{{--                            <input type="text" name="role_id" id="role" value="{{ !empty($chamberAdmin) ? $chamberAdmin->role_id : '' }}" class="form-control" placeholder="admin"--}}
{{--                                autocomplete="off">--}}
{{--                                @if($errors->has('role_id'))--}}
{{--                                <p class="error-message">{{ $errors->first('role_id') }}</p>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="col-12">
                        <div class="edubtns">
                            <button type="submit" class="btn-profile-add">{{ !empty($chamberAdmin) ? 'Update' : 'Save' }}</button>
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
        });
    </script>
@endpush
