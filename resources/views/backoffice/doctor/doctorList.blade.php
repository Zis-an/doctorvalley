@extends('layouts.backend')

@push('after-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select/nice-select2.css') }}">
@endpush

@section('content')

    <!-- MAIN-SECTION START -->
    <main class="myprofile" id="main-section">
        <div class="personalinfo">
            <div class="myprofile-detail">
                <div class="d-flex justify-content-between w-100">
                    <div class="d-flex align-items-center gap-3">
                        <figure class="icon">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
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

                        <div class="detail w-auto">
                            <h2 class="profile-title">DOCTOR LIST</h2>
                        </div>
                    </div>

                    <div class="filteroptions">
                        <button type="button" class="btn-search" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.9028 11.4444H12.1347L11.8625 11.1819C12.8153 10.0736 13.3889 8.63472 13.3889 7.06944C13.3889 3.57917 10.5597 0.75 7.06944 0.75C3.57917 0.75 0.75 3.57917 0.75 7.06944C0.75 10.5597 3.57917 13.3889 7.06944 13.3889C8.63472 13.3889 10.0736 12.8153 11.1819 11.8625L11.4444 12.1347V12.9028L16.3056 17.7542L17.7542 16.3056L12.9028 11.4444V11.4444ZM7.06944 11.4444C4.64861 11.4444 2.69444 9.49028 2.69444 7.06944C2.69444 4.64861 4.64861 2.69444 7.06944 2.69444C9.49028 2.69444 11.4444 4.64861 11.4444 7.06944C11.4444 9.49028 9.49028 11.4444 7.06944 11.4444Z"
                                    fill="white" />
                            </svg>
                        </button>

                        <button class="btn-filter" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileFilter"
                            aria-controls="mobileFilter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-funnel-fill" viewBox="0 0 16 16">
                                <path
                                    d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <x-message.alert></x-message.alert>

            <form action="{{ route('doctor.index') }}" method="GET">
                <div class="blogsearch px-4">
                    <div class="collapse" id="collapseExample">
                        <div class="searchform">
                            <button type="submit" class="btn-search">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.9028 11.4444H12.1347L11.8625 11.1819C12.8153 10.0736 13.3889 8.63472 13.3889 7.06944C13.3889 3.57917 10.5597 0.75 7.06944 0.75C3.57917 0.75 0.75 3.57917 0.75 7.06944C0.75 10.5597 3.57917 13.3889 7.06944 13.3889C8.63472 13.3889 10.0736 12.8153 11.1819 11.8625L11.4444 12.1347V12.9028L16.3056 17.7542L17.7542 16.3056L12.9028 11.4444V11.4444ZM7.06944 11.4444C4.64861 11.4444 2.69444 9.49028 2.69444 7.06944C2.69444 4.64861 4.64861 2.69444 7.06944 2.69444C9.49028 2.69444 11.4444 4.64861 11.4444 7.06944C11.4444 9.49028 9.49028 11.4444 7.06944 11.4444Z"
                                        fill="white"></path>
                                </svg>
                            </button>

                            <div class="mysearches">
                                <input type="search" name="search_doctor" value="{{ request('search_doctor') }}" placeholder="What are you looking for?" class="searchfield">
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <form action="{{ route('doctor.index') }}" method="GET">

                <div class="mobilefilter">
                    <!-- FILTER-OFFCANVAS -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileFilter" aria-labelledby="mobileFilter">
                        <div class="offcanvas-header">
                            <h5 class="text-white">Filter Doctors</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                </svg>
                            </button>
                        </div>

                        <div class="offcanvas-body">
                            <div class="filter d-flex flex-column gap-3">
                                <div class="inputbox">
                                    <label for="specialities" class="inputlabel text-white">DOCTOR</label>
                                    <select id="specialities" name="speciality_id" class="text-capitalize wide" autocomplete="off">
                                        <option selected disabled>Select Speciality</option>
                                        @if(!empty($specialities))
                                            @foreach($specialities as $speciality)
                                                <option value="{{$speciality->id}}"
                                                    {{!empty($_GET['speciality_id']) && $_GET['speciality_id'] == $speciality->id ? 'selected' : '' }}>{{$speciality->speciality_name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="inputbox">
                                    <label for="divisions" class="inputlabel text-white">Division</label>
                                    <select id="divisions" name="province_id" autocomplete="off" class="wide">
                                        <option class="" selected disabled>Select Division</option>
                                        @if(!empty($provinces))
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->id }}"
                                                    {{ !empty($_GET['province_id']) && $_GET['province_id'] == $province->id ? 'selected' : '' }}>{{ $province->province_name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="inputbox">
                                    <label for="districts" class="inputlabel text-white">District </label>
                                    <select id="districts" name="city_id" class="wide">
                                        <option value="" selected disabled>Select District</option>
                                        @if(!empty($cities))
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}"
                                                    {{ !empty($_GET['city_id']) && $_GET['city_id'] == $city->id ? 'selected' : '' }}>
                                                    {{ $city->city_name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="inputbox">
                                    <label for="thanas" class="inputlabel text-white">Thana </label>
                                    <select id="thanas" name="area_id" class="wide">
                                        <option value="" selected disabled>Select Thana</option>
                                        @if(!empty($areas))
                                            @foreach ($areas as $area)
                                                <option value="{{ $area->id }}"
                                                    {{ !empty($_GET['area_id']) && $_GET['area_id'] == $area->id ? 'selected' : '' }}>
                                                    {{ $area->area_name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-12 edubtns">
                                        <button type="submit" class="btn-profile-add">Filter</button>
                                    </div>
                                    <div class="col-md-6 col-12 edubtns">
                                        <a href="{{ route('doctor.index') }}"class="btn-profile-add">Clear</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            <div class="personalinfo-info">
                <div class="details align-items-start">
                    <div class="details-body w-100">
                        <div class="table-responsive">
                            <table class="table" aria-describedby="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">BMDC No.</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">View</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($doctors))
                                        @foreach ($doctors as $key => $doctor)
                                            <tr>
                                                <th scope="row">{{ ($doctors->currentPage() - 1) * $doctors->perPage() + $loop->iteration }}</th>
                                                <td>{{ $doctor->name }}</td>
                                                {{-- <td>{{ $designations[$doctor->id]->designation ?? 'N/A' }}</td> --}}
                                                <td>{{ $doctor->bmdc }}</td>
                                                <td>{{ $doctor->email }}</td>
                                                <td>{{ $doctor->phone }}</td>
                                                <td>{{ $doctor->priority ?? 'Not Set' }}</td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="{{ route('doctor.info', $doctor->id) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="View Doctor" class="btn-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-eye-fill"
                                                                viewBox="0 0 16 16">
                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                                <path
                                                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="{{ route('doctor.profile.personal.edit', $doctor->id) }}"
                                                            class="btn-action">
                                                            <svg data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Edit Personal Informations"
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg>
                                                        </a>
                                                        <a href="{{ route('doctor.profile.educational.edit', $doctor->id) }}"
                                                           class="btn-action">
                                                            <svg data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 data-bs-title="Edit Educational Informations"
                                                                 xmlns="http://www.w3.org/2000/svg" width="16"
                                                                 height="16" fill="currentColor"
                                                                 class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd"
                                                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg>
                                                        </a>
                                                        <a href="{{ route('doctor.profile.professional.edit', $doctor->id) }}"
                                                            class="btn-action">
                                                            <svg data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Edit Professional Informations"
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg>
                                                        </a>
                                                        <a href="{{ route('doctor.profile.image.edit', $doctor->id) }}"
                                                            class="btn-action">
                                                            <svg data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Edit Doctor Image"
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg>
                                                        </a>

                                                        <button type="button" class="btn-action" data-bs-toggle="modal"
                                                             data-bs-target="#confirmModal{{ $doctor->id }}" >
                                                            <svg data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete Doctor"
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-trash"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                                <path
                                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                                <!-- DELETE-CONFIRM MODAL STARTS -->
                                                <div class="modal fade pe-0"  id="confirmModal{{ $doctor->id }}"  tabindex="-1"
                                                    aria-labelledby="confirmModal" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <h5 class="delete-title">Are you sure you want to delete
                                                                     {{ $doctor->name }}
                                                                    ?</h5>
                                                            </div>
                                                            <div class="modal-footer justify-content-end gap-3">
                                                                <form  action="{{ route('doctor.delete', $doctor->id) }}"  method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn-remove">Delete</button>
                                                                </form>
                                                                <button type="button" class="btn-cancel"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- DELETE-CONFIRM MODAL ENDS -->
                                            </tr>
                                        @endforeach
                                    @else
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="mt-5 d-flex justify-content-center">
                    <nav aria-label="Page navigation example" aria-labelledby="nav">
                        <x-pagination :items="$doctors" />

                    </nav>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN-SECTION END -->
@endsection


@push('after-scripts')
    <script src="{{ asset('assets/js/tag-generator/tag-generator.js') }}"></script>
    <script src="{{ asset('assets/js/showhide/showhide.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select/nice-select2.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select/doctorselect.js') }}"></script>
@endpush

