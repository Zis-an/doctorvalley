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
                            <input type="password" name="current_password" id="password" value="" class="form-control" autocomplete="off" required>
                            @if($errors->has('current_password'))
                                <p class="error-message">{{ $errors->first('current_password') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="inputbox">
                            <label for="address" class="inputlabel">New Password <span>*</span></label>
                            <input type="password" name="password" id="password" value="" class="form-control" autocomplete="off" required>
                                @if($errors->has('password'))
                                <p class="error-message">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="inputbox">
                            <label for="address" class="inputlabel">Confirm Password <span>*</span> </label>
                            <input type="password" name="password_confirmation" id="password" value="" class="form-control" autocomplete="off" required>
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
