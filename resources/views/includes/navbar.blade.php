<!-- HEADER-SECTION START -->
<header class="dashboard-header fixed-top">
    <nav class="dashboard-header-nav" aria-labelledby="nav">
        <!-- MOBILE-MENU -->
        <div class="d-lg-none d-block">
            <!-- HAMBURGER-BUTTON -->
            <button type="button" class="btn-hamburger" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu"
                aria-controls="mobileMenu">
                <span></span>
            </button>

            <!-- MOBILE-MENU-START -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenu">
                <div class="offcanvas-body p-0">
                    <div class="mobilesidebar">
                        <div class="mobilesidebar-header d-flex align-items-center justify-content-between">

                            @if(!empty(auth('chamber')->user()) || !empty(auth('doctor')->user()))
                            <a href="{{ route('profile') }}" class="userlink">
                                <span class="user-avatar">
                                    <img src="{{ asset('assets/images/avatar/avatar.svg') }}" alt="user-avatar">
                                </span>

                                <span class="userlink-info">
                                    <span class="name">{{ auth()->user()->name }}</span>
                                    <span class="mail">{{ auth()->user()?->email }}</span>
                                </span>
                            </a>
                            @endif

                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                </svg>
                            </button>
                        </div>

                        <div class="divider"></div>

                        <div class="mobilesidebar-body">
                            @if(auth('admin')->check())
                                @include('includes.sidebar.backoffice', ['showExtraMenu'=> true])
                            @endif

                            @if(auth('chamber')->check())
                                @include('includes.sidebar.chamber', ['showExtraMenu'=> true])
                            @endif

                            @if(auth('doctor')->check())
                                @include('includes.sidebar.doctor', ['showExtraMenu'=> true])
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center gap-3">
            <div class="d-none d-lg-block">
                <!-- HAMBURGER-BUTTON -->
                <button type="button" class="btn-hamburger" id="btn-hamburger">
                    <span></span>
                </button>
            </div>

            <!-- SITE-LOGO -->
            <a href="{{ route('profile') }}" class="logo">
                <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="logo">
            </a>

        </div>

        <div class="d-flex align-items-center">
            <!-- DESKTOP-USER-DROPDOWN -->
            <div class="d-none d-lg-block">
                <div class="dashboard-dropdown">
                    <button class="dropdownlink" type="button">
                        <span class="text">{{ auth()->user()?->name }}</span>
                        <span class="arrowicon">
                            <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.295808 1.71002L2.88581 4.30002C3.07317 4.48627 3.32662 4.59081 3.59081 4.59081C3.85499 4.59081 4.10844 4.48627 4.29581 4.30002L6.88581 1.71002C7.02684 1.57015 7.12302 1.39145 7.16209 1.1967C7.20116 1.00195 7.18134 0.799979 7.10518 0.616535C7.02901 0.433091 6.89994 0.276486 6.73442 0.166685C6.5689 0.0568838 6.37443 -0.00113818 6.17581 1.69169e-05H0.995807C0.798035 0.000846148 0.604949 0.060301 0.440965 0.170864C0.276982 0.281427 0.149465 0.438133 0.0745398 0.621165C-0.000385769 0.804198 -0.0193555 1.00534 0.0200297 1.19915C0.0594149 1.39296 0.155386 1.57075 0.295808 1.71002Z"
                                    fill="white" />
                            </svg>
                        </span>
                    </button>

                    <div class="dropdown-info">
                        <div class="dropdownlist">
                            <a href="{{ route('profile') }}" class="dropdownlink">
                                    <span class="icon">
                                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.81248 4.5C9.81248 5.24592 9.51617 5.96129 8.98872 6.48874C8.46127 7.01618 7.7459 7.3125 6.99998 7.3125C6.25406 7.3125 5.53869 7.01618 5.01124 6.48874C4.4838 5.96129 4.18748 5.24592 4.18748 4.5C4.18748 3.75408 4.4838 3.03871 5.01124 2.51126C5.53869 1.98382 6.25406 1.6875 6.99998 1.6875C7.7459 1.6875 8.46127 1.98382 8.98872 2.51126C9.51617 3.03871 9.81248 3.75408 9.81248 4.5V4.5ZM1.37573 15.0885C1.39983 13.6128 2.00299 12.2056 3.05512 11.1705C4.10724 10.1354 5.52405 9.55535 6.99998 9.55535C8.47592 9.55535 9.89272 10.1354 10.9448 11.1705C11.997 12.2056 12.6001 13.6128 12.6242 15.0885C10.8598 15.8976 8.94109 16.3151 6.99998 16.3125C4.99298 16.3125 3.08798 15.8745 1.37573 15.0885Z"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                <span class="text">Profile</span>
                            </a>


                            {{--@auth('admin')
                                <a href="{{ route('setting') }}" class="dropdownlink">
                                    <span class="icon">
                                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.81248 4.5C9.81248 5.24592 9.51617 5.96129 8.98872 6.48874C8.46127 7.01618 7.7459 7.3125 6.99998 7.3125C6.25406 7.3125 5.53869 7.01618 5.01124 6.48874C4.4838 5.96129 4.18748 5.24592 4.18748 4.5C4.18748 3.75408 4.4838 3.03871 5.01124 2.51126C5.53869 1.98382 6.25406 1.6875 6.99998 1.6875C7.7459 1.6875 8.46127 1.98382 8.98872 2.51126C9.51617 3.03871 9.81248 3.75408 9.81248 4.5V4.5ZM1.37573 15.0885C1.39983 13.6128 2.00299 12.2056 3.05512 11.1705C4.10724 10.1354 5.52405 9.55535 6.99998 9.55535C8.47592 9.55535 9.89272 10.1354 10.9448 11.1705C11.997 12.2056 12.6001 13.6128 12.6242 15.0885C10.8598 15.8976 8.94109 16.3151 6.99998 16.3125C4.99298 16.3125 3.08798 15.8745 1.37573 15.0885Z"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="text">Setting</span>
                                </a>
                            @endauth--}}

                            <a href="{{ route('logout') }}" class="dropdownlink"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            >
                                <span class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.75 6L11.6925 7.0575L12.8775 8.25H6.75V9.75H12.8775L11.6925 10.935L12.75 12L15.75 9L12.75 6ZM3.75 3.75H9V2.25H3.75C2.925 2.25 2.25 2.925 2.25 3.75V14.25C2.25 15.075 2.925 15.75 3.75 15.75H9V14.25H3.75V3.75Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span class="text">Log out</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NOTIFICATIONS -->
            <div class="mynotifications">
                <button type="button" class="notificationlink">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z"
                            fill="#F0F0F0" />
                        <path
                            d="M15.5858 24.5C16.1158 24.4984 16.6235 24.2872 16.9983 23.9125C17.373 23.5377 17.5842 23.0299 17.5858 22.5H13.5858C13.5858 23.0304 13.7965 23.5391 14.1716 23.9142C14.5467 24.2893 15.0554 24.5 15.5858 24.5ZM21.5858 18.5V13.5C21.5858 10.43 19.9458 7.86 17.0858 7.18V6.5C17.0858 6.10218 16.9278 5.72064 16.6465 5.43934C16.3652 5.15804 15.9836 5 15.5858 5C15.188 5 14.8065 5.15804 14.5251 5.43934C14.2438 5.72064 14.0858 6.10218 14.0858 6.5V7.18C11.2158 7.86 9.58581 10.42 9.58581 13.5V18.5L8.29581 19.79C8.15539 19.9293 8.05942 20.1071 8.02003 20.3009C7.98064 20.4947 7.99961 20.6958 8.07454 20.8789C8.14947 21.0619 8.27698 21.2186 8.44097 21.3292C8.60495 21.4397 8.79803 21.4992 8.99581 21.5H22.1658C22.3644 21.5012 22.5589 21.4431 22.7244 21.3333C22.8899 21.2235 23.019 21.0669 23.0952 20.8835C23.1713 20.7 23.1912 20.4981 23.1521 20.3033C23.113 20.1086 23.0168 19.9299 22.8758 19.79L21.5858 18.5Z"
                            fill="#292E3E" />
                        <path
                            d="M27 11C29.7614 11 32 8.76142 32 6C32 3.23858 29.7614 1 27 1C24.2386 1 22 3.23858 22 6C22 8.76142 24.2386 11 27 11Z"
                            fill="#F04130" />
                    </svg>
                </button>
                @include('includes.notification')
            </div>
        </div>
    </nav>
</header>
<!-- HEADER-SECTION END -->
