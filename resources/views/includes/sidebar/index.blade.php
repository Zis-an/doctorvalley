<!-- SIDEBAR-MENU START -->
<aside class="sidebar">
    @if(auth('doctor')->check() || auth('chamber')->check())
        <div class="sidebar-header">
            <a href="{{ route('profile') }}" class="userlink">
              <span class="user-avatar">
                  <img src="{{ asset('assets/images/avatar/avatar.svg') }}" alt="user-avatar">
              </span>

                <span class="userlink-info">
                  <span class="name">{{ auth()->user()->name }}</span>
                  <span class="mail">{{ auth()->user()?->email }}</span>
              </span>
            </a>
        </div>
    @endif

    <div class="sidebar-body">
        @if(auth('admin')->check())
            @include('includes.sidebar.backoffice')
        @endif

        @if(auth('chamber')->check())
            @include('includes.sidebar.chamber')
        @endif

        @if(auth('doctor')->check())
            @include('includes.sidebar.doctor')
        @endif
    </div>
</aside>
<!-- SIDEBAR-MENU END -->

