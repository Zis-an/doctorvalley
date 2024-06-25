@php
use Illuminate\Support\Str;
$currentRouteName = Route::currentRouteName();
@endphp

@if(auth('admin')->user())
    @include('includes.sidebar.backoffice')
@endif

@if(auth('chamber')->user())
    @include('includes.sidebar.chamber')
@endif

@if(auth('doctor')->user())
    @include('includes.sidebar.doctor')
@endif


@if (Str::startsWith($currentRouteName, 'chamber'))
    @include('includes.sidebar.chamber')
@elseif (Str::startsWith($currentRouteName, 'doctor'))
    @include('includes.sidebar.doctor')
@else
    @include('includes.sidebar.backoffice')
@endif
