@extends('layouts.backend')
@section('content')

  <!-- MAIN-SECTION START -->
  <main class="mainsection" id="main-section">
    <div class="notifications">
      <div class="notifications-header">
        <div class="title-box">
          <h5 class="notification-title">NOTIFICATIONS</h5>
          <span class="notification-badge">5</span>
        </div>

        <div class="filternotification">
          <input type="text" placeholder="Filter by Date" id="notification-calendar">
          <label for="notification-calendar">
            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.8889 8.55556H7V12.4444H10.8889V8.55556ZM10.1111 0V1.55556H3.88889V0H2.33333V1.55556H1.55556C0.692222 1.55556 0.00777777 2.25556 0.00777777 3.11111L0 14C0 14.8556 0.692222 15.5556 1.55556 15.5556H12.4444C13.3 15.5556 14 14.8556 14 14V3.11111C14 2.25556 13.3 1.55556 12.4444 1.55556H11.6667V0H10.1111ZM12.4444 14H1.55556V5.44444H12.4444V14Z" fill="#F04130"/>
            </svg>
          </label>
        </div>
      </div>

      <div class="notifications-body">
        <div class="notification">
          <div class="notification-date">
            <p class="dateinfo">You have 6 notification on 28/11/2022</p>
          </div>

          <div class="notification-list">
            <div class="card-notification">
              <figure class="listicon">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g filter="url(#icon-1)">
                  <circle cx="9" cy="9" r="5" fill="#F04130"/>
                  </g>
                  <defs>
                    <filter id="icon-1" x="0" y="0" width="18" height="18" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                      <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_34_181"/>
                    </filter>
                  </defs>
                </svg>
              </figure>

              <div class="info">
                <div class="notification-detail">
                  <figure class="icon">
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#handicon-1)">
                        <path d="M12.7778 0.555556V2.77778C12.7778 3.08333 12.5278 3.33333 12.2222 3.33333C11.9167 3.33333 11.6667 3.08333 11.6667 2.77778V0.555556C11.6667 0.25 11.9167 0 12.2222 0C12.5278 0 12.7778 0.25 12.7778 0.555556ZM9.35069 0.802083L10.4618 2.46875C10.6319 2.72569 10.5625 3.06944 10.309 3.23958C10.0556 3.40972 9.70833 3.34028 9.5382 3.08681L8.42708 1.42014C8.25694 1.16319 8.32639 0.819445 8.57986 0.649306C8.83333 0.479167 9.18056 0.548611 9.35069 0.802083ZM5.79861 4.13194C6.125 3.80556 6.65278 3.80556 6.97569 4.13194L11.2743 8.42708C11.625 8.77778 12.2222 8.52778 12.2222 8.03472V6.66667C12.2222 6.05208 12.7188 5.55556 13.3333 5.55556C13.9479 5.55556 14.4444 6.05208 14.4444 6.66667V12C14.4444 13.9826 13.4028 15.8194 11.7049 16.8403C9.48264 18.1736 6.64236 17.8229 4.8125 15.9931L1.35417 12.5347C1.02778 12.2083 1.02778 11.6806 1.35417 11.3576C1.68056 11.0347 2.20833 11.0313 2.53125 11.3576L4.37153 13.1979C4.58333 13.4097 4.92708 13.4097 5.13889 13.1979C5.35069 12.9861 5.35069 12.6424 5.13889 12.4306L1.90972 9.20139C1.58333 8.875 1.58333 8.34722 1.90972 8.02431C2.23611 7.70139 2.76389 7.69792 3.08681 8.02431L6.31597 11.2535C6.52778 11.4653 6.87153 11.4653 7.08333 11.2535C7.29514 11.0417 7.29514 10.6979 7.08333 10.4861L3.02083 6.42361C2.69444 6.09722 2.69444 5.56945 3.02083 5.24653C3.34722 4.92361 3.875 4.92014 4.19792 5.24653L8.26042 9.30903C8.47222 9.52083 8.81597 9.52083 9.02778 9.30903C9.23958 9.09722 9.23958 8.75347 9.02778 8.54167L5.79861 5.3125C5.47222 4.98611 5.47222 4.45833 5.79861 4.13542V4.13194ZM16.1493 16.8368C15.309 17.3403 14.3819 17.6042 13.4514 17.6389C15.1215 16.2639 16.1111 14.2014 16.1111 12V8.59375C16.3958 8.59028 16.6667 8.37153 16.6667 8.03819V6.66667C16.6667 6.05208 17.1632 5.55556 17.7778 5.55556C18.3924 5.55556 18.8889 6.05208 18.8889 6.66667V12C18.8889 13.9826 17.8472 15.8194 16.1493 16.8403V16.8368ZM15.8646 0.649306C16.1215 0.819445 16.1875 1.16319 16.0174 1.42014L14.9062 3.08681C14.7361 3.34375 14.3924 3.40972 14.1354 3.23958C13.8785 3.06944 13.8125 2.72569 13.9826 2.46875L15.0938 0.802083C15.2639 0.545139 15.6076 0.479167 15.8646 0.649306Z" fill="#F04130"/>
                      </g>
                      <defs>
                        <clipPath id="handicon-1">
                          <rect width="20" height="17.7778" fill="white"/>
                        </clipPath>
                      </defs>
                    </svg>
                  </figure>

                  <div class="detail">
                    <p class="detail-text">
                      <strong>Congratulations !</strong>
                      <span>Recover from back pain...</span> Blogs reached <strong>500 views.</strong>
                    </p>
                  </div>
                </div>

                <div class="postedtime">
                  <p class="time">9:35 pm</p>
                </div>
              </div>
            </div>

            <div class="card-notification">
              <div class="info">
                <div class="notification-detail">
                  <figure class="icon">
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#handicon-1)">
                        <path d="M12.7778 0.555556V2.77778C12.7778 3.08333 12.5278 3.33333 12.2222 3.33333C11.9167 3.33333 11.6667 3.08333 11.6667 2.77778V0.555556C11.6667 0.25 11.9167 0 12.2222 0C12.5278 0 12.7778 0.25 12.7778 0.555556ZM9.35069 0.802083L10.4618 2.46875C10.6319 2.72569 10.5625 3.06944 10.309 3.23958C10.0556 3.40972 9.70833 3.34028 9.5382 3.08681L8.42708 1.42014C8.25694 1.16319 8.32639 0.819445 8.57986 0.649306C8.83333 0.479167 9.18056 0.548611 9.35069 0.802083ZM5.79861 4.13194C6.125 3.80556 6.65278 3.80556 6.97569 4.13194L11.2743 8.42708C11.625 8.77778 12.2222 8.52778 12.2222 8.03472V6.66667C12.2222 6.05208 12.7188 5.55556 13.3333 5.55556C13.9479 5.55556 14.4444 6.05208 14.4444 6.66667V12C14.4444 13.9826 13.4028 15.8194 11.7049 16.8403C9.48264 18.1736 6.64236 17.8229 4.8125 15.9931L1.35417 12.5347C1.02778 12.2083 1.02778 11.6806 1.35417 11.3576C1.68056 11.0347 2.20833 11.0313 2.53125 11.3576L4.37153 13.1979C4.58333 13.4097 4.92708 13.4097 5.13889 13.1979C5.35069 12.9861 5.35069 12.6424 5.13889 12.4306L1.90972 9.20139C1.58333 8.875 1.58333 8.34722 1.90972 8.02431C2.23611 7.70139 2.76389 7.69792 3.08681 8.02431L6.31597 11.2535C6.52778 11.4653 6.87153 11.4653 7.08333 11.2535C7.29514 11.0417 7.29514 10.6979 7.08333 10.4861L3.02083 6.42361C2.69444 6.09722 2.69444 5.56945 3.02083 5.24653C3.34722 4.92361 3.875 4.92014 4.19792 5.24653L8.26042 9.30903C8.47222 9.52083 8.81597 9.52083 9.02778 9.30903C9.23958 9.09722 9.23958 8.75347 9.02778 8.54167L5.79861 5.3125C5.47222 4.98611 5.47222 4.45833 5.79861 4.13542V4.13194ZM16.1493 16.8368C15.309 17.3403 14.3819 17.6042 13.4514 17.6389C15.1215 16.2639 16.1111 14.2014 16.1111 12V8.59375C16.3958 8.59028 16.6667 8.37153 16.6667 8.03819V6.66667C16.6667 6.05208 17.1632 5.55556 17.7778 5.55556C18.3924 5.55556 18.8889 6.05208 18.8889 6.66667V12C18.8889 13.9826 17.8472 15.8194 16.1493 16.8403V16.8368ZM15.8646 0.649306C16.1215 0.819445 16.1875 1.16319 16.0174 1.42014L14.9062 3.08681C14.7361 3.34375 14.3924 3.40972 14.1354 3.23958C13.8785 3.06944 13.8125 2.72569 13.9826 2.46875L15.0938 0.802083C15.2639 0.545139 15.6076 0.479167 15.8646 0.649306Z" fill="#F04130"/>
                      </g>
                      <defs>
                        <clipPath id="handicon-1">
                          <rect width="20" height="17.7778" fill="white"/>
                        </clipPath>
                      </defs>
                    </svg>
                  </figure>

                  <div class="detail">
                    <p class="detail-text">
                      <strong>Congratulations !</strong>
                      <span>Recover from back pain...</span> Blogs reached <strong>500 views.</strong>
                    </p>
                  </div>
                </div>

                <div class="postedtime">
                  <p class="time">9:35 pm</p>
                </div>
              </div>
            </div>

            <div class="card-notification">
              <div class="accordion" id="accordionNotification">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                      <span class="icon">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g filter="url(#bullet-icon-1)">
                            <circle cx="9" cy="9" r="5" fill="#F04130"/>
                          </g>
                          <defs>
                            <filter id="bullet-icon-1" x="0" y="0" width="18" height="18" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                              <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_32_24"/>
                            </filter>
                          </defs>
                        </svg>
                      </span>

                      <span class="info">
                        <span class="notification-detail">
                          <figure class="icon">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#user-icon-1)">
                                <path d="M7 8C9.20937 8 11 6.20937 11 4C11 1.79063 9.20937 0 7 0C4.79063 0 3 1.79063 3 4C3 6.20937 4.79063 8 7 8ZM5.57188 9.5C2.49375 9.5 0 11.9937 0 15.0719C0 15.5844 0.415625 16 0.928125 16H12.2688C12.1 15.7063 12 15.3656 12 15V11C12 10.9344 12.0031 10.8688 12.0094 10.8031C11.0406 9.99063 9.79063 9.5 8.42813 9.5H5.57188ZM16.5 7.5C17.0531 7.5 17.5 7.94687 17.5 8.5V10H15.5V8.5C15.5 7.94687 15.9469 7.5 16.5 7.5ZM14 8.5V10C13.4469 10 13 10.4469 13 11V15C13 15.5531 13.4469 16 14 16H19C19.5531 16 20 15.5531 20 15V11C20 10.4469 19.5531 10 19 10V8.5C19 7.11875 17.8813 6 16.5 6C15.1187 6 14 7.11875 14 8.5Z" fill="#F04130"/>
                              </g>
                              <defs>
                                <clipPath id="user-icon-1">
                                  <rect width="20" height="16" fill="white"/>
                                </clipPath>
                              </defs>
                            </svg>
                          </figure>

                          <div class="d-flex align-items-center gap-2">
                            <span class="detail">
                              <span class="detail-text">
                                You have a new message from <strong>Admin.</strong>
                              </span>
                            </span>
                            <span class="arricon">
                              <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#arrow-1)">
                                  <rect x="7" y="7" width="24" height="24" rx="5" fill="#F04130"/>
                                </g>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.5172 15.3811C25.8479 15.7865 25.8243 16.3838 25.4463 16.7622L19.604 22.6041C19.4081 22.8 19.1461 22.906 18.8744 22.906C18.6025 22.906 18.341 22.8002 18.1444 22.6041L12.3023 16.762C11.8992 16.3585 11.8992 15.7053 12.3023 15.3028C12.7055 14.8991 13.3589 14.8991 13.7619 15.3027L18.8744 20.4147L23.9867 15.3028C24.3647 14.9243 24.9626 14.9007 25.368 15.2318L25.4464 15.3027L25.5172 15.3811Z" fill="white"/>
                                <defs>
                                <filter id="arrow-1" x="0" y="0" width="38" height="38" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                  <feGaussianBlur stdDeviation="3.5" result="effect1_foregroundBlur_34_61"/>
                                </filter>
                                </defs>
                              </svg>
                            </span>
                          </div>
                        </span>

                        <span class="postedtime">
                          <span class="time">9:35 pm</span>
                        </span>
                      </span>
                    </button>
                  </h2>

                  <div id="collapse-1" class="accordion-collapse collapse" data-bs-parent="#accordionNotification">
                    <div class="accordion-body">
                      <p class="message">
                        Dear <strong>Doctors,</strong>
                        <br>
                        We have a good news for you. Now our website has a new feature from next month. Appointment system is comming soon. From then you will be get a new option in your dashboard and you will see your appointment list there.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="notification">
          <div class="notification-date">
            <p class="dateinfo">Today</p>
          </div>

          <div class="notification-list">
            <div class="card-notification">
              <figure class="listicon">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g filter="url(#icon-1)">
                  <circle cx="9" cy="9" r="5" fill="#F04130"/>
                  </g>
                  <defs>
                    <filter id="icon-1" x="0" y="0" width="18" height="18" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                      <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_34_181"/>
                    </filter>
                  </defs>
                </svg>
              </figure>

              <div class="info">
                <div class="notification-detail">
                  <figure class="icon">
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#handicon-1)">
                        <path d="M12.7778 0.555556V2.77778C12.7778 3.08333 12.5278 3.33333 12.2222 3.33333C11.9167 3.33333 11.6667 3.08333 11.6667 2.77778V0.555556C11.6667 0.25 11.9167 0 12.2222 0C12.5278 0 12.7778 0.25 12.7778 0.555556ZM9.35069 0.802083L10.4618 2.46875C10.6319 2.72569 10.5625 3.06944 10.309 3.23958C10.0556 3.40972 9.70833 3.34028 9.5382 3.08681L8.42708 1.42014C8.25694 1.16319 8.32639 0.819445 8.57986 0.649306C8.83333 0.479167 9.18056 0.548611 9.35069 0.802083ZM5.79861 4.13194C6.125 3.80556 6.65278 3.80556 6.97569 4.13194L11.2743 8.42708C11.625 8.77778 12.2222 8.52778 12.2222 8.03472V6.66667C12.2222 6.05208 12.7188 5.55556 13.3333 5.55556C13.9479 5.55556 14.4444 6.05208 14.4444 6.66667V12C14.4444 13.9826 13.4028 15.8194 11.7049 16.8403C9.48264 18.1736 6.64236 17.8229 4.8125 15.9931L1.35417 12.5347C1.02778 12.2083 1.02778 11.6806 1.35417 11.3576C1.68056 11.0347 2.20833 11.0313 2.53125 11.3576L4.37153 13.1979C4.58333 13.4097 4.92708 13.4097 5.13889 13.1979C5.35069 12.9861 5.35069 12.6424 5.13889 12.4306L1.90972 9.20139C1.58333 8.875 1.58333 8.34722 1.90972 8.02431C2.23611 7.70139 2.76389 7.69792 3.08681 8.02431L6.31597 11.2535C6.52778 11.4653 6.87153 11.4653 7.08333 11.2535C7.29514 11.0417 7.29514 10.6979 7.08333 10.4861L3.02083 6.42361C2.69444 6.09722 2.69444 5.56945 3.02083 5.24653C3.34722 4.92361 3.875 4.92014 4.19792 5.24653L8.26042 9.30903C8.47222 9.52083 8.81597 9.52083 9.02778 9.30903C9.23958 9.09722 9.23958 8.75347 9.02778 8.54167L5.79861 5.3125C5.47222 4.98611 5.47222 4.45833 5.79861 4.13542V4.13194ZM16.1493 16.8368C15.309 17.3403 14.3819 17.6042 13.4514 17.6389C15.1215 16.2639 16.1111 14.2014 16.1111 12V8.59375C16.3958 8.59028 16.6667 8.37153 16.6667 8.03819V6.66667C16.6667 6.05208 17.1632 5.55556 17.7778 5.55556C18.3924 5.55556 18.8889 6.05208 18.8889 6.66667V12C18.8889 13.9826 17.8472 15.8194 16.1493 16.8403V16.8368ZM15.8646 0.649306C16.1215 0.819445 16.1875 1.16319 16.0174 1.42014L14.9062 3.08681C14.7361 3.34375 14.3924 3.40972 14.1354 3.23958C13.8785 3.06944 13.8125 2.72569 13.9826 2.46875L15.0938 0.802083C15.2639 0.545139 15.6076 0.479167 15.8646 0.649306Z" fill="#F04130"/>
                      </g>
                      <defs>
                        <clipPath id="handicon-1">
                          <rect width="20" height="17.7778" fill="white"/>
                        </clipPath>
                      </defs>
                    </svg>
                  </figure>

                  <div class="detail">
                    <p class="detail-text">
                      <strong>Congratulations !</strong>
                      <span>Recover from back pain...</span> Blogs reached <strong>500 views.</strong>
                    </p>
                  </div>
                </div>

                <div class="postedtime">
                  <p class="time">9:35 pm</p>
                </div>
              </div>
            </div>

            <div class="card-notification">
              <div class="info">
                <div class="notification-detail">
                  <figure class="icon">
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#handicon-1)">
                        <path d="M12.7778 0.555556V2.77778C12.7778 3.08333 12.5278 3.33333 12.2222 3.33333C11.9167 3.33333 11.6667 3.08333 11.6667 2.77778V0.555556C11.6667 0.25 11.9167 0 12.2222 0C12.5278 0 12.7778 0.25 12.7778 0.555556ZM9.35069 0.802083L10.4618 2.46875C10.6319 2.72569 10.5625 3.06944 10.309 3.23958C10.0556 3.40972 9.70833 3.34028 9.5382 3.08681L8.42708 1.42014C8.25694 1.16319 8.32639 0.819445 8.57986 0.649306C8.83333 0.479167 9.18056 0.548611 9.35069 0.802083ZM5.79861 4.13194C6.125 3.80556 6.65278 3.80556 6.97569 4.13194L11.2743 8.42708C11.625 8.77778 12.2222 8.52778 12.2222 8.03472V6.66667C12.2222 6.05208 12.7188 5.55556 13.3333 5.55556C13.9479 5.55556 14.4444 6.05208 14.4444 6.66667V12C14.4444 13.9826 13.4028 15.8194 11.7049 16.8403C9.48264 18.1736 6.64236 17.8229 4.8125 15.9931L1.35417 12.5347C1.02778 12.2083 1.02778 11.6806 1.35417 11.3576C1.68056 11.0347 2.20833 11.0313 2.53125 11.3576L4.37153 13.1979C4.58333 13.4097 4.92708 13.4097 5.13889 13.1979C5.35069 12.9861 5.35069 12.6424 5.13889 12.4306L1.90972 9.20139C1.58333 8.875 1.58333 8.34722 1.90972 8.02431C2.23611 7.70139 2.76389 7.69792 3.08681 8.02431L6.31597 11.2535C6.52778 11.4653 6.87153 11.4653 7.08333 11.2535C7.29514 11.0417 7.29514 10.6979 7.08333 10.4861L3.02083 6.42361C2.69444 6.09722 2.69444 5.56945 3.02083 5.24653C3.34722 4.92361 3.875 4.92014 4.19792 5.24653L8.26042 9.30903C8.47222 9.52083 8.81597 9.52083 9.02778 9.30903C9.23958 9.09722 9.23958 8.75347 9.02778 8.54167L5.79861 5.3125C5.47222 4.98611 5.47222 4.45833 5.79861 4.13542V4.13194ZM16.1493 16.8368C15.309 17.3403 14.3819 17.6042 13.4514 17.6389C15.1215 16.2639 16.1111 14.2014 16.1111 12V8.59375C16.3958 8.59028 16.6667 8.37153 16.6667 8.03819V6.66667C16.6667 6.05208 17.1632 5.55556 17.7778 5.55556C18.3924 5.55556 18.8889 6.05208 18.8889 6.66667V12C18.8889 13.9826 17.8472 15.8194 16.1493 16.8403V16.8368ZM15.8646 0.649306C16.1215 0.819445 16.1875 1.16319 16.0174 1.42014L14.9062 3.08681C14.7361 3.34375 14.3924 3.40972 14.1354 3.23958C13.8785 3.06944 13.8125 2.72569 13.9826 2.46875L15.0938 0.802083C15.2639 0.545139 15.6076 0.479167 15.8646 0.649306Z" fill="#F04130"/>
                      </g>
                      <defs>
                        <clipPath id="handicon-1">
                          <rect width="20" height="17.7778" fill="white"/>
                        </clipPath>
                      </defs>
                    </svg>
                  </figure>

                  <div class="detail">
                    <p class="detail-text">
                      <strong>Congratulations !</strong>
                      <span>Recover from back pain...</span> Blogs reached <strong>500 views.</strong>
                    </p>
                  </div>
                </div>

                <div class="postedtime">
                  <p class="time">9:35 pm</p>
                </div>
              </div>
            </div>

            <div class="card-notification">
              <div class="accordion" id="accordionNotification-2">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                      <span class="icon">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g filter="url(#bullet-icon-1)">
                            <circle cx="9" cy="9" r="5" fill="#F04130"/>
                          </g>
                          <defs>
                            <filter id="bullet-icon-1" x="0" y="0" width="18" height="18" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                              <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_32_24"/>
                            </filter>
                          </defs>
                        </svg>
                      </span>

                      <span class="info">
                        <span class="notification-detail">
                          <figure class="icon">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#user-icon-1)">
                                <path d="M7 8C9.20937 8 11 6.20937 11 4C11 1.79063 9.20937 0 7 0C4.79063 0 3 1.79063 3 4C3 6.20937 4.79063 8 7 8ZM5.57188 9.5C2.49375 9.5 0 11.9937 0 15.0719C0 15.5844 0.415625 16 0.928125 16H12.2688C12.1 15.7063 12 15.3656 12 15V11C12 10.9344 12.0031 10.8688 12.0094 10.8031C11.0406 9.99063 9.79063 9.5 8.42813 9.5H5.57188ZM16.5 7.5C17.0531 7.5 17.5 7.94687 17.5 8.5V10H15.5V8.5C15.5 7.94687 15.9469 7.5 16.5 7.5ZM14 8.5V10C13.4469 10 13 10.4469 13 11V15C13 15.5531 13.4469 16 14 16H19C19.5531 16 20 15.5531 20 15V11C20 10.4469 19.5531 10 19 10V8.5C19 7.11875 17.8813 6 16.5 6C15.1187 6 14 7.11875 14 8.5Z" fill="#F04130"/>
                              </g>
                              <defs>
                                <clipPath id="user-icon-1">
                                  <rect width="20" height="16" fill="white"/>
                                </clipPath>
                              </defs>
                            </svg>
                          </figure>

                          <div class="d-flex align-items-center gap-2">
                            <span class="detail">
                              <span class="detail-text">
                                You have a new message from <strong>Admin.</strong>
                              </span>
                            </span>
                            <span class="arricon">
                              <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#arrow-1)">
                                  <rect x="7" y="7" width="24" height="24" rx="5" fill="#F04130"/>
                                </g>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.5172 15.3811C25.8479 15.7865 25.8243 16.3838 25.4463 16.7622L19.604 22.6041C19.4081 22.8 19.1461 22.906 18.8744 22.906C18.6025 22.906 18.341 22.8002 18.1444 22.6041L12.3023 16.762C11.8992 16.3585 11.8992 15.7053 12.3023 15.3028C12.7055 14.8991 13.3589 14.8991 13.7619 15.3027L18.8744 20.4147L23.9867 15.3028C24.3647 14.9243 24.9626 14.9007 25.368 15.2318L25.4464 15.3027L25.5172 15.3811Z" fill="white"/>
                                <defs>
                                <filter id="arrow-1" x="0" y="0" width="38" height="38" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                  <feGaussianBlur stdDeviation="3.5" result="effect1_foregroundBlur_34_61"/>
                                </filter>
                                </defs>
                              </svg>
                            </span>
                          </div>
                        </span>

                        <span class="postedtime">
                          <span class="time">9:35 pm</span>
                        </span>
                      </span>
                    </button>
                  </h2>

                  <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionNotification-2">
                    <div class="accordion-body">
                      <p class="message">
                        Dear <strong>Doctors,</strong>
                        <br>
                        We have a good news for you. Now our website has a new feature from next month. Appointment system is comming soon. From then you will be get a new option in your dashboard and you will see your appointment list there.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="notification">
          <div class="notification-date">
            <p class="dateinfo">Yesterday</p>
          </div>

          <div class="notification-list">
            <div class="card-notification">
              <figure class="listicon">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g filter="url(#icon-1)">
                  <circle cx="9" cy="9" r="5" fill="#F04130"/>
                  </g>
                  <defs>
                    <filter id="icon-1" x="0" y="0" width="18" height="18" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                      <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_34_181"/>
                    </filter>
                  </defs>
                </svg>
              </figure>

              <div class="info">
                <div class="notification-detail">
                  <figure class="icon">
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#handicon-1)">
                        <path d="M12.7778 0.555556V2.77778C12.7778 3.08333 12.5278 3.33333 12.2222 3.33333C11.9167 3.33333 11.6667 3.08333 11.6667 2.77778V0.555556C11.6667 0.25 11.9167 0 12.2222 0C12.5278 0 12.7778 0.25 12.7778 0.555556ZM9.35069 0.802083L10.4618 2.46875C10.6319 2.72569 10.5625 3.06944 10.309 3.23958C10.0556 3.40972 9.70833 3.34028 9.5382 3.08681L8.42708 1.42014C8.25694 1.16319 8.32639 0.819445 8.57986 0.649306C8.83333 0.479167 9.18056 0.548611 9.35069 0.802083ZM5.79861 4.13194C6.125 3.80556 6.65278 3.80556 6.97569 4.13194L11.2743 8.42708C11.625 8.77778 12.2222 8.52778 12.2222 8.03472V6.66667C12.2222 6.05208 12.7188 5.55556 13.3333 5.55556C13.9479 5.55556 14.4444 6.05208 14.4444 6.66667V12C14.4444 13.9826 13.4028 15.8194 11.7049 16.8403C9.48264 18.1736 6.64236 17.8229 4.8125 15.9931L1.35417 12.5347C1.02778 12.2083 1.02778 11.6806 1.35417 11.3576C1.68056 11.0347 2.20833 11.0313 2.53125 11.3576L4.37153 13.1979C4.58333 13.4097 4.92708 13.4097 5.13889 13.1979C5.35069 12.9861 5.35069 12.6424 5.13889 12.4306L1.90972 9.20139C1.58333 8.875 1.58333 8.34722 1.90972 8.02431C2.23611 7.70139 2.76389 7.69792 3.08681 8.02431L6.31597 11.2535C6.52778 11.4653 6.87153 11.4653 7.08333 11.2535C7.29514 11.0417 7.29514 10.6979 7.08333 10.4861L3.02083 6.42361C2.69444 6.09722 2.69444 5.56945 3.02083 5.24653C3.34722 4.92361 3.875 4.92014 4.19792 5.24653L8.26042 9.30903C8.47222 9.52083 8.81597 9.52083 9.02778 9.30903C9.23958 9.09722 9.23958 8.75347 9.02778 8.54167L5.79861 5.3125C5.47222 4.98611 5.47222 4.45833 5.79861 4.13542V4.13194ZM16.1493 16.8368C15.309 17.3403 14.3819 17.6042 13.4514 17.6389C15.1215 16.2639 16.1111 14.2014 16.1111 12V8.59375C16.3958 8.59028 16.6667 8.37153 16.6667 8.03819V6.66667C16.6667 6.05208 17.1632 5.55556 17.7778 5.55556C18.3924 5.55556 18.8889 6.05208 18.8889 6.66667V12C18.8889 13.9826 17.8472 15.8194 16.1493 16.8403V16.8368ZM15.8646 0.649306C16.1215 0.819445 16.1875 1.16319 16.0174 1.42014L14.9062 3.08681C14.7361 3.34375 14.3924 3.40972 14.1354 3.23958C13.8785 3.06944 13.8125 2.72569 13.9826 2.46875L15.0938 0.802083C15.2639 0.545139 15.6076 0.479167 15.8646 0.649306Z" fill="#F04130"/>
                      </g>
                      <defs>
                        <clipPath id="handicon-1">
                          <rect width="20" height="17.7778" fill="white"/>
                        </clipPath>
                      </defs>
                    </svg>
                  </figure>

                  <div class="detail">
                    <p class="detail-text">
                      <strong>Congratulations !</strong>
                      <span>Recover from back pain...</span> Blogs reached <strong>500 views.</strong>
                    </p>
                  </div>
                </div>

                <div class="postedtime">
                  <p class="time">9:35 pm</p>
                </div>
              </div>
            </div>

            <div class="card-notification">
              <div class="info">
                <div class="notification-detail">
                  <figure class="icon">
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#handicon-1)">
                        <path d="M12.7778 0.555556V2.77778C12.7778 3.08333 12.5278 3.33333 12.2222 3.33333C11.9167 3.33333 11.6667 3.08333 11.6667 2.77778V0.555556C11.6667 0.25 11.9167 0 12.2222 0C12.5278 0 12.7778 0.25 12.7778 0.555556ZM9.35069 0.802083L10.4618 2.46875C10.6319 2.72569 10.5625 3.06944 10.309 3.23958C10.0556 3.40972 9.70833 3.34028 9.5382 3.08681L8.42708 1.42014C8.25694 1.16319 8.32639 0.819445 8.57986 0.649306C8.83333 0.479167 9.18056 0.548611 9.35069 0.802083ZM5.79861 4.13194C6.125 3.80556 6.65278 3.80556 6.97569 4.13194L11.2743 8.42708C11.625 8.77778 12.2222 8.52778 12.2222 8.03472V6.66667C12.2222 6.05208 12.7188 5.55556 13.3333 5.55556C13.9479 5.55556 14.4444 6.05208 14.4444 6.66667V12C14.4444 13.9826 13.4028 15.8194 11.7049 16.8403C9.48264 18.1736 6.64236 17.8229 4.8125 15.9931L1.35417 12.5347C1.02778 12.2083 1.02778 11.6806 1.35417 11.3576C1.68056 11.0347 2.20833 11.0313 2.53125 11.3576L4.37153 13.1979C4.58333 13.4097 4.92708 13.4097 5.13889 13.1979C5.35069 12.9861 5.35069 12.6424 5.13889 12.4306L1.90972 9.20139C1.58333 8.875 1.58333 8.34722 1.90972 8.02431C2.23611 7.70139 2.76389 7.69792 3.08681 8.02431L6.31597 11.2535C6.52778 11.4653 6.87153 11.4653 7.08333 11.2535C7.29514 11.0417 7.29514 10.6979 7.08333 10.4861L3.02083 6.42361C2.69444 6.09722 2.69444 5.56945 3.02083 5.24653C3.34722 4.92361 3.875 4.92014 4.19792 5.24653L8.26042 9.30903C8.47222 9.52083 8.81597 9.52083 9.02778 9.30903C9.23958 9.09722 9.23958 8.75347 9.02778 8.54167L5.79861 5.3125C5.47222 4.98611 5.47222 4.45833 5.79861 4.13542V4.13194ZM16.1493 16.8368C15.309 17.3403 14.3819 17.6042 13.4514 17.6389C15.1215 16.2639 16.1111 14.2014 16.1111 12V8.59375C16.3958 8.59028 16.6667 8.37153 16.6667 8.03819V6.66667C16.6667 6.05208 17.1632 5.55556 17.7778 5.55556C18.3924 5.55556 18.8889 6.05208 18.8889 6.66667V12C18.8889 13.9826 17.8472 15.8194 16.1493 16.8403V16.8368ZM15.8646 0.649306C16.1215 0.819445 16.1875 1.16319 16.0174 1.42014L14.9062 3.08681C14.7361 3.34375 14.3924 3.40972 14.1354 3.23958C13.8785 3.06944 13.8125 2.72569 13.9826 2.46875L15.0938 0.802083C15.2639 0.545139 15.6076 0.479167 15.8646 0.649306Z" fill="#F04130"/>
                      </g>
                      <defs>
                        <clipPath id="handicon-1">
                          <rect width="20" height="17.7778" fill="white"/>
                        </clipPath>
                      </defs>
                    </svg>
                  </figure>

                  <div class="detail">
                    <p class="detail-text">
                      <strong>Congratulations !</strong>
                      <span>Recover from back pain...</span> Blogs reached <strong>500 views.</strong>
                    </p>
                  </div>
                </div>

                <div class="postedtime">
                  <p class="time">9:35 pm</p>
                </div>
              </div>
            </div>

            <div class="card-notification">
              <div class="accordion" id="accordionNotification-3">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                      <span class="icon">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g filter="url(#bullet-icon-1)">
                            <circle cx="9" cy="9" r="5" fill="#F04130"/>
                          </g>
                          <defs>
                            <filter id="bullet-icon-1" x="0" y="0" width="18" height="18" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                              <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                              <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_32_24"/>
                            </filter>
                          </defs>
                        </svg>
                      </span>

                      <span class="info">
                        <span class="notification-detail">
                          <figure class="icon">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#user-icon-1)">
                                <path d="M7 8C9.20937 8 11 6.20937 11 4C11 1.79063 9.20937 0 7 0C4.79063 0 3 1.79063 3 4C3 6.20937 4.79063 8 7 8ZM5.57188 9.5C2.49375 9.5 0 11.9937 0 15.0719C0 15.5844 0.415625 16 0.928125 16H12.2688C12.1 15.7063 12 15.3656 12 15V11C12 10.9344 12.0031 10.8688 12.0094 10.8031C11.0406 9.99063 9.79063 9.5 8.42813 9.5H5.57188ZM16.5 7.5C17.0531 7.5 17.5 7.94687 17.5 8.5V10H15.5V8.5C15.5 7.94687 15.9469 7.5 16.5 7.5ZM14 8.5V10C13.4469 10 13 10.4469 13 11V15C13 15.5531 13.4469 16 14 16H19C19.5531 16 20 15.5531 20 15V11C20 10.4469 19.5531 10 19 10V8.5C19 7.11875 17.8813 6 16.5 6C15.1187 6 14 7.11875 14 8.5Z" fill="#F04130"/>
                              </g>
                              <defs>
                                <clipPath id="user-icon-1">
                                  <rect width="20" height="16" fill="white"/>
                                </clipPath>
                              </defs>
                            </svg>
                          </figure>

                          <div class="d-flex align-items-center gap-2">
                            <span class="detail">
                              <span class="detail-text">
                                You have a new message from <strong>Admin.</strong>
                              </span>
                            </span>
                            <span class="arricon">
                              <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#arrow-1)">
                                  <rect x="7" y="7" width="24" height="24" rx="5" fill="#F04130"/>
                                </g>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.5172 15.3811C25.8479 15.7865 25.8243 16.3838 25.4463 16.7622L19.604 22.6041C19.4081 22.8 19.1461 22.906 18.8744 22.906C18.6025 22.906 18.341 22.8002 18.1444 22.6041L12.3023 16.762C11.8992 16.3585 11.8992 15.7053 12.3023 15.3028C12.7055 14.8991 13.3589 14.8991 13.7619 15.3027L18.8744 20.4147L23.9867 15.3028C24.3647 14.9243 24.9626 14.9007 25.368 15.2318L25.4464 15.3027L25.5172 15.3811Z" fill="white"/>
                                <defs>
                                <filter id="arrow-1" x="0" y="0" width="38" height="38" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                  <feGaussianBlur stdDeviation="3.5" result="effect1_foregroundBlur_34_61"/>
                                </filter>
                                </defs>
                              </svg>
                            </span>
                          </div>
                        </span>

                        <span class="postedtime">
                          <span class="time">9:35 pm</span>
                        </span>
                      </span>
                    </button>
                  </h2>

                  <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionNotification-3">
                    <div class="accordion-body">
                      <p class="message">
                        Dear <strong>Doctors,</strong>
                        <br>
                        We have a good news for you. Now our website has a new feature from next month. Appointment system is comming soon. From then you will be get a new option in your dashboard and you will see your appointment list there.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- MAIN-SECTION END -->

@endsection
