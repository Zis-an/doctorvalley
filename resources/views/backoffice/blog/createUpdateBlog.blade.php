@extends('layouts.backend')
@section('title', 'Blog Create')
@push('after-styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .error-message {
            color: hsl(0, 84%, 50%);
            font-family: "Inter", sans-serif;
            font-size: 0.75rem;
            font-weight: 400;
            font-style: normal;
            line-height: 1.4;
        }
    </style>
@endpush
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="mainsection" id="main-section">
        <div class="blog">
            <div class="blog-header flex-row">
                <div class="title-box">
                    <h5 class="blog-title">CREATE POST</h5>
                </div>
            </div>
            <x-message.alert></x-message.alert>

            @include('components.create-blog.form')

        </div>
    </main>
    <!-- MAIN-SECTION END -->
@endsection

@push('after-scripts')
    <!-- CKEDITOR -->
    <script src="{{ asset('assets//js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/editor/blog-editor.js') }}"></script>
    <script src="{{ asset('assets/js/tag-generator/tag-generator.js') }}"></script>
    <script src="{{ asset('assets/js/showhide/showhide.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('readUrl');
            const imagePreview = document.getElementById('uploadedImage');

            fileInput.addEventListener('change', function() {
                if (fileInput.files && fileInput.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                    }
                    reader.readAsDataURL(fileInput.files[0]);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                tags: true
            });
        });
    </script>
@endpush
