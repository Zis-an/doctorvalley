@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="mainsection" id="main-section">
        <div class="row g-4">
            <div class="col-12">
                <div class="scheduletable">
                    <div class="scheduletable-header">
                        <h4 class="title">Weekly Schedule</h4>
                    </div>

                    <div class="scheduletable-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" aria-describedby="table">
                                @foreach($scheduleDays as $dayKey => $day)
                                    <tr>
                                        <th scope="row">{{ ucfirst($day) }}</th>
                                        <td class="px-0">
                                            <div class="docschedules">
                                                @if(isset($weeklySchedules[$dayKey]))
                                                    @foreach($weeklySchedules[$dayKey] as $schedule)
                                                        <div class="detail">
                                                            @if ($schedule->doctor)
                                                                <h5 class="name text-capitalize">{{ $schedule->doctor->name }}</h5>
                                                                <span class="time">
                                    {{ \Carbon\Carbon::parse($schedule->start_from)->format('g:i A') }} -
                                    {{ \Carbon\Carbon::parse($schedule->end_from)->format('g:i A') }}
                                </span>
                                                            @else
                                                                <h5 class="name">Doctor Not Found</h5>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="detail">
                                                        <h5 class="name">No doctors scheduled</h5>
                                                    </div>
                                                @endif
                                            </div>
                                        </td>

                                        <td class="px-0">
                                            <div class="docschedules">
                                                @if(isset($weeklySchedules[$dayKey]))
                                                    @foreach($weeklySchedules[$dayKey] as $schedule)
                                                        <div class="detail">
                                                            @if ($schedule->doctor)
                                                                <div class="specialities d-flex gap-2">
                                                                    @foreach($schedule->doctor->specialities as $speciality)
                                                                        <span class="speciality text-capitalize">{{ $speciality->speciality_name }}</span>
                                                                    @endforeach
                                                                </div>
                                                            @else
                                                                <h5 class="name">No speciality found</h5>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="detail">
                                                        <h5 class="name">No speciality found</h5>
                                                    </div>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN-SECTION END -->
@endsection
