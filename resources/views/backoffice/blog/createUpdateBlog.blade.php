@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="mainsection" id="main-section">
        <div class="blog">
            <div class="blog-header flex-row">
                <div class="title-box">
                    <h5 class="blog-title">CREATE POST</h5>
                </div>

                {{-- <div class="rightinfo">
                    <button class="btn-publish">PUBLISH</button>
                    <button class="btn-update">UPDATE</button>
                </div> --}}
            </div>

            @include('components.create-blog.form')

        </div>
    </main>
    <!-- MAIN-SECTION END -->
@endsection

@push('after-scripts')
    <!-- CKEDITOR -->
  <script src="../../assets/js/ckeditor/ckeditor.js"></script>
  <script src="../../assets/js/editor/blog-editor.js"></script>
@endpush
