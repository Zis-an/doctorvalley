@if($errors->any())
    <div class="alert alert-warning" role="alert">
        <h4 class="alert-heading">Something Wrong!</h4>
        <ul>
            @foreach($errors->all() as $error)
                <li class="inline-flex items-center w-full">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>

@endif

