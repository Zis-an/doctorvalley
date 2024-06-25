@extends('layouts.backend')
@section('content')

  <!-- MAIN-SECTION START -->
  <main class="myprofile" id="main-section">
    <section class="doctorsingleinfo">
      <div class="d-flex justify-content-end">
        <div class="actions">
          <a href="create-doctor.html" class="btn-action">
            <svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Doctor" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
          </a>

          <button type="button" class="btn-action" data-bs-toggle="modal" data-bs-target="#confirmModal">
            <svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete Doctor" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
            </svg>
          </button>
        </div>
      </div>

      <div class="info">
        <div class="info-header">
          <h3 class="infotitle">Profile Image</h3>
        </div>

        <div class="info-body">
          <figure class="profileimg">
            <img src="{{ asset('assets/images/avatar/profile.svg') }}" alt="profile-image">
          </figure>
        </div>
      </div>

      <div class="info">
        <div class="info-header">
          <h3 class="infotitle">Personal Information</h3>
        </div>

        <div class="info-body">
          <ul>
            <li>
              <strong>Name:</strong> Abdullah Al Mamun
            </li>
            <li>
              <strong>BMDC Registration No:</strong> A-40742
            </li>
            <li>
              <strong>E-mail:</strong> doctor.strange@gmail.com
            </li>
            <li>
              <strong>Phone Number:</strong> 01965088417
            </li>
            <li>
              <strong>Gender:</strong> Male
            </li>
            <li>
              <strong>Speciality:</strong> Medicine
            </li>
            <li>
              <strong>Division:</strong> Mymensingh
            </li>
            <li>
              <strong>District:</strong> Sherpur
            </li>
            <li>
              <strong>Thana:</strong> Sherpur Sadar
            </li>
            <li>
              <strong>Address:</strong> Griddanarayanpur
            </li>
            <li>
              <strong>Bio:</strong> Ratul Al Mamun
            </li>
            <li>
              <strong>Facebook:</strong> https://facebook.com/ratulalmamun
            </li>
            <li>
              <strong>Twitter:</strong> https://twitter.com/ratulalmamun
            </li>
            <li>
              <strong>Youtube:</strong> https://youtube.com/ratulalmamun
            </li>
            <li>
              <strong>Linkedin:</strong> https://linkedin.com/ratulalmamun
            </li>
          </ul>
        </div>
      </div>

      <div class="info">
        <div class="info-header">
          <h3 class="infotitle">Professional Information</h3>
        </div>

        <div class="info-body">
          <ul>
            <li>
              <strong>Organization Name:</strong> Dhaka Medical College
            </li>
            <li>
              <strong>Designation:</strong> Surgeon
            </li>
            <li>
              <strong>From Date:</strong> 21st March 2021
            </li>
            <li>
              <strong>To Date:</strong> 1st March 2023
            </li>
            <li>
              <strong>Organiztion Location:</strong> Dhaka
            </li>
          </ul>
        </div>
      </div>

      <div class="info">
        <div class="info-header">
          <h3 class="infotitle">Educational Information</h3>
        </div>

        <div class="info-body">
          <ul>
            <li>
              <strong>Degree Title:</strong> MBBS
            </li>
            <li>
              <strong>Major Course:</strong> Dental
            </li>
            <li>
              <strong>Institution Name:</strong> Dhaka Medical College
            </li>
            <li>
              <strong>From Date:</strong> 1st January 2016
            </li>
            <li>
              <strong>To Date:</strong> 31st December 2020
            </li>
          </ul>
        </div>
      </div>
    </section>
  </main>
  <!-- MAIN-SECTION END -->

@endsection
