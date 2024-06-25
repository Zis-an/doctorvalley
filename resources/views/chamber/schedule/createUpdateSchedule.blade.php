@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="mainsection" id="main-section">
        <section class="chambersection">
            <div class="container">
                <div class="chambersection-details">
                    <div class="chambersection-header">
                        <h1 class="title">DOCTOR SCHEDULE</h1>
                    </div>

                    <div class="chambersection-body">
                        <div class="createschedule">
                            <div class="row g-4">
                                <div class="col-lg-9 col-md-8 col-12">
                                    <div class="detail">
                                        <h4 class="name">
                                            Schedule of <span>Doctor Stephen Strange</span>
                                        </h4>
                                        <p class="text">
                                            Create/Update the schedule of the doctor.
                                            You can set a special note by clicking special note button
                                            if doctor not available or nay specific reason.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <figure class="thumbnail">
                                        <img src="../assets/images/avatar/profile.svg" alt="doctor-dp">
                                    </figure>
                                </div>

                                <div class="col-lg-9 col-md-8 col-12">
                                    <table class="table table-responsive" aria-describedby="table">
                                        <thead>
                                            <tr class="tablerow">
                                                <th>
                                                    <div class="checkfield">
                                                        <input type="checkbox" onchange="checkedAll(this)"
                                                            class="checkinput" id="everyday" autocomplete="off" hidden>
                                                        <label for="everyday" class="checklabel fw-bold">
                                                            Everyday
                                                        </label>
                                                    </div>
                                                </th>
                                                <th class="text-center">From</th>
                                                <th class="text-center">To</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tablerow">
                                                <td>
                                                    <div class="checkfield">
                                                        <input type="checkbox" class="checkinput" id="sunday"
                                                            autocomplete="off" hidden>
                                                        <label for="sunday" class="checklabel fw-bold">
                                                            Sunday
                                                        </label>
                                                    </div>
                                                </td>

                                                <td class="text-center">
                                                    <input type="text" class="form-control schedulefield" disabled>
                                                </td>

                                                <td class="text-center d-flex gap-2">
                                                    <div class="singleschedulebox">
                                                        <input type="text" class="form-control schedulefield" disabled>
                                                    </div>
                                                    <span class="btn-info" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Special Note for this doctor.">
                                                        <svg width="40" height="40" viewBox="0 0 40 40"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.1"
                                                                d="M20 40C31.0457 40 40 31.0457 40 20C40 8.95431 31.0457 0 20 0C8.95431 0 0 8.95431 0 20C0 31.0457 8.95431 40 20 40Z"
                                                                fill="#F04130" />
                                                            <g>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M26.9992 12.741V16C27.3932 16 27.7833 16.0776 28.1472 16.2284C28.5112 16.3792 28.8419 16.6001 29.1205 16.8787C29.3991 17.1573 29.6201 17.488 29.7708 17.852C29.9216 18.216 29.9992 18.6061 29.9992 19C29.9992 19.394 29.9216 19.7841 29.7708 20.1481C29.6201 20.5121 29.3991 20.8428 29.1205 21.1214C28.8419 21.3999 28.5112 21.6209 28.1472 21.7717C27.7833 21.9224 27.3932 22 26.9992 22V25C26.9992 26.648 25.1182 27.589 23.7992 26.6L21.7392 25.054C20.6381 24.2284 19.356 23.6772 17.9992 23.446V26.29C17.9993 26.9438 17.7631 27.5755 17.3341 28.0688C16.9051 28.5621 16.3122 28.8837 15.6648 28.9743C15.0174 29.0649 14.359 28.9185 13.8111 28.5619C13.2631 28.2053 12.8626 27.6627 12.6832 27.034L11.1132 21.538C10.5482 20.8708 10.1805 20.0593 10.0515 19.1945C9.92244 18.3298 10.0371 17.4463 10.3827 16.6432C10.7282 15.8401 11.2909 15.1493 12.0075 14.6484C12.7242 14.1476 13.5663 13.8566 14.4392 13.808L17.4572 13.64C18.9338 13.5579 20.3698 13.1264 21.6472 12.381L23.9912 11.013C25.3252 10.236 26.9992 11.197 26.9992 12.741ZM13.6332 23.078L14.6062 26.485C14.653 26.65 14.7579 26.7924 14.9016 26.886C15.0452 26.9796 15.2178 27.018 15.3876 26.9943C15.5574 26.9705 15.7129 26.8861 15.8253 26.7567C15.9377 26.6272 15.9995 26.4615 15.9992 26.29V23.28L14.4392 23.193C14.1677 23.178 13.8981 23.1395 13.6332 23.078ZM24.9992 12.741L22.6542 14.11C21.2296 14.9405 19.641 15.4503 17.9992 15.604V21.423C19.7862 21.669 21.4872 22.366 22.9392 23.454L24.9992 25V12.741ZM15.9992 15.724L14.5492 15.804C13.8746 15.8413 13.2386 16.1301 12.7665 16.6134C12.2945 17.0967 12.0208 17.7394 11.9994 18.4146C11.9781 19.0899 12.2106 19.7486 12.6512 20.2607C13.0918 20.7729 13.7083 21.1013 14.3792 21.181L14.5492 21.196L15.9992 21.276V15.724ZM26.9992 18V20C27.2541 19.9998 27.4992 19.9022 27.6846 19.7272C27.8699 19.5522 27.9814 19.3131 27.9964 19.0586C28.0113 18.8042 27.9285 18.5537 27.7649 18.3582C27.6013 18.1628 27.3693 18.0371 27.1162 18.007L26.9992 18Z"
                                                                    fill="#F04130" />
                                                            </g>
                                                            <defs>
                                                                <clipPath>
                                                                    <rect width="24" height="24" fill="white"
                                                                        transform="translate(8 8)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr class="tablerow">
                                                <td>
                                                    <div class="checkfield">
                                                        <input type="checkbox" class="checkinput" id="monday"
                                                            autocomplete="off" hidden>
                                                        <label for="monday" class="checklabel fw-bold">
                                                            Monday
                                                        </label>
                                                    </div>
                                                </td>

                                                <td class="text-center">
                                                    <input type="text" class="form-control schedulefield" disabled>
                                                </td>

                                                <td class="text-center">
                                                    <input type="text" class="form-control schedulefield" disabled>
                                                </td>
                                            </tr>

                                            <tr class="tablerow">
                                                <td>
                                                    <div class="checkfield">
                                                        <input type="checkbox" class="checkinput" id="tuesday"
                                                            autocomplete="off" hidden>
                                                        <label for="tuesday" class="checklabel fw-bold">
                                                            Tuesday
                                                        </label>
                                                    </div>
                                                </td>

                                                <td class="text-center">
                                                    <input type="text" class="form-control schedulefield" disabled>
                                                </td>

                                                <td class="text-center">
                                                    <input type="text" class="form-control schedulefield" disabled>
                                                </td>
                                            </tr>

                                            <tr class="tablerow">
                                                <td>
                                                    <div class="checkfield">
                                                        <input type="checkbox" class="checkinput" id="wednesday"
                                                            autocomplete="off" hidden>
                                                        <label for="wednesday" class="checklabel fw-bold">
                                                            Wednesday
                                                        </label>
                                                    </div>
                                                </td>

                                                <td class="text-center">
                                                    <input type="text" class="form-control schedulefield" disabled>
                                                </td>

                                                <td class="text-center">
                                                    <input type="text" class="form-control schedulefield" disabled>
                                                </td>
                                            </tr>

                                            <tr class="tablerow">
                                                <td>
                                                    <div class="checkfield">
                                                        <input type="checkbox" class="checkinput" id="thursday"
                                                            autocomplete="off" hidden>
                                                        <label for="thursday" class="checklabel fw-bold">
                                                            Thursday
                                                        </label>
                                                    </div>
                                                </td>

                                                <td class="text-center">
                                                    <input type="text" class="form-control schedulefield" disabled>
                                                </td>

                                                <td class="text-center">
                                                    <input type="text" class="form-control schedulefield" disabled>
                                                </td>
                                            </tr>

                                            <tr class="tablerow">
                                                <td>
                                                    <div class="checkfield">
                                                        <input type="checkbox" class="checkinput" id="friday"
                                                            autocomplete="off" hidden>
                                                        <label for="friday" class="checklabel fw-bold">
                                                            Friday
                                                        </label>
                                                    </div>
                                                </td>

                                                <td class="text-center">
                                                    <input type="text" class="form-control schedulefield" disabled>
                                                </td>

                                                <td class="text-center">
                                                    <input type="text" class="form-control schedulefield" disabled>
                                                </td>
                                            </tr>

                                            <tr class="tablerow">
                                                <td>
                                                    <div class="checkfield">
                                                        <input type="checkbox" class="checkinput" id="saturday"
                                                            autocomplete="off" hidden>
                                                        <label for="saturday" class="checklabel fw-bold">
                                                            Saturday
                                                        </label>
                                                    </div>
                                                </td>

                                                <td class="text-center">
                                                    <input type="text" class="form-control schedulefield" disabled>
                                                </td>

                                                <td class="text-center">
                                                    <input type="text" class="form-control schedulefield" disabled>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="schedulesbutton">
                                        <button class="btn-special" data-bs-toggle="modal"
                                            data-bs-target="#specialNoteModal">SPECIAL NOTE</button>
                                        <button class="btn-save">SAVE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- MAIN-SECTION END -->


    <!-- SPECIAL-NOTE MODAL -->
  <div class="modal fade" id="specialNoteModal" tabindex="-1" aria-labelledby="specialNoteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Special Note</h5>
        </div>
        <div class="modal-body">
          <form class="noteform">
            <div class="inputbox">
              <label for="date" class="inputlabel">
                Select Date <span>*</span>
              </label>
              <input type="date" id="date" class="form-control" placeholder="28/11/2023">
            </div>

            <div class="inputbox">
              <label for="specialnote" class="inputlabel">
                Special Note
              </label>

              <textarea id="specialnote" class="form-control" rows="5"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer justify-content-end gap-3">
          <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-remove">Save</button>
        </div>
      </div>
    </div>
  </div>




@endsection
