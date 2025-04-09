@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="myprofile" id="main-section">
        <section class="doctorsingleinfo">
            @if(auth('admin')->check())
                <div class="info">
                    <div class="info-header">
                        <h3 class="infotitle">Frontend Feedback</h3>
                    </div>

                    @foreach($feedbacks as $feedback)
                        @if($feedback->type == 'frontend')
                            <div class="info-body">
                                <ul>
                                    @php
                                        // Extracting name, email, and phone number using regex
                                        $pattern = '/Name:\s*(.*?)(?=\s*Email:|$)/';
                                        preg_match($pattern, $feedback->feedback, $nameMatches);
                                        $name = !empty($nameMatches[1]) ? trim($nameMatches[1]) : 'Not Provided';

                                        $patternEmail = '/Email:\s*(.*?)(?=\s*Phone:|$)/';
                                        preg_match($patternEmail, $feedback->feedback, $emailMatches);
                                        $email = !empty($emailMatches[1]) ? trim($emailMatches[1]) : 'Not Provided';

                                        $patternPhone = '/Phone:\s*(.*?)(?=\s*Feedback:|$)/';
                                        preg_match($patternPhone, $feedback->feedback, $phoneMatches);
                                        $phone = !empty($phoneMatches[1]) ? trim($phoneMatches[1]) : 'Not Provided';

                                        // Remove name, email, and phone number from the original feedback message
                                        $cleanedFeedback = preg_replace([
                                            '/Name:\s*.*?(?=\s*Email:|$)/',
                                            '/Email:\s*.*?(?=\s*Phone:|$)/',
                                            '/Phone:\s*.*?(?=\s*Feedback:|$)/'
                                        ], '', $feedback->feedback);

                                        // Trim to remove any excess whitespace
                                        $cleanedFeedback = trim($cleanedFeedback);
                                    @endphp

                                    <li>
                                        <strong>Fullname:</strong> {{ $name }}
                                    </li>
                                    <li>
                                        <strong>E-mail:</strong> {{ $email }}
                                    </li>
                                    <li>
                                        <strong>Phone Number:</strong> {{ $phone }}
                                    </li>
                                    <li>
                                        <details>
                                            <strong>Message:</strong> {{ $cleanedFeedback }}
                                        </details>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif

            @if(auth('doctor')->check() || auth('admin')->check())
                <div class="info">
                    <div class="info-header">
                        <h3 class="infotitle">Doctor Feedback</h3>
                    </div>
                    @foreach($feedbacks as $feedback)
                        @if($feedback->feedbackable_class == 'doctor')
                            <div class="info-body">
                                <ul>
                                    @if(!auth('doctor')->check())
                                        <li>
{{--                                            <strong>Fullname:</strong> {{ $feedback->doctor->name ?? '' }}--}}
                                            <strong>Fullname:</strong> {{ $feedback->feedbackable->name ?? '' }}
                                        </li>
                                        <li>
{{--                                            <strong>E-mail:</strong> {{ $feedback->doctor->email ?? '' }}--}}
                                            <strong>E-mail:</strong> {{ $feedback->feedbackable->email ?? '' }}
                                        </li>
                                        <li>
{{--                                            <strong>Phone Number:</strong> {{ $feedback->doctor->phone ?? '' }}--}}
                                            <strong>Phone Number:</strong> {{ $feedback->feedbackable->phone ?? '' }}
                                        </li>
                                    @endif
                                    <details>
                                        <summary>{{ $feedback->type ?? '' }}</summary>
                                        <p>{{ $feedback->feedback ?? '' }}</p>
                                    </details>
                                </ul>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif

            @if(auth('chamber')->check() || auth('admin')->check())
                <div class="info">
                    <div class="info-header">
                        <h3 class="infotitle">Chamber Feedback</h3>
                    </div>
                    @foreach($feedbacks as $feedback)
                        @if($feedback->feedbackable_class == 'chamber')
                            <div class="info-body">
                                <ul>
                                    @if(!auth('chamber')->check())
                                        <li>
                                            <strong>Full Name:</strong> {{ $feedback->feedbackable->name ?? '' }}
                                        </li>
                                        <li>
                                            <strong>Chamber Name:</strong> {{ $feedback->feedbackable->chamber->chamber_name ?? '' }}
                                        </li>
                                        <li>
                                            <strong>E-mail:</strong> {{ $feedback->feedbackable->email ?? '' }}
                                        </li>
                                        <li>
                                            <strong>Phone Number:</strong> {{ $feedback->feedbackable->phone ?? '' }}
                                        </li>
                                    @endif
                                    <details>
                                        <summary>{{ $feedback->type ?? '' }}</summary>
                                        <p>{{ $feedback->feedback ?? '' }}</p>
                                    </details>
                                </ul>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif

        </section>
    </main>
    <!-- MAIN-SECTION END -->
@endsection
