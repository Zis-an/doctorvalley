  <!-- MY-PROFILE SECTION START -->
  <main class="myprofile" id="main-section">
    <ul class="nav nav-tabs" id="profileTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="personalinformation-tab" data-bs-toggle="tab" data-bs-target="#personalinformation-tab-pane" type="button" role="tab" aria-controls="personalinformation-tab-pane" aria-selected="true">
          Personal Information
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="professionalinformation-tab" data-bs-toggle="tab" data-bs-target="#professionalinformation-tab-pane" type="button" role="tab" aria-controls="professionalinformation-tab-pane" aria-selected="false">
          Professional Information
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="educationalinformation-tab" data-bs-toggle="tab" data-bs-target="#educationalinformation-tab-pane" type="button" role="tab" aria-controls="educationalinformation-tab-pane" aria-selected="false">
          Educational Information
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="userprofileimage-tab" data-bs-toggle="tab" data-bs-target="#userprofileimage-tab-pane" type="button" role="tab" aria-controls="userprofileimage-tab-pane" aria-selected="false">
          Profile Image
        </button>
      </li>
    </ul>

    <div class="tab-content" id="profileTabContent">
      <!-- PERSONAL-INFORMATION -->
      <div class="tab-pane fade show active" id="personalinformation-tab-pane" role="tabpanel" aria-labelledby="personalinformation-tab" tabindex="0">
        <div class="personalinfo">
          <div class="myprofile-detail">
            <figure class="icon">
              <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="30" cy="30" r="30" fill="#F04130" fill-opacity="0.2"/>
                <g clip-path="url(#usericon-1)">
                  <path d="M37.0625 19.5625C37.0625 23.1855 34.123 26.125 30.5 26.125C26.877 26.125 23.9375 23.1855 23.9375 19.5625C23.9375 15.9395 26.877 13 30.5 13C34.123 13 37.0625 15.9395 37.0625 19.5625ZM29.4062 29.9531V48L26.0977 46.3457C24.6689 45.6348 23.124 45.1836 21.5312 45.0264L14.9688 44.3701C13.8545 44.2539 13 43.3174 13 42.1895V28.3125C13 27.1025 13.9775 26.125 15.1875 26.125H17.2588C21.6064 26.125 25.8447 27.4648 29.4062 29.9531ZM31.5938 48V29.9531C35.1553 27.4648 39.3936 26.125 43.7412 26.125H45.8125C47.0225 26.125 48 27.1025 48 28.3125V42.1895C48 43.3105 47.1455 44.2539 46.0312 44.3633L39.4688 45.0195C37.8828 45.1768 36.3311 45.6279 34.9023 46.3389L31.5938 48Z" fill="#F04130"/>
                </g>
                <defs>
                  <clipPath id="usericon-1">
                    <rect width="35" height="35" fill="white" transform="translate(13 13)"/>
                  </clipPath>
                </defs>
              </svg>
            </figure>

            <div class="detail">
              <h2 class="profile-title">PERSONAL INFORMATION</h2>
              <p class="profiletext">
                Update your personal information here.
                This will help us to show your profile with proper information.
              </p>
            </div>
          </div>

          <div class="personalinfo-info">
            <div class="details">
              <div class="details-body">
                <!-- ADD-PERSONAL-INFORMATION -->
                <form class="educationinfoform" id="personalinfoform">
                  <div class="row g-3">
                    <div class="col-md-6 col-12">
                      <div class="inputbox">
                        <label for="full-name" class="inputlabel">
                          Full Name <span>*</span>
                        </label>
                        <input type="text" id="full-name" class="form-control" placeholder="Dr Stephen Strange" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                      <div class="inputbox">
                        <label for="bmdcnumber" class="inputlabel">
                          BMDC Registration No <span>*</span>
                        </label>
                        <input type="text" id="bmdcnumber" class="form-control" placeholder="A-40742" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                      <div class="inputbox">
                        <label for="emailaddress" class="inputlabel">
                          E-mail <span>*</span>
                        </label>
                        <input type="email" id="emailaddress" class="form-control" placeholder="doctor.strange@gmail.com" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                      <div class="inputbox">
                        <label for="phonenumber" class="inputlabel">
                          Phone Number <span>*</span>
                        </label>
                        <input type="tel" pattern="[0-9]{3}-[0-9]{8}" id="phonenumber" class="form-control" placeholder="01965088417" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="gender">
                        <label class="gender-title">
                          Select Your Gender:
                        </label>

                        <div class="gender-box">
                          <div class="gender-single">
                            <input type="radio" id="male" name="gender" checked hidden>
                            <label for="male">
                              <span class="icon">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M15.525 1.1331C15.7232 0.650955 16.1946 0.34024 16.7143 0.34024H22.7143C23.4268 0.34024 24 0.913455 24 1.62595V7.62595C24 8.1456 23.6893 8.61703 23.2071 8.81524C22.725 9.01345 22.1732 8.90631 21.8036 8.53667L20.0143 6.74738L17.1964 9.56524C18.2411 11.0867 18.8571 12.9242 18.8571 14.9117C18.8571 20.1188 14.6357 24.3402 9.42857 24.3402C4.22143 24.3402 0 20.1188 0 14.9117C0 9.70453 4.22143 5.4831 9.42857 5.4831C11.4107 5.4831 13.2536 6.09381 14.775 7.14381L17.5929 4.32595L15.8036 2.53667C15.4339 2.16703 15.3268 1.61524 15.525 1.1331ZM9.42857 20.9117C12.7446 20.9117 15.4286 18.2277 15.4286 14.9117C15.4286 11.5956 12.7446 8.91167 9.42857 8.91167C6.1125 8.91167 3.42857 11.5956 3.42857 14.9117C3.42857 18.2277 6.1125 20.9117 9.42857 20.9117Z" fill="black"/>
                                </svg>
                              </span>
                              <span class="gentext">Male</span>
                            </label>
                          </div>

                          <div class="gender-single">
                            <input type="radio" id="female" name="gender" hidden>
                            <label for="female">
                              <span class="icon">
                                <svg width="18" height="25" viewBox="0 0 18 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M14.25 8.59024C14.25 11.4918 11.9016 13.8402 9 13.8402C6.09844 13.8402 3.75 11.4918 3.75 8.59024C3.75 5.68868 6.09844 3.34024 9 3.34024C11.9016 3.34024 14.25 5.68868 14.25 8.59024ZM10.5 16.7043C14.3391 16.0012 17.25 12.6356 17.25 8.59024C17.25 4.03399 13.5562 0.34024 9 0.34024C4.44375 0.34024 0.75 4.03399 0.75 8.59024C0.75 12.6356 3.66094 16.0012 7.5 16.7043V18.3402H6C5.17031 18.3402 4.5 19.0106 4.5 19.8402C4.5 20.6699 5.17031 21.3402 6 21.3402H7.5V22.8402C7.5 23.6699 8.17031 24.3402 9 24.3402C9.82969 24.3402 10.5 23.6699 10.5 22.8402V21.3402H12C12.8297 21.3402 13.5 20.6699 13.5 19.8402C13.5 19.0106 12.8297 18.3402 12 18.3402H10.5V16.7043Z" fill="black"/>
                                </svg>
                              </span>
                              <span class="gentext">Female</span>
                            </label>
                          </div>

                          <div class="gender-single">
                            <input type="radio" id="others" name="gender" hidden>
                            <label for="others">
                              <span class="icon">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M5.25 0.34024C5.55469 0.34024 5.82656 0.523053 5.94375 0.804303C6.06094 1.08555 5.99531 1.40899 5.77969 1.61993L4.32656 3.07305L5.25 4.00118L5.57812 3.67305C6.01875 3.23243 6.73125 3.23243 7.16719 3.67305C7.60312 4.11368 7.60781 4.82618 7.16719 5.26212L6.83906 5.59024L7.55156 6.30274C8.79844 5.38399 10.3359 4.84024 12 4.84024C13.6641 4.84024 15.2016 5.38399 16.4484 6.30274L19.6734 3.07774L18.2203 1.62462C18.0047 1.40899 17.9438 1.08555 18.0563 0.80899C18.1688 0.532428 18.4453 0.344928 18.75 0.344928H23.25C23.6625 0.344928 24 0.682428 24 1.09493V5.59493C24 5.89962 23.8172 6.17149 23.5359 6.28868C23.2547 6.40587 22.9313 6.34024 22.7203 6.12462L21.2672 4.67149L18.0422 7.89649C18.9562 9.13868 19.5 10.6762 19.5 12.3402C19.5 16.0996 16.7344 19.2121 13.125 19.7559V20.5902H13.875C14.4984 20.5902 15 21.0918 15 21.7152C15 22.3387 14.4984 22.8402 13.875 22.8402H13.125V23.2152C13.125 23.8387 12.6234 24.3402 12 24.3402C11.3766 24.3402 10.875 23.8387 10.875 23.2152V22.8402H10.125C9.50156 22.8402 9 22.3387 9 21.7152C9 21.0918 9.50156 20.5902 10.125 20.5902H10.875V19.7559C7.26562 19.2121 4.5 16.0996 4.5 12.3402C4.5 10.6762 5.04375 9.13868 5.9625 7.8918L5.25 7.1793L4.92188 7.50743C4.48125 7.94805 3.76875 7.94805 3.33281 7.50743C2.89687 7.0668 2.89219 6.3543 3.33281 5.91837L3.66094 5.59024L2.73281 4.6668L1.27969 6.11993C1.06406 6.33555 0.740625 6.39649 0.464062 6.28399C0.1875 6.17149 0 5.89493 0 5.59024V1.09024C0 0.67774 0.3375 0.34024 0.75 0.34024H5.25ZM16.5 12.3402C16.5 9.85587 14.4844 7.84024 12 7.84024C9.51562 7.84024 7.5 9.85587 7.5 12.3402C7.5 14.8246 9.51562 16.8402 12 16.8402C14.4844 16.8402 16.5 14.8246 16.5 12.3402Z" fill="black"/>
                                </svg>
                              </span>
                              <span class="gentext">Others</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="inputbox">
                        <label for="speciality" class="inputlabel">
                          Speciality <span>*</span>
                        </label>
                        <input type="text" class="form-control" id="speciality" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                      <div class="inputbox">
                        <label for="divisions" class="inputlabel">
                          Division <span>*</span>
                        </label>
                        <select id="divisions" class="wide" autocomplete="off">
                          <option value="">Dhaka</option>
                          <option value="">Chittagong</option>
                          <option value="">Mymensingh</option>
                          <option value="">Rangpur</option>
                          <option value="">Barishal</option>
                          <option value="">Sylhet</option>
                          <option value="">Rajshahi</option>
                          <option value="">Khulna</option>
                        </select>
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                      <div class="inputbox">
                        <label for="districts" class="inputlabel">
                          District <span>*</span>
                        </label>
                        <select id="districts" class="wide" autocomplete="off">
                          <option value="">Dhaka</option>
                          <option value="">Dinajpur</option>
                          <option value="">Sherpur</option>
                          <option value="">Chittagong</option>
                          <option value="">Mymensingh</option>
                          <option value="">Rangpur</option>
                          <option value="">Barishal</option>
                          <option value="">Sylhet</option>
                          <option value="">Rajshahi</option>
                          <option value="">Khulna</option>
                        </select>
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                      <div class="inputbox">
                        <label for="thanas" class="inputlabel">
                          Thana <span>*</span>
                        </label>
                        <select id="thanas" class="wide" autocomplete="off">
                          <option value="">Sherpur Sadar</option>
                          <option value="">Phulbari</option>
                          <option value="">Nalitabari</option>
                          <option value="">Jhinaigati</option>
                          <option value="">Nakla</option>
                          <option value="">Sreebardi</option>
                        </select>
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                      <div class="inputbox">
                        <label for="address" class="inputlabel">
                          Address
                        </label>
                        <input type="text" id="address" class="form-control" placeholder="Sherpur Sadar, Sherpur" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="inputbox">
                        <label for="bio" class="inputlabel">
                          Bio
                        </label>
                        <textarea id="bio" class="form-control" placeholder="He is Marvel Universe doctor. who has the ability to do magic." rows="4" autocomplete="off"></textarea>
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                      <div class="socialbox">
                        <span class="icon">
                          <i class="fa-brands fa-facebook-f"></i>
                        </span>

                        <div class="detail">
                          <input type="text" placeholder="https://facebook.com/ratulalmamun" autocomplete="off">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                      <div class="socialbox">
                        <span class="icon">
                          <i class="fa-brands fa-twitter"></i>
                        </span>

                        <div class="detail">
                          <input type="text" placeholder="https://twitter.com/ratulalmamun" autocomplete="off">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                      <div class="socialbox">
                        <span class="icon">
                          <i class="fa-brands fa-youtube"></i>
                        </span>

                        <div class="detail">
                          <input type="text" placeholder="https://youtube.com/ratulalmamun" autocomplete="off">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                      <div class="socialbox">
                        <span class="icon">
                          <i class="fa-brands fa-linkedin-in"></i>
                        </span>

                        <div class="detail">
                          <input type="text" placeholder="https://linkedin.com/ratulalmamun" autocomplete="off">
                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="edubtns">
                        <button class="btn-profile-add">SAVE</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PROFESSIONAL-INFORMATION -->
      <div class="tab-pane fade" id="professionalinformation-tab-pane" role="tabpanel" aria-labelledby="professionalinformation-tab" tabindex="0">
        <div class="professionalinfo">
          <div class="myprofile-detail">
            <figure class="icon">
              <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="30" cy="30" r="30" fill="#F04130" fill-opacity="0.2"/>
                <g clip-path="url(#usericon-1)">
                  <path d="M37.0625 19.5625C37.0625 23.1855 34.123 26.125 30.5 26.125C26.877 26.125 23.9375 23.1855 23.9375 19.5625C23.9375 15.9395 26.877 13 30.5 13C34.123 13 37.0625 15.9395 37.0625 19.5625ZM29.4062 29.9531V48L26.0977 46.3457C24.6689 45.6348 23.124 45.1836 21.5312 45.0264L14.9688 44.3701C13.8545 44.2539 13 43.3174 13 42.1895V28.3125C13 27.1025 13.9775 26.125 15.1875 26.125H17.2588C21.6064 26.125 25.8447 27.4648 29.4062 29.9531ZM31.5938 48V29.9531C35.1553 27.4648 39.3936 26.125 43.7412 26.125H45.8125C47.0225 26.125 48 27.1025 48 28.3125V42.1895C48 43.3105 47.1455 44.2539 46.0312 44.3633L39.4688 45.0195C37.8828 45.1768 36.3311 45.6279 34.9023 46.3389L31.5938 48Z" fill="#F04130"/>
                </g>
                <defs>
                  <clipPath id="usericon-1">
                    <rect width="35" height="35" fill="white" transform="translate(13 13)"/>
                  </clipPath>
                </defs>
              </svg>
            </figure>

            <div class="detail">
              <h2 class="profile-title">PROFESSIONAL INFORMATION</h2>
              <p class="profiletext">
                Update your professional information here.
                This will help us to show your profile with proper information.
              </p>
            </div>
          </div>

          <div class="professionalinfo-info">
            <div class="details">
              <div class="treatment-summary">
                <span class="summarytitle">Treatment Summary</span>
                <p class="summarytext">
                  A Treatment Summary is a document produced by the doctor or
                  Specialist Nurse at the end of initial treatment for cancer.
                  It is shared with the patient and their GP.
                  The Treatment Summary: describes the treatment that that person has received.
                </p>
              </div>

              <div class="details-header">
                <h3 class="title">PROFESSIONAL EXPERIENCE(S)</h3>
              </div>

              <div class="details-body">
                <!-- EMPTY-EXPERIENCE -->
                <div class="emptyeducation">
                  <figure class="icon">
                    <svg width="104" height="104" viewBox="0 0 104 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.375 9.75H66.625C67.5188 9.75 68.25 10.4812 68.25 11.375V19.5H35.75V11.375C35.75 10.4812 36.4813 9.75 37.375 9.75ZM26 11.375V19.5H13C5.82969 19.5 0 25.3297 0 32.5V84.5C0 91.6703 5.82969 97.5 13 97.5H91C98.1703 97.5 104 91.6703 104 84.5V32.5C104 25.3297 98.1703 19.5 91 19.5H78V11.375C78 5.09844 72.9016 0 66.625 0H37.375C31.0984 0 26 5.09844 26 11.375ZM45.5 42.25C45.5 40.4625 46.9625 39 48.75 39H55.25C57.0375 39 58.5 40.4625 58.5 42.25V52H68.25C70.0375 52 71.5 53.4625 71.5 55.25V61.75C71.5 63.5375 70.0375 65 68.25 65H58.5V74.75C58.5 76.5375 57.0375 78 55.25 78H48.75C46.9625 78 45.5 76.5375 45.5 74.75V65H35.75C33.9625 65 32.5 63.5375 32.5 61.75V55.25C32.5 53.4625 33.9625 52 35.75 52H45.5V42.25Z" fill="#F04130"/>
                    </svg>
                  </figure>

                  <div class="info">
                    <p>
                      Currently no data exists! Please click on the following
                      button to add your employment information.
                    </p>
                  </div>

                  <button class="btn-qualifications">
                    <span class="text">ADD EXPERIENCES</span>
                    <span class="icon">
                      <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#plus-symble-1)">
                          <path d="M10.4014 20.6365C15.9248 20.6365 20.4014 16.1599 20.4014 10.6365C20.4014 5.11304 15.9248 0.636475 10.4014 0.636475C4.87793 0.636475 0.401367 5.11304 0.401367 10.6365C0.401367 16.1599 4.87793 20.6365 10.4014 20.6365ZM9.46387 14.074V11.574H6.96387C6.44434 11.574 6.02637 11.156 6.02637 10.6365C6.02637 10.1169 6.44434 9.69897 6.96387 9.69897H9.46387V7.19897C9.46387 6.67944 9.88184 6.26147 10.4014 6.26147C10.9209 6.26147 11.3389 6.67944 11.3389 7.19897V9.69897H13.8389C14.3584 9.69897 14.7764 10.1169 14.7764 10.6365C14.7764 11.156 14.3584 11.574 13.8389 11.574H11.3389V14.074C11.3389 14.5935 10.9209 15.0115 10.4014 15.0115C9.88184 15.0115 9.46387 14.5935 9.46387 14.074Z" fill="#F04130"/>
                        </g>
                        <defs>
                          <clipPath id="plus-symble-1">
                            <rect width="20" height="20" fill="white" transform="translate(0.401367 0.636475)"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                  </button>
                </div>

                <!-- ADD-EXPERIENCE -->
                <form class="educationinfoform d-none" id="experienceform">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <div class="inputbox">
                        <label for="organization-name" class="inputlabel">
                          Institute/Organization Name <span>*</span>
                        </label>
                        <input type="text" id="organization-name" class="form-control" placeholder="Dhaka Medical College" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="inputbox">
                        <label for="designation" class="inputlabel">
                          Designation <span>*</span>
                        </label>
                        <input type="text" id="designation" class="form-control" placeholder="Dhaka Medical College" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="inputbox">
                        <label for="starting-calendar" class="inputlabel">
                          From Date <span>*</span>
                        </label>
                        <input type="text" class="form-control" placeholder="01/01/2016" id="starting-calendar" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="inputbox">
                        <label for="ending-calendar" class="inputlabel">
                          To Date <span>*</span>
                        </label>
                        <input type="text" class="form-control" placeholder="31/12/2020" id="ending-calendar" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="checkfield">
                        <input type="checkbox" class="checkinput" id="currentworking" autocomplete="off" hidden>
                        <label for="currentworking" class="checklabel">
                          Currenty Working
                        </label>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="inputbox">
                        <label for="institutelocation" class="inputlabel">
                          Institute/Organiztion Location
                        </label>
                        <input type="text" id="institutelocation" class="form-control" placeholder="Sherpur Sadar, Sherpur" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="edubtns">
                        <button class="btn-profile-add">ADD</button>
                        <button class="btn-profile-close">CLOSE</button>
                      </div>
                    </div>
                  </div>
                </form>

                <!-- EXPERIENCE-LIST -->
                <div class="qualificationsinfo d-none">
                  <div class="qualificationlist">
                    <div class="qualificationlist-item">
                      <div class="institute">
                        <span class="institute-name">Sherpur Abedin Hospital (Doctor Saab)</span>
                      </div>

                      <div class="duration">
                        <span class="coursedeadline">3 Years Experience</span>
                      </div>

                      <div class="actions">
                        <button class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8399 22.5406V24.7902C11.8399 24.8883 11.8789 24.9824 11.9482 25.0518C12.0176 25.1212 12.1117 25.1602 12.2099 25.1602H14.4595C14.508 25.1608 14.5561 25.1513 14.6007 25.1322C14.6454 25.113 14.6855 25.0848 14.7185 25.0492L22.7993 16.9758L20.0243 14.2008L11.9509 22.2742C11.9152 22.3087 11.8869 22.3501 11.8678 22.3959C11.8487 22.4417 11.8392 22.491 11.8399 22.5406ZM24.9453 14.8298C25.0831 14.6911 25.1605 14.5036 25.1605 14.3081C25.1605 14.1126 25.0831 13.925 24.9453 13.7864L23.2137 12.0548C23.075 11.917 22.8875 11.8396 22.692 11.8396C22.4965 11.8396 22.3089 11.917 22.1703 12.0548L20.8161 13.409L23.5911 16.184L24.9453 14.8298Z" fill="#292E3E"/>
                            <path opacity="0.1" d="M18.5 37C28.7173 37 37 28.7173 37 18.5C37 8.28273 28.7173 0 18.5 0C8.28273 0 0 8.28273 0 18.5C0 28.7173 8.28273 37 18.5 37Z" fill="#F04130"/>
                          </svg>
                        </button>

                        <button class="btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5561 13.902C26.1417 13.3164 26.1417 12.3652 25.5561 11.7796C24.9704 11.1939 24.0193 11.1939 23.4336 11.7796L18.5 16.7179L13.5617 11.7843C12.976 11.1986 12.0249 11.1986 11.4392 11.7843C10.8536 12.3699 10.8536 13.321 11.4392 13.9067L16.3776 18.8403L11.4439 23.7786C10.8583 24.3643 10.8583 25.3154 11.4439 25.9011C12.0296 26.4867 12.9807 26.4867 13.5664 25.9011L18.5 20.9628L23.4383 25.8964C24.024 26.4821 24.9751 26.4821 25.5608 25.8964C26.1464 25.3107 26.1464 24.3596 25.5608 23.774L20.6224 18.8403L25.5561 13.902Z" fill="#292E3E"/>
                            <path opacity="0.1" d="M18.5 37C28.7173 37 37 28.7173 37 18.5C37 8.28273 28.7173 0 18.5 0C8.28273 0 0 8.28273 0 18.5C0 28.7173 8.28273 37 18.5 37Z" fill="#F04130"/>
                          </svg>
                        </button>
                      </div>
                    </div>

                    <div class="qualificationlist-item">
                      <div class="institute">
                        <span class="institute-name">Sherpur Abedin Hospital (Doctor Saab)</span>
                      </div>

                      <div class="duration">
                        <span class="coursedeadline">3 Years Experience</span>
                      </div>

                      <div class="actions">
                        <button class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8399 22.5406V24.7902C11.8399 24.8883 11.8789 24.9824 11.9482 25.0518C12.0176 25.1212 12.1117 25.1602 12.2099 25.1602H14.4595C14.508 25.1608 14.5561 25.1513 14.6007 25.1322C14.6454 25.113 14.6855 25.0848 14.7185 25.0492L22.7993 16.9758L20.0243 14.2008L11.9509 22.2742C11.9152 22.3087 11.8869 22.3501 11.8678 22.3959C11.8487 22.4417 11.8392 22.491 11.8399 22.5406ZM24.9453 14.8298C25.0831 14.6911 25.1605 14.5036 25.1605 14.3081C25.1605 14.1126 25.0831 13.925 24.9453 13.7864L23.2137 12.0548C23.075 11.917 22.8875 11.8396 22.692 11.8396C22.4965 11.8396 22.3089 11.917 22.1703 12.0548L20.8161 13.409L23.5911 16.184L24.9453 14.8298Z" fill="#292E3E"/>
                            <path opacity="0.1" d="M18.5 37C28.7173 37 37 28.7173 37 18.5C37 8.28273 28.7173 0 18.5 0C8.28273 0 0 8.28273 0 18.5C0 28.7173 8.28273 37 18.5 37Z" fill="#F04130"/>
                          </svg>
                        </button>

                        <button class="btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5561 13.902C26.1417 13.3164 26.1417 12.3652 25.5561 11.7796C24.9704 11.1939 24.0193 11.1939 23.4336 11.7796L18.5 16.7179L13.5617 11.7843C12.976 11.1986 12.0249 11.1986 11.4392 11.7843C10.8536 12.3699 10.8536 13.321 11.4392 13.9067L16.3776 18.8403L11.4439 23.7786C10.8583 24.3643 10.8583 25.3154 11.4439 25.9011C12.0296 26.4867 12.9807 26.4867 13.5664 25.9011L18.5 20.9628L23.4383 25.8964C24.024 26.4821 24.9751 26.4821 25.5608 25.8964C26.1464 25.3107 26.1464 24.3596 25.5608 23.774L20.6224 18.8403L25.5561 13.902Z" fill="#292E3E"/>
                            <path opacity="0.1" d="M18.5 37C28.7173 37 37 28.7173 37 18.5C37 8.28273 28.7173 0 18.5 0C8.28273 0 0 8.28273 0 18.5C0 28.7173 8.28273 37 18.5 37Z" fill="#F04130"/>
                          </svg>
                        </button>
                      </div>
                    </div>

                    <div class="qualificationlist-item">
                      <div class="institute">
                        <span class="institute-name">Sherpur Abedin Hospital (Doctor Saab)</span>
                      </div>

                      <div class="duration">
                        <span class="coursedeadline">3 Years Experience</span>
                      </div>

                      <div class="actions">
                        <button class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8399 22.5406V24.7902C11.8399 24.8883 11.8789 24.9824 11.9482 25.0518C12.0176 25.1212 12.1117 25.1602 12.2099 25.1602H14.4595C14.508 25.1608 14.5561 25.1513 14.6007 25.1322C14.6454 25.113 14.6855 25.0848 14.7185 25.0492L22.7993 16.9758L20.0243 14.2008L11.9509 22.2742C11.9152 22.3087 11.8869 22.3501 11.8678 22.3959C11.8487 22.4417 11.8392 22.491 11.8399 22.5406ZM24.9453 14.8298C25.0831 14.6911 25.1605 14.5036 25.1605 14.3081C25.1605 14.1126 25.0831 13.925 24.9453 13.7864L23.2137 12.0548C23.075 11.917 22.8875 11.8396 22.692 11.8396C22.4965 11.8396 22.3089 11.917 22.1703 12.0548L20.8161 13.409L23.5911 16.184L24.9453 14.8298Z" fill="#292E3E"/>
                            <path opacity="0.1" d="M18.5 37C28.7173 37 37 28.7173 37 18.5C37 8.28273 28.7173 0 18.5 0C8.28273 0 0 8.28273 0 18.5C0 28.7173 8.28273 37 18.5 37Z" fill="#F04130"/>
                          </svg>
                        </button>

                        <button class="btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5561 13.902C26.1417 13.3164 26.1417 12.3652 25.5561 11.7796C24.9704 11.1939 24.0193 11.1939 23.4336 11.7796L18.5 16.7179L13.5617 11.7843C12.976 11.1986 12.0249 11.1986 11.4392 11.7843C10.8536 12.3699 10.8536 13.321 11.4392 13.9067L16.3776 18.8403L11.4439 23.7786C10.8583 24.3643 10.8583 25.3154 11.4439 25.9011C12.0296 26.4867 12.9807 26.4867 13.5664 25.9011L18.5 20.9628L23.4383 25.8964C24.024 26.4821 24.9751 26.4821 25.5608 25.8964C26.1464 25.3107 26.1464 24.3596 25.5608 23.774L20.6224 18.8403L25.5561 13.902Z" fill="#292E3E"/>
                            <path opacity="0.1" d="M18.5 37C28.7173 37 37 28.7173 37 18.5C37 8.28273 28.7173 0 18.5 0C8.28273 0 0 8.28273 0 18.5C0 28.7173 8.28273 37 18.5 37Z" fill="#F04130"/>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>

                  <button class="btn-qualifications mx-auto">
                    <span class="text">ADD EXPERIENCES</span>
                    <span class="icon">
                      <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#plus-symble-1)">
                          <path d="M10.4014 20.6365C15.9248 20.6365 20.4014 16.1599 20.4014 10.6365C20.4014 5.11304 15.9248 0.636475 10.4014 0.636475C4.87793 0.636475 0.401367 5.11304 0.401367 10.6365C0.401367 16.1599 4.87793 20.6365 10.4014 20.6365ZM9.46387 14.074V11.574H6.96387C6.44434 11.574 6.02637 11.156 6.02637 10.6365C6.02637 10.1169 6.44434 9.69897 6.96387 9.69897H9.46387V7.19897C9.46387 6.67944 9.88184 6.26147 10.4014 6.26147C10.9209 6.26147 11.3389 6.67944 11.3389 7.19897V9.69897H13.8389C14.3584 9.69897 14.7764 10.1169 14.7764 10.6365C14.7764 11.156 14.3584 11.574 13.8389 11.574H11.3389V14.074C11.3389 14.5935 10.9209 15.0115 10.4014 15.0115C9.88184 15.0115 9.46387 14.5935 9.46387 14.074Z" fill="#F04130"/>
                        </g>
                        <defs>
                          <clipPath id="plus-symble-1">
                            <rect width="20" height="20" fill="white" transform="translate(0.401367 0.636475)"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- EDUCATIONAL-IMFORMATION -->
      <div class="tab-pane fade" id="educationalinformation-tab-pane" role="tabpanel" aria-labelledby="educationalinformation-tab" tabindex="0">
        <div class="educationinfo">
          <div class="myprofile-detail">
            <figure class="icon">
              <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="30" cy="30" r="30" fill="#F04130" fill-opacity="0.2"/>
                <g clip-path="url(#usericon-1)">
                  <path d="M37.0625 19.5625C37.0625 23.1855 34.123 26.125 30.5 26.125C26.877 26.125 23.9375 23.1855 23.9375 19.5625C23.9375 15.9395 26.877 13 30.5 13C34.123 13 37.0625 15.9395 37.0625 19.5625ZM29.4062 29.9531V48L26.0977 46.3457C24.6689 45.6348 23.124 45.1836 21.5312 45.0264L14.9688 44.3701C13.8545 44.2539 13 43.3174 13 42.1895V28.3125C13 27.1025 13.9775 26.125 15.1875 26.125H17.2588C21.6064 26.125 25.8447 27.4648 29.4062 29.9531ZM31.5938 48V29.9531C35.1553 27.4648 39.3936 26.125 43.7412 26.125H45.8125C47.0225 26.125 48 27.1025 48 28.3125V42.1895C48 43.3105 47.1455 44.2539 46.0312 44.3633L39.4688 45.0195C37.8828 45.1768 36.3311 45.6279 34.9023 46.3389L31.5938 48Z" fill="#F04130"/>
                </g>
                <defs>
                  <clipPath id="usericon-1">
                    <rect width="35" height="35" fill="white" transform="translate(13 13)"/>
                  </clipPath>
                </defs>
              </svg>
            </figure>

            <div class="detail">
              <h2 class="profile-title">EDUCATIONAL INFORMATION</h2>
              <p class="profiletext">
                Update your educational information here.
                This will help us to show your profile with proper information.
              </p>
            </div>
          </div>

          <div class="educationinfo-info">
            <div class="details">
              <div class="details-header">
                <h3 class="title">Academic Qualifination(s)</h3>
              </div>

              <div class="details-body">
                <!-- EMPTY-EDUCATION -->
                <div class="emptyeducation">
                  <figure class="icon">
                    <svg width="130" height="104" viewBox="0 0 130 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#graduate-cap-1)">
                        <path d="M65.0002 6.5C63.3549 6.5 61.7299 6.78437 60.1861 7.33281L3.20957 27.9094C1.27988 28.6203 0.000196867 30.4484 0.000196867 32.5C0.000196867 34.5516 1.27988 36.3797 3.20957 37.0906L14.9705 41.3359C11.6393 46.5766 9.7502 52.7719 9.7502 59.2922V65C9.7502 70.7688 7.55645 76.7203 5.22051 81.4125C3.9002 84.0531 2.39707 86.6531 0.650197 89.05C0.000196874 89.9234 -0.182616 91.0609 0.183009 92.0969C0.548634 93.1328 1.40176 93.9047 2.45801 94.1688L15.458 97.4188C16.3111 97.6422 17.2252 97.4797 17.9768 97.0125C18.7283 96.5453 19.2564 95.7734 19.4189 94.9C21.1658 86.2063 20.2924 78.4062 18.9924 72.8203C18.3424 69.9359 17.4689 66.9906 16.2502 64.2891V59.2922C16.2502 53.1578 18.3221 47.3687 21.9174 42.7375C24.5377 39.5891 27.9299 37.05 31.9111 35.4859L63.8018 22.9531C65.4674 22.3031 67.3564 23.1156 68.0064 24.7812C68.6564 26.4469 67.8439 28.3359 66.1783 28.9859L34.2877 41.5187C31.7689 42.5141 29.5549 44.0375 27.7471 45.9062L60.1658 57.6063C61.7096 58.1547 63.3346 58.4391 64.9799 58.4391C66.6252 58.4391 68.2502 58.1547 69.7939 57.6063L126.791 37.0906C128.721 36.4 130 34.5516 130 32.5C130 30.4484 128.721 28.6203 126.791 27.9094L69.8143 7.33281C68.2705 6.78437 66.6455 6.5 65.0002 6.5ZM26.0002 82.875C26.0002 90.0453 43.4689 97.5 65.0002 97.5C86.5314 97.5 104 90.0453 104 82.875L100.892 53.3406L72.008 63.7812C69.7533 64.5938 67.3768 65 65.0002 65C62.6236 65 60.2268 64.5938 57.9924 63.7812L29.108 53.3406L26.0002 82.875Z" fill="#F04130"/>
                      </g>
                      <defs>
                      <clipPath id="graduate-cap-1">
                        <rect width="130" height="104" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>
                  </figure>

                  <div class="info">
                    <p>
                      Currently no data exists! Please click on the following button to add your EDUCATIONAL information.
                    </p>
                  </div>

                  <button class="btn-qualifications">
                    <span class="text">ADD QUALIFICATIONS</span>
                    <span class="icon">
                      <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#plus-symble-1)">
                          <path d="M10.4014 20.6365C15.9248 20.6365 20.4014 16.1599 20.4014 10.6365C20.4014 5.11304 15.9248 0.636475 10.4014 0.636475C4.87793 0.636475 0.401367 5.11304 0.401367 10.6365C0.401367 16.1599 4.87793 20.6365 10.4014 20.6365ZM9.46387 14.074V11.574H6.96387C6.44434 11.574 6.02637 11.156 6.02637 10.6365C6.02637 10.1169 6.44434 9.69897 6.96387 9.69897H9.46387V7.19897C9.46387 6.67944 9.88184 6.26147 10.4014 6.26147C10.9209 6.26147 11.3389 6.67944 11.3389 7.19897V9.69897H13.8389C14.3584 9.69897 14.7764 10.1169 14.7764 10.6365C14.7764 11.156 14.3584 11.574 13.8389 11.574H11.3389V14.074C11.3389 14.5935 10.9209 15.0115 10.4014 15.0115C9.88184 15.0115 9.46387 14.5935 9.46387 14.074Z" fill="#F04130"/>
                        </g>
                        <defs>
                          <clipPath id="plus-symble-1">
                            <rect width="20" height="20" fill="white" transform="translate(0.401367 0.636475)"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                  </button>
                </div>

                <!-- ADD-EDUCATION -->
                <form class="educationinfoform d-none" id="educationform">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <div class="inputbox">
                        <label for="normal-select-1" class="inputlabel">
                          Degree Title <span>*</span>
                        </label>
                        <select id="normal-select-1" class="wide" autocomplete="off">
                          <option value="">MBBS</option>
                          <option value="">DENTAL</option>
                          <option value="">NEWEST</option>
                          <option value="">OLDEST</option>
                          <option value="">OTHER</option>
                        </select>
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="inputbox">
                        <label for="selectinstitute" class="inputlabel">
                          Select Institute <span>*</span>
                        </label>
                        <select id="selectinstitute" class="wide" autocomplete="off">
                          <option value="">Dhaka Medical College</option>
                          <option value="">Mymensingh Medical College</option>
                          <option value="">Chittagong Medical</option>
                          <option value="">Modarn Medical</option>
                          <option value="">Dhaka Medical College</option>
                          <option value="">Mymensingh Medical College</option>
                          <option value="">Chittagong Medical</option>
                          <option value="">Dhaka Medical College</option>
                          <option value="">Mymensingh Medical College</option>
                          <option value="">Chittagong Medical</option>
                          <option value="">Modarn Medical</option>
                          <option value="">Dhaka Medical College</option>
                          <option value="">Mymensingh Medical College</option>
                          <option value="">Chittagong Medical</option>
                          <option value="">Modarn Medical</option>
                          <option value="">Dhaka Medical College</option>
                          <option value="">Mymensingh Medical College</option>
                          <option value="">Chittagong Medical</option>
                          <option value="">Modarn Medical</option>
                          <option value="">Other</option>
                        </select>
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="inputbox">
                        <label for="majorcourse" class="inputlabel">
                          Major Course <span>*</span>
                        </label>
                        <input type="text" id="majorcourse" class="form-control" placeholder="Dental" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="inputbox">
                        <label for="majorcourse2" class="inputlabel">
                          Major Course <span>*</span>
                        </label>
                        <input type="text" id="majorcourse2" class="form-control" placeholder="Dental" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="inputbox">
                        <label for="institutename" class="inputlabel">
                          Institution Name <span>*</span>
                        </label>
                        <input type="text" id="institutename" class="form-control" placeholder="Dental" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="inputbox">
                        <label for="starting-calendar" class="inputlabel">
                          From Date <span>*</span>
                        </label>
                        <input type="text" class="form-control" placeholder="01/01/2016" id="starting-calendar" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="inputbox">
                        <label for="ending-calendar" class="inputlabel">
                          To Date <span>*</span>
                        </label>
                        <input type="text" class="form-control" placeholder="31/12/2020" id="ending-calendar" autocomplete="off">
                        <p class="error-message d-none">This field is required</p>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="checkfield">
                        <input type="checkbox" class="checkinput" id="currentstudy" autocomplete="off" hidden>
                        <label for="currentstudy" class="checklabel">
                          Currenty Studying
                        </label>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="edubtns">
                        <button class="btn-profile-add">ADD</button>
                        <button class="btn-profile-close">CLOSE</button>
                      </div>
                    </div>
                  </div>
                </form>

                <!-- QUALIFICATION-LIST -->
                <div class="qualificationsinfo d-none">
                  <div class="qualificationlist">
                    <div class="qualificationlist-item">
                      <div class="institute">
                        <span class="institute-name">Dhaka Medical College(MBBS)</span>
                      </div>

                      <div class="duration">
                        <span class="coursedeadline">4 Year course</span>
                      </div>

                      <div class="actions">
                        <button class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8399 22.5406V24.7902C11.8399 24.8883 11.8789 24.9824 11.9482 25.0518C12.0176 25.1212 12.1117 25.1602 12.2099 25.1602H14.4595C14.508 25.1608 14.5561 25.1513 14.6007 25.1322C14.6454 25.113 14.6855 25.0848 14.7185 25.0492L22.7993 16.9758L20.0243 14.2008L11.9509 22.2742C11.9152 22.3087 11.8869 22.3501 11.8678 22.3959C11.8487 22.4417 11.8392 22.491 11.8399 22.5406ZM24.9453 14.8298C25.0831 14.6911 25.1605 14.5036 25.1605 14.3081C25.1605 14.1126 25.0831 13.925 24.9453 13.7864L23.2137 12.0548C23.075 11.917 22.8875 11.8396 22.692 11.8396C22.4965 11.8396 22.3089 11.917 22.1703 12.0548L20.8161 13.409L23.5911 16.184L24.9453 14.8298Z" fill="#292E3E"/>
                            <path opacity="0.1" d="M18.5 37C28.7173 37 37 28.7173 37 18.5C37 8.28273 28.7173 0 18.5 0C8.28273 0 0 8.28273 0 18.5C0 28.7173 8.28273 37 18.5 37Z" fill="#F04130"/>
                          </svg>
                        </button>

                        <button class="btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5561 13.902C26.1417 13.3164 26.1417 12.3652 25.5561 11.7796C24.9704 11.1939 24.0193 11.1939 23.4336 11.7796L18.5 16.7179L13.5617 11.7843C12.976 11.1986 12.0249 11.1986 11.4392 11.7843C10.8536 12.3699 10.8536 13.321 11.4392 13.9067L16.3776 18.8403L11.4439 23.7786C10.8583 24.3643 10.8583 25.3154 11.4439 25.9011C12.0296 26.4867 12.9807 26.4867 13.5664 25.9011L18.5 20.9628L23.4383 25.8964C24.024 26.4821 24.9751 26.4821 25.5608 25.8964C26.1464 25.3107 26.1464 24.3596 25.5608 23.774L20.6224 18.8403L25.5561 13.902Z" fill="#292E3E"/>
                            <path opacity="0.1" d="M18.5 37C28.7173 37 37 28.7173 37 18.5C37 8.28273 28.7173 0 18.5 0C8.28273 0 0 8.28273 0 18.5C0 28.7173 8.28273 37 18.5 37Z" fill="#F04130"/>
                          </svg>
                        </button>
                      </div>
                    </div>

                    <div class="qualificationlist-item">
                      <div class="institute">
                        <span class="institute-name">Dhaka Medical College(MBBS)</span>
                      </div>

                      <div class="duration">
                        <span class="coursedeadline">4 Year course</span>
                      </div>

                      <div class="actions">
                        <button class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8399 22.5406V24.7902C11.8399 24.8883 11.8789 24.9824 11.9482 25.0518C12.0176 25.1212 12.1117 25.1602 12.2099 25.1602H14.4595C14.508 25.1608 14.5561 25.1513 14.6007 25.1322C14.6454 25.113 14.6855 25.0848 14.7185 25.0492L22.7993 16.9758L20.0243 14.2008L11.9509 22.2742C11.9152 22.3087 11.8869 22.3501 11.8678 22.3959C11.8487 22.4417 11.8392 22.491 11.8399 22.5406ZM24.9453 14.8298C25.0831 14.6911 25.1605 14.5036 25.1605 14.3081C25.1605 14.1126 25.0831 13.925 24.9453 13.7864L23.2137 12.0548C23.075 11.917 22.8875 11.8396 22.692 11.8396C22.4965 11.8396 22.3089 11.917 22.1703 12.0548L20.8161 13.409L23.5911 16.184L24.9453 14.8298Z" fill="#292E3E"/>
                            <path opacity="0.1" d="M18.5 37C28.7173 37 37 28.7173 37 18.5C37 8.28273 28.7173 0 18.5 0C8.28273 0 0 8.28273 0 18.5C0 28.7173 8.28273 37 18.5 37Z" fill="#F04130"/>
                          </svg>
                        </button>

                        <button class="btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5561 13.902C26.1417 13.3164 26.1417 12.3652 25.5561 11.7796C24.9704 11.1939 24.0193 11.1939 23.4336 11.7796L18.5 16.7179L13.5617 11.7843C12.976 11.1986 12.0249 11.1986 11.4392 11.7843C10.8536 12.3699 10.8536 13.321 11.4392 13.9067L16.3776 18.8403L11.4439 23.7786C10.8583 24.3643 10.8583 25.3154 11.4439 25.9011C12.0296 26.4867 12.9807 26.4867 13.5664 25.9011L18.5 20.9628L23.4383 25.8964C24.024 26.4821 24.9751 26.4821 25.5608 25.8964C26.1464 25.3107 26.1464 24.3596 25.5608 23.774L20.6224 18.8403L25.5561 13.902Z" fill="#292E3E"/>
                            <path opacity="0.1" d="M18.5 37C28.7173 37 37 28.7173 37 18.5C37 8.28273 28.7173 0 18.5 0C8.28273 0 0 8.28273 0 18.5C0 28.7173 8.28273 37 18.5 37Z" fill="#F04130"/>
                          </svg>
                        </button>
                      </div>
                    </div>

                    <div class="qualificationlist-item">
                      <div class="institute">
                        <span class="institute-name">Dhaka Medical College(MBBS)</span>
                      </div>

                      <div class="duration">
                        <span class="coursedeadline">4 Year course</span>
                      </div>

                      <div class="actions">
                        <button class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8399 22.5406V24.7902C11.8399 24.8883 11.8789 24.9824 11.9482 25.0518C12.0176 25.1212 12.1117 25.1602 12.2099 25.1602H14.4595C14.508 25.1608 14.5561 25.1513 14.6007 25.1322C14.6454 25.113 14.6855 25.0848 14.7185 25.0492L22.7993 16.9758L20.0243 14.2008L11.9509 22.2742C11.9152 22.3087 11.8869 22.3501 11.8678 22.3959C11.8487 22.4417 11.8392 22.491 11.8399 22.5406ZM24.9453 14.8298C25.0831 14.6911 25.1605 14.5036 25.1605 14.3081C25.1605 14.1126 25.0831 13.925 24.9453 13.7864L23.2137 12.0548C23.075 11.917 22.8875 11.8396 22.692 11.8396C22.4965 11.8396 22.3089 11.917 22.1703 12.0548L20.8161 13.409L23.5911 16.184L24.9453 14.8298Z" fill="#292E3E"/>
                            <path opacity="0.1" d="M18.5 37C28.7173 37 37 28.7173 37 18.5C37 8.28273 28.7173 0 18.5 0C8.28273 0 0 8.28273 0 18.5C0 28.7173 8.28273 37 18.5 37Z" fill="#F04130"/>
                          </svg>
                        </button>

                        <button class="btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5561 13.902C26.1417 13.3164 26.1417 12.3652 25.5561 11.7796C24.9704 11.1939 24.0193 11.1939 23.4336 11.7796L18.5 16.7179L13.5617 11.7843C12.976 11.1986 12.0249 11.1986 11.4392 11.7843C10.8536 12.3699 10.8536 13.321 11.4392 13.9067L16.3776 18.8403L11.4439 23.7786C10.8583 24.3643 10.8583 25.3154 11.4439 25.9011C12.0296 26.4867 12.9807 26.4867 13.5664 25.9011L18.5 20.9628L23.4383 25.8964C24.024 26.4821 24.9751 26.4821 25.5608 25.8964C26.1464 25.3107 26.1464 24.3596 25.5608 23.774L20.6224 18.8403L25.5561 13.902Z" fill="#292E3E"/>
                            <path opacity="0.1" d="M18.5 37C28.7173 37 37 28.7173 37 18.5C37 8.28273 28.7173 0 18.5 0C8.28273 0 0 8.28273 0 18.5C0 28.7173 8.28273 37 18.5 37Z" fill="#F04130"/>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>

                  <button class="btn-qualifications mx-auto">
                    <span class="text">ADD QUALIFICATIONS</span>
                    <span class="icon">
                      <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#plus-symble-1)">
                          <path d="M10.4014 20.6365C15.9248 20.6365 20.4014 16.1599 20.4014 10.6365C20.4014 5.11304 15.9248 0.636475 10.4014 0.636475C4.87793 0.636475 0.401367 5.11304 0.401367 10.6365C0.401367 16.1599 4.87793 20.6365 10.4014 20.6365ZM9.46387 14.074V11.574H6.96387C6.44434 11.574 6.02637 11.156 6.02637 10.6365C6.02637 10.1169 6.44434 9.69897 6.96387 9.69897H9.46387V7.19897C9.46387 6.67944 9.88184 6.26147 10.4014 6.26147C10.9209 6.26147 11.3389 6.67944 11.3389 7.19897V9.69897H13.8389C14.3584 9.69897 14.7764 10.1169 14.7764 10.6365C14.7764 11.156 14.3584 11.574 13.8389 11.574H11.3389V14.074C11.3389 14.5935 10.9209 15.0115 10.4014 15.0115C9.88184 15.0115 9.46387 14.5935 9.46387 14.074Z" fill="#F04130"/>
                        </g>
                        <defs>
                          <clipPath id="plus-symble-1">
                            <rect width="20" height="20" fill="white" transform="translate(0.401367 0.636475)"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PROFILE-IMAGE -->
      <div class="tab-pane fade" id="userprofileimage-tab-pane" role="tabpanel" aria-labelledby="userprofileimage-tab" tabindex="0">
        <div class="profileimage">
          <div class="myprofile-detail">
            <figure class="icon">
              <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="30" cy="30" r="30" fill="#F04130" fill-opacity="0.2"/>
                <g clip-path="url(#usericon-1)">
                  <path d="M37.0625 19.5625C37.0625 23.1855 34.123 26.125 30.5 26.125C26.877 26.125 23.9375 23.1855 23.9375 19.5625C23.9375 15.9395 26.877 13 30.5 13C34.123 13 37.0625 15.9395 37.0625 19.5625ZM29.4062 29.9531V48L26.0977 46.3457C24.6689 45.6348 23.124 45.1836 21.5312 45.0264L14.9688 44.3701C13.8545 44.2539 13 43.3174 13 42.1895V28.3125C13 27.1025 13.9775 26.125 15.1875 26.125H17.2588C21.6064 26.125 25.8447 27.4648 29.4062 29.9531ZM31.5938 48V29.9531C35.1553 27.4648 39.3936 26.125 43.7412 26.125H45.8125C47.0225 26.125 48 27.1025 48 28.3125V42.1895C48 43.3105 47.1455 44.2539 46.0312 44.3633L39.4688 45.0195C37.8828 45.1768 36.3311 45.6279 34.9023 46.3389L31.5938 48Z" fill="#F04130"/>
                </g>
                <defs>
                  <clipPath id="usericon-1">
                    <rect width="35" height="35" fill="white" transform="translate(13 13)"/>
                  </clipPath>
                </defs>
              </svg>
            </figure>

            <div class="detail">
              <h2 class="profile-title">PROFILE IMAGE</h2>
              <p class="profiletext">
                Update your profile image here.
                This will help us to show your profile with proper image.
              </p>
            </div>
          </div>

          <div class="profileimage-info">
            <div class="details emptyprofile">
              <figure class="default-thumb">
                <img src="../dashboard/assets/images/avatar/default-profile.svg" alt="default-profile" id="uploadedImage" class="default-image">

                <input type="file" id="profileImage" multiple hidden>
                <label for="profileImage" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Upload Profile">
                  <svg width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M55.5 28.4C55.5 43.8154 43.1811 56.2999 28 56.2999C12.8188 56.2999 0.5 43.8154 0.5 28.4C0.5 12.9845 12.8188 0.5 28 0.5C43.1811 0.5 55.5 12.9845 55.5 28.4Z" fill="#707070" stroke="white"/>
                    <path d="M31.0119 22.9519L32.3473 24.3064L19.1972 37.6462H17.8619V36.2916L31.0119 22.9519ZM36.2371 14.0881C35.8743 14.0881 35.4969 14.2354 35.2211 14.5151L32.565 17.2096L38.0079 22.731L40.664 20.0365C41.2301 19.4623 41.2301 18.5347 40.664 17.9605L37.2677 14.5151C36.9774 14.2206 36.6145 14.0881 36.2371 14.0881ZM31.0119 18.785L14.959 35.0695V40.591H20.4019L36.4548 24.3064L31.0119 18.785Z" fill="white"/>
                  </svg>
                </label>
              </figure>

              <div class="empty-info">
                <p>You don't have any photo</p>
                <p>Please upload photo By CliCKING EDIT ICON AND THEN CLICK UPDATE IMAGE BUTTON</p>
              </div>

              <div class="updateinfo">
                <button class="btn-update">UPDATE IMAGE</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- MY-PROFILE SECTION END -->
