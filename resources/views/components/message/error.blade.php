@if(session()->has('error'))
    <div class="alert alert-danger" role="alert">
        <strong>Error!</strong> {!! session()->get('error') !!}
    </div>
@endif


