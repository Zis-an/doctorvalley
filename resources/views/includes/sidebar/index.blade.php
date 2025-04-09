<!-- SIDEBAR-MENU START -->
<aside class="sidebar">
    @if(!empty(auth('chamber')->user()) || !empty(auth('admin')->user()) || !empty(auth('doctor')->user()))
        <div class="sidebar-header">
            <a href="{{ auth('admin')->check() ? route('backoffice.admin.profile', auth('admin')->user()->id) : '#' }}" class="userlink">
              <span class="user-avatar">
                  @if(auth('doctor')->check())
                      <img src="{{ asset('storage/' . auth()->user()->photo) }}" alt="user-avatar">
                  @endif
              </span>

                <span class="userlink-info">
                  <span class="name">{{ auth('chamber')->user()->name ?? auth('admin')->user()->name ?? auth('doctor')->user()->name }}</span>
                  <span class="mail">{{ auth('chamber')->user()?->email ?? auth('admin')->user()?->email ?? auth('doctor')->user()?->email }}</span>
                  @if(auth('chamber')->check())
                    <br/>
                    <span class="name">{{ auth('chamber')->user()->chamber->chamber_name ?? 'No Chamber Name' }}</span>
                  @endif
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

