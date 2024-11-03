<!-- HEADER-SECTION START -->
<header class="header fixed-top">
    <div class="container">
      <nav class="header-nav" aria-labelledby="nav">
        <!-- HAMBURGER-MENU -->
        <div class="d-lg-none d-block">
          <button class="btn-hamburger" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 18H20M4 6H20H4ZM4 12H12H4Z" stroke="#A0AEC0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </button>

          <!-- MOBILE-MENU START -->
          <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenu">
            <div class="offcanvas-header">
              <a href="{{ route('index') }}" class="logo">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="brand-logo">
              </a>

              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg class="bi bi-x-lg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                </svg>
              </button>
            </div>

            <div class="offcanvas-body">
              <ul class="mobilelist">
                <li class="mobilelist-item">
                  <a href="{{ route('index') }}" class="mobilelist-link active">Home</a>
                </li>

                <li class="mobilelist-item">
                  <a href="{{ route('doctors') }}" class="mobilelist-link">Doctors</a>
                </li>

                <li class="mobilelist-item">
                  <a href="{{ route('blogs') }}" class="mobilelist-link">Blogs</a>
                </li>

                <li class="mobilelist-item">
                  <a href="{{ route('frontend.contact') }}" class="mobilelist-link">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- BRAND-LOGO -->
        <a href="{{ route('index') }}" class="logo">
          <img src="{{ asset('assets/images/logo/logo.png') }}" alt="brand-logo">
        </a>

        <!-- DESKTOP-SEARCH START -->
        <div class="d-none d-lg-block">
          <form class="headersearch">
            <input type="search" placeholder="What are you looking for?" class="searchfield">
            <button type="submit" class="btn-search">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
              </svg>
            </button>
          </form>
        </div>
        <!-- DESKTOP-SEARCH END -->

        <!-- MOBILE-SEARCH START -->
        <div class="d-lg-none d-block">
          <button class="btn-mobsearch" type="button" data-bs-toggle="collapse" data-bs-target="#mobileSearch" aria-expanded="false" aria-controls="mobileSearch">
            <svg class="bi bi-search searchicon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
            </svg>

            <svg class="bi bi-x-lg d-none closeicon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
            </svg>
          </button>
        </div>
        <!-- MOBILE-SEARCH END -->

        <!-- DESKTOP-MENU START -->
        <div class="d-none d-lg-block">
          <ul class="desktoplist">
            <li class="desktoplist-item">
              <a href="{{ route('index') }}" class="desktoplist-link active">Home</a>
            </li>

            <li class="desktoplist-item">
              <a href="{{ route('doctors') }}" class="desktoplist-link">Doctors</a>
            </li>

            <li class="desktoplist-item">
              <a href="{{ route('blogs') }}" class="desktoplist-link">Blogs</a>
            </li>

            <li class="desktoplist-item">
              <a href="{{ route('frontend.contact') }}" class="desktoplist-link">Contact</a>
            </li>
          </ul>
        </div>
        <!-- DESKTOP-MENU END -->
      </nav>
    </div>
  </header>
  <!-- HEADER-SECTION END -->

  <!-- MOBILE-SEARCH START -->
  <div class="mobilesearch">
    <div class="container">
      <div class="collapse pb-3" id="mobileSearch">
        <form class="headersearch">
          <input type="search" placeholder="What are you looking for?" class="searchfield">
          <button type="submit" class="btn-search">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
            </svg>
          </button>
        </form>
      </div>
    </div>
  </div>
  <!-- MOBILE-SEARCH END -->
