<!-- MAIN-LIST -->
<ul class="sidelist">
    <li class="sidelist-item">
        <a href="{{ route('profile') }}" class="sidelist-link {{ request()->routeIs('profile') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="DashBoard">
                      <span class="icon">
                          <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M1.523 10H7.30281C7.5583 10 7.80331 9.89464 7.98397 9.70711C8.16462 9.51957 8.26611 9.26522 8.26611 9V1C8.26611 0.734784 8.16462 0.48043 7.98397 0.292893C7.80331 0.105357 7.5583 0 7.30281 0H1.523C1.26751 0 1.02249 0.105357 0.841837 0.292893C0.661183 0.48043 0.559692 0.734784 0.559692 1V9C0.559692 9.26522 0.661183 9.51957 0.841837 9.70711C1.02249 9.89464 1.26751 10 1.523 10ZM1.523 18H7.30281C7.5583 18 7.80331 17.8946 7.98397 17.7071C8.16462 17.5196 8.26611 17.2652 8.26611 17V13C8.26611 12.7348 8.16462 12.4804 7.98397 12.2929C7.80331 12.1054 7.5583 12 7.30281 12H1.523C1.26751 12 1.02249 12.1054 0.841837 12.2929C0.661183 12.4804 0.559692 12.7348 0.559692 13V17C0.559692 17.2652 0.661183 17.5196 0.841837 17.7071C1.02249 17.8946 1.26751 18 1.523 18ZM11.156 18H16.9358C17.1913 18 17.4363 17.8946 17.617 17.7071C17.7977 17.5196 17.8991 17.2652 17.8991 17V9C17.8991 8.73478 17.7977 8.48043 17.617 8.29289C17.4363 8.10536 17.1913 8 16.9358 8H11.156C10.9005 8 10.6555 8.10536 10.4749 8.29289C10.2942 8.48043 10.1927 8.73478 10.1927 9V17C10.1927 17.2652 10.2942 17.5196 10.4749 17.7071C10.6555 17.8946 10.9005 18 11.156 18ZM10.1927 1V5C10.1927 5.26522 10.2942 5.51957 10.4749 5.70711C10.6555 5.89464 10.9005 6 11.156 6H16.9358C17.1913 6 17.4363 5.89464 17.617 5.70711C17.7977 5.51957 17.8991 5.26522 17.8991 5V1C17.8991 0.734784 17.7977 0.48043 17.617 0.292893C17.4363 0.105357 17.1913 0 16.9358 0H11.156C10.9005 0 10.6555 0.105357 10.4749 0.292893C10.2942 0.48043 10.1927 0.734784 10.1927 1Z"
                                  fill="#F04130"/>
                          </svg>
                      </span>
            <span class="text">DashBoard</span>
        </a>
    </li>

    <li class="sidelist-item">
        <a href="{{ route('backoffice.doctor.create') }}" class="sidelist-link {{ request()->routeIs('backoffice.doctor.create') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="Create Doctor">
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F04130"
                               class="bi bi-person-fill" viewBox="0 0 16 16">
                              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                          </svg>
                      </span>
            <span class="text">Create Doctor</span>
        </a>
    </li>

    <li class="sidelist-item">
        <a href="{{ route('backoffice.doctor.index') }}" class="sidelist-link {{ request()->routeIs('backoffice.doctor.index') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="Doctor List">
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F04130"
                               class="bi bi-people-fill" viewBox="0 0 16 16">
                              <path
                                  d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                          </svg>
                      </span>
            <span class="text">Doctor List</span>
        </a>
    </li>

    <li class="sidelist-item">
        <a href="{{ route('backoffice.chamber.create') }}" class="sidelist-link {{ request()->routeIs('backoffice.chamber.create') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="Create Chamber">
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F04130"
                               class="bi bi-hospital-fill" viewBox="0 0 16 16">
                              <path
                                  d="M6 0a1 1 0 0 0-1 1v1a1 1 0 0 0-1 1v4H1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h6v-2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5V16h6a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-3V3a1 1 0 0 0-1-1V1a1 1 0 0 0-1-1H6Zm2.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM2.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 9.75v-.5A.25.25 0 0 1 2.25 9Zm0 2h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5ZM13.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25Z"/>
                          </svg>
                      </span>
            <span class="text">Create Chamber</span>
        </a>
    </li>
    <li class="sidelist-item">
        <a href="{{ route('backoffice.chamber.admin.create') }}" class="sidelist-link {{ request()->routeIs('backoffice.chamber.admin.create') ? 'active' : '' }}"
           data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create Chamber Admin">
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F04130"
                               class="bi bi-hospital-fill" viewBox="0 0 16 16">
                              <path
                                  d="M6 0a1 1 0 0 0-1 1v1a1 1 0 0 0-1 1v4H1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h6v-2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5V16h6a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-3V3a1 1 0 0 0-1-1V1a1 1 0 0 0-1-1H6Zm2.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM2.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 9.75v-.5A.25.25 0 0 1 2.25 9Zm0 2h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5ZM13.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25Z" />
                          </svg>
                      </span>
            <span class="text">Chamber Admin</span>
        </a>
    </li>

    <li class="sidelist-item">
        <a href="{{ route('backoffice.chamber.index') }}" class="sidelist-link {{ request()->routeIs('backoffice.chamber.index') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="Chamber List">
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F04130"
                               class="bi bi-diagram-3-fill" viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                    d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z"/>
                          </svg>
                      </span>
            <span class="text">Chamber List</span>
        </a>
    </li>
    <li class="sidelist-item">
        <a href="{{ route('backoffice.chamber.admin.index') }}" class="sidelist-link {{ request()->routeIs('backoffice.chamber.admin.index') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="Chamber List">
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F04130"
                               class="bi bi-diagram-3-fill" viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                    d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z" />
                          </svg>
                      </span>
            <span class="text">Admin's List</span>
        </a>
    </li>

    <li class="sidelist-item">
        <a href="{{ route('backoffice.blog.create') }}" class="sidelist-link {{ request()->routeIs('backoffice.blog.create') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="Create Blog">
                      <span class="icon">
                          <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M0.560059 2.25C0.560059 1.00898 1.45693 0 2.56006 0H7.56006V4.5C7.56006 5.12227 8.00693 5.625 8.56006 5.625H12.5601V10.0441L9.84756 13.0957C9.52568 13.4578 9.30068 13.9078 9.19131 14.4035L8.60693 17.0367C8.53506 17.3602 8.55068 17.6977 8.64756 18.0035H2.56006C1.45693 18.0035 0.560059 16.9945 0.560059 15.7535V2.25ZM12.5601 4.5H8.56006V0L12.5601 4.5ZM17.7413 8.28633L18.1913 8.79258C18.6788 9.34102 18.6788 10.2305 18.1913 10.7824L17.2726 11.816L15.0538 9.31992L15.9726 8.28633C16.4601 7.73789 17.2507 7.73789 17.7413 8.28633V8.28633ZM10.3069 14.6602L14.3444 10.118L16.5632 12.6141L12.5257 17.1527C12.3976 17.2969 12.2382 17.3988 12.0601 17.448L10.1819 17.9754C10.0101 18.0246 9.83193 17.9684 9.70693 17.8277C9.58193 17.6871 9.53193 17.4867 9.57568 17.2934L10.0444 15.1805C10.0882 14.9836 10.1788 14.8008 10.3069 14.6566V14.6602Z"
                                  fill="#F04130"/>
                          </svg>
                      </span>
            <span class="text">Create Blog</span>
        </a>
    </li>

    <li class="sidelist-item">
        <a href="{{ route('backoffice.blog.index') }}" class="sidelist-link {{ request()->routeIs('backoffice.blog.index') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="Blog List">
                      <span class="icon">
                          <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M0.560059 2.25C0.560059 1.00898 1.45693 0 2.56006 0H7.56006V4.5C7.56006 5.12227 8.00693 5.625 8.56006 5.625H12.5601V10.0441L9.84756 13.0957C9.52568 13.4578 9.30068 13.9078 9.19131 14.4035L8.60693 17.0367C8.53506 17.3602 8.55068 17.6977 8.64756 18.0035H2.56006C1.45693 18.0035 0.560059 16.9945 0.560059 15.7535V2.25ZM12.5601 4.5H8.56006V0L12.5601 4.5ZM17.7413 8.28633L18.1913 8.79258C18.6788 9.34102 18.6788 10.2305 18.1913 10.7824L17.2726 11.816L15.0538 9.31992L15.9726 8.28633C16.4601 7.73789 17.2507 7.73789 17.7413 8.28633V8.28633ZM10.3069 14.6602L14.3444 10.118L16.5632 12.6141L12.5257 17.1527C12.3976 17.2969 12.2382 17.3988 12.0601 17.448L10.1819 17.9754C10.0101 18.0246 9.83193 17.9684 9.70693 17.8277C9.58193 17.6871 9.53193 17.4867 9.57568 17.2934L10.0444 15.1805C10.0882 14.9836 10.1788 14.8008 10.3069 14.6566V14.6602Z"
                                  fill="#F04130"/>
                          </svg>
                      </span>
            <span class="text">Blog List</span>
        </a>
    </li>

    <li class="sidelist-item">
        <a href="{{ route('backoffice.speciality.create') }}" class="sidelist-link {{ request()->routeIs('backoffice.speciality.create') ? 'active' : '' }}"
           data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Create Category">
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F04130"
                               class="bi bi-list-task" viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                    d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                              <path
                                  d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                              <path fill-rule="evenodd"
                                    d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                          </svg>
                      </span>
            <span class="text">Speciality</span>
        </a>
    </li>

    <li class="sidelist-item">
        <a href="{{ route('backoffice.institute.create') }}" class="sidelist-link {{ request()->routeIs('backoffice.institute.create') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="Create Institute">
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F04130"
                               class="bi bi-building-fill" viewBox="0 0 16 16">
                              <path
                                  d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H3Zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Z"/>
                          </svg>
                      </span>
            <span class="text">Institute</span>
        </a>
    </li>

    <li class="sidelist-item">
        <a href="{{ route('backoffice.course.create') }}" class="sidelist-link {{ request()->routeIs('backoffice.course.create') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="Course">
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F04130"
                               class="bi bi-book-half" viewBox="0 0 16 16">
                              <path
                                  d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                          </svg>
                      </span>
            <span class="text">Course</span>
        </a>
    </li>

    <li class="sidelist-item">
        <a href="{{ route('backoffice.country.index') }}" class="sidelist-link {{ request()->routeIs('backoffice.country.index') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="Feedback">
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F04130"
                               class="bi bi-chat-right-dots-fill" viewBox="0 0 16 16">
                              <path
                                  d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                          </svg>
                      </span>
            <span class="text">Country</span>
        </a>
    </li>

    <li class="sidelist-item">
        <a href="{{ route('backoffice.province.index') }}" class="sidelist-link {{ request()->routeIs('backoffice.province.index') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="Feedback">
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F04130"
                               class="bi bi-chat-right-dots-fill" viewBox="0 0 16 16">
                              <path
                                  d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                          </svg>
                      </span>
            <span class="text">Division</span>
        </a>
    </li>

    <li class="sidelist-item">
        <a href="{{ route('backoffice.city.index') }}" class="sidelist-link {{ request()->routeIs('backoffice.city.index') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="Feedback">
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F04130"
                               class="bi bi-chat-right-dots-fill" viewBox="0 0 16 16">
                              <path
                                  d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                          </svg>
                      </span>
            <span class="text">District</span>
        </a>
    </li>

    <li class="sidelist-item">
        <a href="{{ route('backoffice.area.index') }}" class="sidelist-link {{ request()->routeIs('backoffice.area.index') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="Feedback">
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F04130"
                               class="bi bi-chat-right-dots-fill" viewBox="0 0 16 16">
                              <path
                                  d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                          </svg>
                      </span>
            <span class="text">Thana</span>
        </a>
    </li>


    <li class="sidelist-item">
        <a href="{{ route('backoffice.feedback') }}" class="sidelist-link {{ request()->routeIs('backoffice.feedback') ? 'active' : '' }}" data-bs-toggle="tooltip"
           data-bs-placement="right" data-bs-title="Feedback">
                      <span class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F04130"
                               class="bi bi-chat-right-dots-fill" viewBox="0 0 16 16">
                              <path
                                  d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                          </svg>
                      </span>
            <span class="text">Feedback</span>
        </a>
    </li>

    @if(!empty($showExtraMenu))
        <li class="sidelist-item">
                <span class="icon">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.75 6L11.6925 7.0575L12.8775 8.25H6.75V9.75H12.8775L11.6925 10.935L12.75 12L15.75 9L12.75 6ZM3.75 3.75H9V2.25H3.75C2.925 2.25 2.25 2.925 2.25 3.75V14.25C2.25 15.075 2.925 15.75 3.75 15.75H9V14.25H3.75V3.75Z"
                            fill="#F04130"/>
                    </svg>
                </span>
                <span class="text">Log Out</span>
            </a>
        </li>

        <li class="sidelist-item">
            <a href="{{ route('logout') }}" class="sidelist-link"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            >
                <span class="icon">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.75 6L11.6925 7.0575L12.8775 8.25H6.75V9.75H12.8775L11.6925 10.935L12.75 12L15.75 9L12.75 6ZM3.75 3.75H9V2.25H3.75C2.925 2.25 2.25 2.925 2.25 3.75V14.25C2.25 15.075 2.925 15.75 3.75 15.75H9V14.25H3.75V3.75Z"
                            fill="#F04130"/>
                    </svg>
                </span>
                <span class="text">Log Out</span>
            </a>
        </li>
    @endif

</ul>
