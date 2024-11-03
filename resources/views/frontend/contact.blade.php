@extends('layouts.frontend')
@section('content')
  <!-- MAIN-SECTION START -->
  <main class="main">
    <!-- CONTACT-SECTION -->
    <section class="contact">
      <div class="container">
        <div class="contact-content">
          <div class="contact-header">
            <h1 class="contact-title">Get in touch</h1>
          </div>

          <div class="contact-body">
            <form action="{{ route('feedback') }}" method="POST" class="contactform">
                @csrf
                <input type="hidden" name="type" value="frontend">
              <div class="row g-4">
                <div class="col-lg-6 col-12">
                  <div class="inputbox">
                    <label for="fullname" class="inputlabel">Enter Full Name</label>
                    <input id="fullname" name="name" type="text" placeholder="Enter Full Name" class="inputfield">
                  </div>
                </div>

                <div class="col-lg-6 col-12">
                  <div class="inputbox">
                    <label for="emailaddress" class="inputlabel">Enter Email Address</label>
                    <input id="emailaddress" name="email" type="email" placeholder="Enter Email Address" class="inputfield">
                  </div>
                </div>
              </div>

              <div class="row g-4">
                <div class="col-lg-6 col-12">
                  <div class="inputbox">
                    <label for="phonenumber" class="inputlabel">Enter Phone Number</label>
                    <input id="phonenumber" name="phone" type="tel" placeholder="Enter Phone Number" class="inputfield">
                  </div>
                </div>

                <div class="col-lg-6 col-12">
                  <div class="inputbox">
                    <label for="subject" class="inputlabel">Enter Subject</label>
                    <input id="subject" name="subject" type="text" placeholder="Enter Subject" class="inputfield">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <div class="inputbox">
                    <label for="message" class="inputlabel">Enter Your Message</label>
                    <textarea id="message" name="feedback" class="inputfield" rows="8" placeholder="Enter your message"></textarea>
                  </div>
                </div>
              </div>

              <div class="formsubmit">
                <button class="btn-send" type="submit">
                  <span class="btn-text">Send</span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- MAIN-SECTION END -->
@endsection
