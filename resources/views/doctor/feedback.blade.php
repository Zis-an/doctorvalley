@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="mainsection" id="main-section">
        <div class="row g-4">
            <div class="col-12">
                <form action="{{ route('feedback.store') }}" method="POST" class="feedbackform needs-validation" novalidate>
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="feedbackform-header">
                        <h2 class="feedback-title">
                            Feel free to drop us your <span>feedback</span>
                        </h2>
                        <div class="feedbackinfo">
                            <p class="feedback-text">
                                We would love to hear your thoughts, suggestions, concerns or problems with anything so we
                                can improve!
                            </p>
                        </div>
                    </div>

                    <div class="feedbackform-body">
                        <div class="inputbox">
                            <label for="feedbacktype" class="inputlabel">
                                Feedback type <span>*</span>
                            </label>
                            <input type="text" name="type" id="feedbacktype" class="form-control" placeholder="Dhaka Medical College"
                                autocomplete="off">
                            <div class="invalid-feedback">
                                Must give Feedback type
                            </div>
                        </div>

                        <div class="inputbox">
                            <label for="describefeed" class="inputlabel">
                                Describe Your Feedback <span>*</span>
                            </label>
                            <textarea id="describefeed" name="feedback" class="form-control" placeholder="Enter your message" rows="5"></textarea>
                            <div class="invalid-feedback">
                                Must give Feedback descriptions
                            </div>
                        </div>

                        <div class="submitbox">
                            <button type="submit" class="btn-submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- MAIN-SECTION END -->
@endsection
