@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="mainsection" id="main-section">
        <section class="chambersection">
            <div class="container">
                <div class="chambersection-details">
                    <div class="chambersection-header">
                        <h1 class="title">MY DOCTOR LIST</h1>
                    </div>


                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif (session('error'))
                        <div class="alert alert-error">{{ session('error') }}</div>
                    @endif


                    <div class="chambersection-body">
                        <div class="mydoctors">
                            @if(!empty($doctors))
                                @foreach($doctors as $doctor)
                                    <div class="mydoctor">
                                        <div class="mydoctor-detail">
                                            <figure class="thumb">
                                                <img src="{{ !empty($doctor->photo) ? asset('storage/' . $doctor->photo) :  '../assets/images/avatar/profile.svg' }}" alt="doctor-thumb">
                                            </figure>

                                            <div class="detail">
                                                <h5 class="name text-capitalize">{{ $doctor->name ?? '' }}</h5>
                                                <p class="text text-capitalize">
                                                    @if(!empty($doctor->experiences))
                                                        @foreach($doctor->experiences as $key => $experience)
                                                            @if($experience->current == 1)
                                                                {{ $experience->designation ?? '' }}@if($key != count($doctor->experiences) - 1), @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </p>

                                                @if(!empty($doctor->qualification))
                                                    <p class="text text-capitalize">
                                                        @foreach($doctor->qualification as $key => $qualification)
                                                            {{ $qualification->degree_id ?? '' }}@if($key != count($doctor->qualification) - 1), @endif
                                                        @endforeach
                                                    </p>
                                                @endif

                                                <p class="text text-capitalize">
                                                    @if(!empty($doctor->experiences))
                                                        @foreach($doctor->experiences as $key => $experience)
                                                            @if($experience->current == 1)
                                                                {{ $experience->organization_name ?? '' }}@if($key != count($doctor->experiences) - 1), @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </p>

                                                <div class="specilities text-capitalize">
                                                    @foreach($doctor->specialities->take(2) as $speciality)
                                                        <span class="speciality">{{ $speciality->speciality_name }}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="divider"></div>

                                        <div class="mydoctor-info">
                                            <a href="{{ route('chamber.schedule.create', $doctor->id) }}" class="btn-calendar">
                                        <span class="icon">
                                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.97489 10.4347H4.58984V12.8199H6.97489V10.4347Z"
                                                      fill="#3430F0" />
                                                <path d="M17.4085 10.4347H15.0234V12.8199H17.4085V10.4347Z"
                                                      fill="#3430F0" />
                                                <path d="M13.93 10.4347H11.5449V12.8199H13.93V10.4347Z" fill="#3430F0" />
                                                <path d="M6.97489 14.1614H4.58984V16.5466H6.97489V14.1614Z"
                                                      fill="#3430F0" />
                                                <path d="M13.93 14.1614H11.5449V16.5466H13.93V14.1614Z" fill="#3430F0" />
                                                <path d="M10.4534 14.1614H8.06836V16.5466H10.4534V14.1614Z"
                                                      fill="#3430F0" />
                                                <path d="M17.4085 17.8881H15.0234V20.2733H17.4085V17.8881Z"
                                                      fill="#3430F0" />
                                                <path d="M13.93 17.8881H11.5449V20.2733H13.93V17.8881Z" fill="#3430F0" />
                                                <path d="M10.4534 17.8881H8.06836V20.2733H10.4534V17.8881Z"
                                                      fill="#3430F0" />
                                                <path
                                                    d="M19.5902 2.58028H17.6507V4.43981C17.6507 5.13365 17.079 5.69793 16.3765 5.69793H13.8441C13.1415 5.69793 12.5699 5.13365 12.5699 4.43981V2.58028H9.42488V4.42232C9.42488 5.12582 8.84695 5.69793 8.13656 5.69793H5.63231C4.92192 5.69793 4.344 5.12582 4.344 4.42232V2.58028H2.4045C1.14328 2.58028 0.117188 3.59709 0.117188 4.84687V21.7334C0.117188 22.9831 1.14328 24 2.4045 24H19.5902C20.8533 24 21.881 22.9832 21.881 21.7334V4.84687C21.881 3.59714 20.8533 2.58028 19.5902 2.58028ZM20.2413 21.6894C20.2413 22.0906 19.9717 22.3601 19.5705 22.3601H2.4277C2.02645 22.3601 1.75688 22.0906 1.75688 21.6894V8.34792H20.2413V21.6894Z"
                                                    fill="#3430F0" />
                                                <path
                                                    d="M5.63252 4.80502H8.13527C8.34719 4.80502 8.51959 4.63378 8.51959 4.42327V0.960609C8.51959 0.430922 8.08506 0 7.55087 0H6.21686C5.68272 0 5.24805 0.430875 5.24805 0.960609V4.42327C5.24809 4.63378 5.4205 4.80502 5.63252 4.80502Z"
                                                    fill="#3430F0" />
                                                <path
                                                    d="M13.8441 4.80502H16.3765C16.5803 4.80502 16.7461 4.64034 16.7461 4.43817V0.945844C16.7461 0.424359 16.3182 0 15.7921 0H14.4285C13.9025 0 13.4746 0.424359 13.4746 0.945844V4.43817C13.4746 4.64034 13.6404 4.80502 13.8441 4.80502Z"
                                                    fill="#3430F0" />
                                            </svg>
                                        </span>
                                            </a>

                                            <button type="button" class="btn-delete delete__data" data-id="{{ $doctor->id }}" data-bs-toggle="modal" data-bs-target="#removeModal">
                                                <span class="delicon">
                                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19.5645 10.6084H8.90625V24.3164C8.90625 25.1426 9.58008 25.8105 10.4092 25.8105H19.5615C20.3936 25.8105 21.0674 25.1426 21.0674 24.3164V10.6113H19.5645V10.6084Z" fill="white" />
                                                        <path d="M21.9805 8.64844C21.9805 8.3877 21.7578 8.17676 21.4824 8.17676H8.49219C8.2168 8.17676 7.99414 8.3877 7.99414 8.64844V10.1396C7.99414 10.4004 8.2168 10.6113 8.49219 10.6113H21.4824C21.7578 10.6113 21.9805 10.4004 21.9805 10.1396V8.64844Z" fill="white" />
                                                        <path d="M21.4834 7.56738H18.3574V5.74219C18.3574 5.40527 18.085 5.13281 17.748 5.13281H12.2783C11.9414 5.13281 11.6689 5.40527 11.6689 5.74219V7.56738H8.49316C7.88379 7.56738 7.38867 8.05078 7.38867 8.64551V10.1367C7.38867 10.667 7.78418 11.1064 8.2998 11.1973V24.3164C8.2998 25.4766 9.24609 26.4199 10.4121 26.4199H19.5645C20.7305 26.4199 21.6768 25.4766 21.6768 24.3164V11.1973C22.1953 11.1064 22.5879 10.667 22.5879 10.1367V8.64551C22.5908 8.05371 22.0928 7.56738 21.4834 7.56738ZM12.8848 6.35156H17.1416V7.56738H12.8848V6.35156ZM8.60156 8.78613H21.3721V10.002H8.60156V8.78613ZM20.4609 24.3193C20.4609 24.8086 20.0596 25.207 19.5645 25.207H10.4121C9.91699 25.207 9.51562 24.8086 9.51562 24.3193V11.2178H20.4609V24.3193Z" fill="#F04130" />
                                                        <path d="M14.9883 23.4053C15.3252 23.4053 15.5977 23.1328 15.5977 22.7959V13.6758C15.5977 13.3389 15.3252 13.0664 14.9883 13.0664C14.6514 13.0664 14.3789 13.3389 14.3789 13.6758V22.7988C14.3789 23.1328 14.6514 23.4053 14.9883 23.4053ZM11.9473 23.4053C12.2842 23.4053 12.5566 23.1328 12.5566 22.7959V13.6758C12.5566 13.3389 12.2842 13.0664 11.9473 13.0664C11.6104 13.0664 11.3379 13.3389 11.3379 13.6758V22.7988C11.3408 23.1328 11.6133 23.4053 11.9473 23.4053ZM18.0293 23.4258C18.3662 23.4258 18.6387 23.1533 18.6387 22.8164V13.6934C18.6387 13.3564 18.3662 13.084 18.0293 13.084C17.6924 13.084 17.4199 13.3564 17.4199 13.6934V22.8164C17.4199 23.1533 17.6924 23.4258 18.0293 23.4258Z" fill="#F04130" />
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- MAIN-SECTION END -->

    <!-- CONFIRM-REMOVE MODAL -->
    <div class="modal fade" id="removeModal" tabindex="-1" aria-labelledby="removeModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Remove Doctor</h5>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this doctor from your list?</p>
                </div>
                <div class="modal-footer justify-content-end gap-3">
                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    <form id="deleteDoctorForm" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-remove">Remove</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function () {
            $('.delete__data').on('click', function(e) {
                e.preventDefault();
                const doctorId = $(this).data('id');
                const actionUrl = "{{ route('chamber.doctor.delete', '#id') }}".replace('#id', doctorId);
                $('#deleteDoctorForm').attr('action', actionUrl);
            });
        });
    </script>

@endpush
