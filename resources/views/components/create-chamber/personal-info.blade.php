<div class="personalinfo-info">
    <div class="details">
        <div class="details-body">
            <!-- ADD-PERSONAL-INFORMATION -->
            <form action="{{ !empty($chamber) ? route('backoffice.chamber.update', $chamber->id) : route('backoffice.chamber.store') }}" method="POST" class="educationinfoform" id="personalinfoform">
                @if (!empty($chamber))
                    @method('PUT')
                @endif
                @csrf
                <div class="row g-3">
                    <div class="col-md-6 col-12">
                        <div class="inputbox">
                            <label for="chamber-name" class="inputlabel">
                                Chamber Name <span>*</span>
                            </label>
                            <input type="text" name="chamber_name" id="chamber-name" value="{{ !empty($chamber) ? $chamber->chamber_name : old('chamber_name') }}" class="form-control"
                                placeholder="Big pharma" autocomplete="off">
                            @if($errors->has('chamber_name'))
                                <p class="error-message">{{ $errors->first('chamber_name') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="inputbox">
                            <label for="regnumber" class="inputlabel">
                                Registration No <span>*</span>
                            </label>
                            <input type="text" name="reg_no" id="regnumber" value="{{ !empty($chamber) ? $chamber->reg_no : old('reg_no') }}" class="form-control" placeholder="A-40742"
                                autocomplete="off">
                                @if($errors->has('reg_no'))
                                <p class="error-message">{{ $errors->first('reg_no') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="inputbox">
                            <label for="emailaddress" class="inputlabel">
                                E-mail <span>*</span>
                            </label>
                            <input type="email" name="email" id="emailaddress" value="{{ !empty($chamber) ? $chamber->email : old('email') }}" class="form-control"
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
                            <input type="tel" name="phone_no" pattern="[0-9]{3}-[0-9]{8}" id="phonenumber" value="{{ !empty($chamber) ? $chamber->phone_no : old('phone_no') }}"
                                class="form-control" placeholder="01965088417" autocomplete="off">
                                @if($errors->has('phone_no'))
                                <p class="error-message">{{ $errors->first('phone_no') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="inputbox">
                            <label for="divisions" class="inputlabel">
                                Select Division <span>*</span>
                            </label>
                            <select id="divisions" name="province_id" class="wide" autocomplete="off">
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}" {{ !empty($chamber) ? ($chamber->province_id == $province->id ? 'Selected' : '') : '' }}>
                                        {{ $province->province_name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('province_id'))
                                <p class="error-message">{{ $errors->first('province_id') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="inputbox">
                            <label for="districts" class="inputlabel">
                                Select District <span>*</span>
                            </label>
                            <select id="districts" name="city_id" class="wide" autocomplete="off">
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}" {{ !empty($chamber) ? ($chamber->city_id == $city->id ? 'selected' : '') : '' }}>{{ $city->city_name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('city_id'))
                                <p class="error-message">{{ $errors->first('city_id') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="inputbox">
                            <label for="thanas" class="inputlabel">
                                Thana <span>*</span>
                            </label>
                            <select id="thanas" name="area_id" class="wide" autocomplete="off">
                                @foreach ($areas as $area)
                                    <option value="{{ $area->id }}" {{ !empty($chamber) ? ($chamber->area_id == $area->id ? 'selected' : '') : '' }}>{{ $area->area_name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('area_id'))
                                <p class="error-message">{{ $errors->first('area_id') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="inputbox">
                            <label for="address" class="inputlabel">
                                Address
                            </label>
                            <input type="text" name="address" id="address" value="{{ !empty($chamber) ? $chamber->address : old('address') }}" class="form-control"
                                placeholder="Sherpur Sadar, Sherpur" autocomplete="off">
                                @if($errors->has('address'))
                                <p class="error-message">{{ $errors->first('address') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="inputbox">
                            <label for="chambertype" class="inputlabel">
                                Chamber Type <span>*</span>
                            </label>
                            <select id="chambertype" name="chamber_type" class="form-select"
                                placeholder-text="Select Chamber Type" autocomplete="off">
                                @foreach ($chamber_types as $type)
                                    <option value="{{ $type }}" class="select-dropdown__list-item" {{ !empty($chamber) ? ($chamber->chamber_type == $type ? 'selected' : '') : '' }}>{{ $type }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('chamber_type'))
                                <p class="error-message">{{ $errors->first('chamber_type') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="inputbox">
                            <label for="description" class="inputlabel">
                                Description
                            </label>
                            <textarea id="description" name="description" class="form-control" placeholder="Enter description about your pharma" rows="4"
                                autocomplete="off">{{ !empty($chamber) ? $chamber->description : old('description') }}</textarea>
                            {{-- <p class="error-message d-none">This field is required</p> --}}
                        </div>
                    </div>

                    @php
                        $links = !empty($chamber) && !empty($chamber->links) ? json_decode($chamber->links, true) : [];
                    @endphp

                    <div class="col-md-6 col-12">
                        <div class="socialbox">
                            <span class="icon">
                                <i class="fa-brands fa-facebook-f"></i>
                            </span>

                            <div class="detail">
                                <input type="text" name="links[]" value="{{ $links[0] ?? old('links.0') }}" placeholder="https://facebook.com/ratulalmamun"
                                    autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="socialbox">
                            <span class="icon">
                                <i class="fa-brands fa-twitter"></i>
                            </span>

                            <div class="detail">
                                <input type="text" name="links[]" value="{{ $links[1] ?? old('links.1') }}" placeholder="https://twitter.com/ratulalmamun"
                                    autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="socialbox">
                            <span class="icon">
                                <i class="fa-brands fa-youtube"></i>
                            </span>

                            <div class="detail">
                                <input type="text" name="links[]" value="{{ $links[2] ?? old('links.2') }}" placeholder="https://youtube.com/ratulalmamun"
                                    autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="socialbox">
                            <span class="icon">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </span>

                            <div class="detail">
                                <input type="text" name="links[]" value="{{ $links[3] ?? old('links.3') }}" placeholder="https://linkedin.com/ratulalmamun"
                                    autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="inputbox">
                            <label for="status" class="inputlabel">
                                Status <span>*</span>
                            </label>
                            <select id="selectstatus" name="status" class="form-control" autocomplete="off">
                                <option value="" selected disabled>Select Status</option>
                                <option value="1" {{ !empty($chamber) ? ($chamber->status == 1 ? 'selected' : '') : '' }}>Active</option>
                                <option value="2" {{ !empty($chamber) ? ($chamber->status == 2 ? 'selected' : '') : '' }}>Inactive</option>
                            </select>
                            {{-- <p class="error-message d-none">This field is required</p> --}}
                            @if ($errors->has('status'))
                                <p class="error-message">{{ $errors->first('status') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="edubtns">
                            <button type="submit" class="btn-profile-add">{{ !empty($chamber) ? 'Update' : 'Save' }}</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
