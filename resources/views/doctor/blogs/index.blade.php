@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="mainsection" id="main-section">
        <div class="blog">
            <div class="blog-header">
                <div class="title-box">
                    <h5 class="blog-title">ALL BLOGS</h5>
                    <span class="blog-badge">9</span>
                </div>

                <div class="rightinfo">
                    <button type="button" class="btn-search" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.9028 11.4444H12.1347L11.8625 11.1819C12.8153 10.0736 13.3889 8.63472 13.3889 7.06944C13.3889 3.57917 10.5597 0.75 7.06944 0.75C3.57917 0.75 0.75 3.57917 0.75 7.06944C0.75 10.5597 3.57917 13.3889 7.06944 13.3889C8.63472 13.3889 10.0736 12.8153 11.1819 11.8625L11.4444 12.1347V12.9028L16.3056 17.7542L17.7542 16.3056L12.9028 11.4444V11.4444ZM7.06944 11.4444C4.64861 11.4444 2.69444 9.49028 2.69444 7.06944C2.69444 4.64861 4.64861 2.69444 7.06944 2.69444C9.49028 2.69444 11.4444 4.64861 11.4444 7.06944C11.4444 9.49028 9.49028 11.4444 7.06944 11.4444Z"
                                fill="white" />
                        </svg>
                    </button>

                    <div class="choicesoption">
                        <select id="normal-select-1" placeholder-text="Filter by" autocomplete="off">
                            <option value="1" class="select-dropdown__list-item">PUBLISHED</option>
                            <option value="2" class="select-dropdown__list-item">UNPUBLISHED</option>
                            <option value="3" class="select-dropdown__list-item">NEWEST</option>
                            <option value="4" class="select-dropdown__list-item">OLDEST</option>
                        </select>
                    </div>

                    <div class="addpost">
                        <a href="add-post.html" class="btn-add">
                            <span class="text">ADD POST</span>
                            <span class="icon">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#plusicon)">
                                        <path
                                            d="M10 20.5C15.5234 20.5 20 16.0234 20 10.5C20 4.97656 15.5234 0.5 10 0.5C4.47656 0.5 0 4.97656 0 10.5C0 16.0234 4.47656 20.5 10 20.5ZM9.0625 13.9375V11.4375H6.5625C6.04297 11.4375 5.625 11.0195 5.625 10.5C5.625 9.98047 6.04297 9.5625 6.5625 9.5625H9.0625V7.0625C9.0625 6.54297 9.48047 6.125 10 6.125C10.5195 6.125 10.9375 6.54297 10.9375 7.0625V9.5625H13.4375C13.957 9.5625 14.375 9.98047 14.375 10.5C14.375 11.0195 13.957 11.4375 13.4375 11.4375H10.9375V13.9375C10.9375 14.457 10.5195 14.875 10 14.875C9.48047 14.875 9.0625 14.457 9.0625 13.9375Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="plusicon">
                                            <rect width="20" height="20" fill="white"
                                                transform="translate(0 0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="blogsearch">
                <div class="collapse" id="collapseExample">
                    <div class="searchform">
                        <button class="btn-search">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.9028 11.4444H12.1347L11.8625 11.1819C12.8153 10.0736 13.3889 8.63472 13.3889 7.06944C13.3889 3.57917 10.5597 0.75 7.06944 0.75C3.57917 0.75 0.75 3.57917 0.75 7.06944C0.75 10.5597 3.57917 13.3889 7.06944 13.3889C8.63472 13.3889 10.0736 12.8153 11.1819 11.8625L11.4444 12.1347V12.9028L16.3056 17.7542L17.7542 16.3056L12.9028 11.4444V11.4444ZM7.06944 11.4444C4.64861 11.4444 2.69444 9.49028 2.69444 7.06944C2.69444 4.64861 4.64861 2.69444 7.06944 2.69444C9.49028 2.69444 11.4444 4.64861 11.4444 7.06944C11.4444 9.49028 9.49028 11.4444 7.06944 11.4444Z"
                                    fill="white"></path>
                            </svg>
                        </button>

                        <div class="mysearches">
                            <input type="search" placeholder="What are you looking for?" class="searchfield">
                        </div>
                    </div>
                </div>
            </div>

            <!-- BLOG-CONTENTS -->
            <div class="blog-body">
                <div class="card-blog">
                    <figure class="blog-thumbnail">
                        <img src="../assets/images/blogpost/blogpost-1.png" alt="blog-thumbnail">
                    </figure>

                    <div class="blog-details">
                        <article class="blog-article">
                            <h3 class="blog-title">
                                How whole-person care can...
                            </h3>

                            <p class="blog-text">
                                The guy with a camera. Based in Dhaka, Bangladesh.he guy with a camera. Based in Dhaka,
                                Bangladesh.For anything you want to move on with your diseies...
                            </p>
                        </article>

                        <div class="divider"></div>

                        <div class="blog-info w-100">
                            <h2 class="blogviews">52,893,340 views</h2>

                            <div class="w-100 d-flex align-items-center justify-content-between flex-wrap gap-2">
                                <div class="shareblog">
                                    <span class="icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#share-icon-1)">
                                                <path
                                                    d="M13.5556 10.125H12.4253C11.3316 10.125 10.4444 11.123 10.4444 12.3535C10.4444 12.9633 10.6948 13.2914 10.9111 13.4609C11.0764 13.5895 11.2222 13.7891 11.2222 14.016C11.2222 14.284 11.0278 14.5027 10.7896 14.5027H10.7288C10.6705 14.5027 10.6122 14.4918 10.5562 14.4645C10.1236 14.2484 8.11111 13.1164 8.11111 10.5625C8.11111 8.38867 9.67882 6.625 11.6111 6.625H13.5556V4.94883C13.5556 4.42383 13.9323 4 14.399 4C14.608 4 14.8073 4.0875 14.9628 4.24336L18.3219 7.64492C18.5066 7.83086 18.6111 8.09609 18.6111 8.375C18.6111 8.65391 18.5066 8.91914 18.3219 9.10508L14.9434 12.5258C14.8 12.6707 14.6153 12.75 14.4233 12.75H14.3333C13.9031 12.75 13.5556 12.359 13.5556 11.875V10.125ZM6.94444 6.625C6.73056 6.625 6.55556 6.82188 6.55556 7.0625V15.8125C6.55556 16.0531 6.73056 16.25 6.94444 16.25H14.7222C14.9361 16.25 15.1111 16.0531 15.1111 15.8125V14.5C15.1111 14.016 15.4587 13.625 15.8889 13.625C16.3191 13.625 16.6667 14.016 16.6667 14.5V15.8125C16.6667 17.0211 15.7965 18 14.7222 18H6.94444C5.87014 18 5 17.0211 5 15.8125V7.0625C5 5.85391 5.87014 4.875 6.94444 4.875H8.11111C8.54132 4.875 8.88889 5.26602 8.88889 5.75C8.88889 6.23398 8.54132 6.625 8.11111 6.625H6.94444Z"
                                                    fill="#F04130" />
                                            </g>
                                            <circle cx="12" cy="12" r="12" fill="#F04130"
                                                fill-opacity="0.2" />
                                            <defs>
                                                <clipPath id="share-icon-1">
                                                    <rect width="14" height="14" fill="white"
                                                        transform="translate(5 4)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="sharetext">380 shares</span>
                                </div>

                                <div class="d-flex align-items-center gap-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="publish-toggle-1" checked>
                                        <label class="form-check-label" for="publish-toggle-1"></label>
                                    </div>

                                    <a href="#" class="edit-link">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 30.46V33.5C16 33.6326 16.0527 33.7598 16.1465 33.8536C16.2403 33.9473 16.3674 34 16.5 34H19.54C19.6056 34.0009 19.6707 33.988 19.731 33.9621C19.7912 33.9363 19.8454 33.8981 19.89 33.85L30.81 22.94L27.06 19.19L16.15 30.1C16.1018 30.1466 16.0636 30.2026 16.0378 30.2645C16.012 30.3264 15.9991 30.3929 16 30.46ZM33.71 20.04C33.8963 19.8526 34.0008 19.5992 34.0008 19.335C34.0008 19.0708 33.8963 18.8174 33.71 18.63L31.37 16.29C31.1827 16.1037 30.9292 15.9992 30.665 15.9992C30.4009 15.9992 30.1474 16.1037 29.96 16.29L28.13 18.12L31.88 21.87L33.71 20.04Z"
                                                fill="#292E3E" />
                                            <path opacity="0.1"
                                                d="M25 50C38.8071 50 50 38.8071 50 25C50 11.1929 38.8071 0 25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50Z"
                                                fill="#F04130" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="publish-badge published">
                                <span class="icon">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.99984 0.166672C2.7915 0.166672 0.166504 2.79167 0.166504 6.00001C0.166504 9.20834 2.7915 11.8333 5.99984 11.8333C9.20817 11.8333 11.8332 9.20834 11.8332 6.00001C11.8332 2.79167 9.20817 0.166672 5.99984 0.166672ZM5.99984 10.6667C3.42734 10.6667 1.33317 8.57251 1.33317 6.00001C1.33317 3.42751 3.42734 1.33334 5.99984 1.33334C8.57234 1.33334 10.6665 3.42751 10.6665 6.00001C10.6665 8.57251 8.57234 10.6667 5.99984 10.6667ZM3.08317 7.75001H8.9165V8.91667H3.08317V7.75001ZM5.00817 5.53334L3.89984 4.42501L3.08317 5.24167L5.00817 7.16667L8.9165 3.25834L8.09984 2.44167L5.00817 5.53334Z"
                                            fill="#4ECB71" />
                                    </svg>
                                </span>
                                <span class="sharetext">Published</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-blog">
                    <figure class="blog-thumbnail">
                        <img src="../assets/images/blogpost/blogpost-2.png" alt="blog-thumbnail">
                    </figure>

                    <div class="blog-details">
                        <article class="blog-article">
                            <h4 class="blog-title">
                                How whole-person care can...
                            </h4>

                            <p class="blog-text">
                                The guy with a camera. Based in Dhaka, Bangladesh.he guy with a camera. Based in Dhaka,
                                Bangladesh.For anything you want to move on with your diseies...
                            </p>
                        </article>

                        <div class="divider"></div>

                        <div class="blog-info w-100">
                            <h2 class="blogviews">52,893,340 views</h2>

                            <div class="w-100 d-flex align-items-center justify-content-between flex-wrap gap-2">
                                <div class="shareblog">
                                    <span class="icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#share-icon-2)">
                                                <path
                                                    d="M13.5556 10.125H12.4253C11.3316 10.125 10.4444 11.123 10.4444 12.3535C10.4444 12.9633 10.6948 13.2914 10.9111 13.4609C11.0764 13.5895 11.2222 13.7891 11.2222 14.016C11.2222 14.284 11.0278 14.5027 10.7896 14.5027H10.7288C10.6705 14.5027 10.6122 14.4918 10.5562 14.4645C10.1236 14.2484 8.11111 13.1164 8.11111 10.5625C8.11111 8.38867 9.67882 6.625 11.6111 6.625H13.5556V4.94883C13.5556 4.42383 13.9323 4 14.399 4C14.608 4 14.8073 4.0875 14.9628 4.24336L18.3219 7.64492C18.5066 7.83086 18.6111 8.09609 18.6111 8.375C18.6111 8.65391 18.5066 8.91914 18.3219 9.10508L14.9434 12.5258C14.8 12.6707 14.6153 12.75 14.4233 12.75H14.3333C13.9031 12.75 13.5556 12.359 13.5556 11.875V10.125ZM6.94444 6.625C6.73056 6.625 6.55556 6.82188 6.55556 7.0625V15.8125C6.55556 16.0531 6.73056 16.25 6.94444 16.25H14.7222C14.9361 16.25 15.1111 16.0531 15.1111 15.8125V14.5C15.1111 14.016 15.4587 13.625 15.8889 13.625C16.3191 13.625 16.6667 14.016 16.6667 14.5V15.8125C16.6667 17.0211 15.7965 18 14.7222 18H6.94444C5.87014 18 5 17.0211 5 15.8125V7.0625C5 5.85391 5.87014 4.875 6.94444 4.875H8.11111C8.54132 4.875 8.88889 5.26602 8.88889 5.75C8.88889 6.23398 8.54132 6.625 8.11111 6.625H6.94444Z"
                                                    fill="#F04130" />
                                            </g>
                                            <circle cx="12" cy="12" r="12" fill="#F04130"
                                                fill-opacity="0.2" />
                                            <defs>
                                                <clipPath id="share-icon-2">
                                                    <rect width="14" height="14" fill="white"
                                                        transform="translate(5 4)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="sharetext">380 shares</span>
                                </div>

                                <div class="d-flex align-items-center gap-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="publish-toggle-2">
                                        <label class="form-check-label" for="publish-toggle-2"></label>
                                    </div>

                                    <a href="#" class="edit-link">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16 30.46V33.5C16 33.6326 16.0527 33.7598 16.1465 33.8536C16.2403 33.9473 16.3674 34 16.5 34H19.54C19.6056 34.0009 19.6707 33.988 19.731 33.9621C19.7912 33.9363 19.8454 33.8981 19.89 33.85L30.81 22.94L27.06 19.19L16.15 30.1C16.1018 30.1466 16.0636 30.2026 16.0378 30.2645C16.012 30.3264 15.9991 30.3929 16 30.46ZM33.71 20.04C33.8963 19.8526 34.0008 19.5992 34.0008 19.335C34.0008 19.0708 33.8963 18.8174 33.71 18.63L31.37 16.29C31.1827 16.1037 30.9292 15.9992 30.665 15.9992C30.4009 15.9992 30.1474 16.1037 29.96 16.29L28.13 18.12L31.88 21.87L33.71 20.04Z"
                                                fill="#292E3E" />
                                            <path opacity="0.1"
                                                d="M25 50C38.8071 50 50 38.8071 50 25C50 11.1929 38.8071 0 25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50Z"
                                                fill="#F04130" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="publish-badge unpublished">
                                <span class="icon">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.99984 0.166672C2.7915 0.166672 0.166504 2.79167 0.166504 6.00001C0.166504 9.20834 2.7915 11.8333 5.99984 11.8333C9.20817 11.8333 11.8332 9.20834 11.8332 6.00001C11.8332 2.79167 9.20817 0.166672 5.99984 0.166672ZM5.99984 10.6667C3.42734 10.6667 1.33317 8.57251 1.33317 6.00001C1.33317 3.42751 3.42734 1.33334 5.99984 1.33334C8.57234 1.33334 10.6665 3.42751 10.6665 6.00001C10.6665 8.57251 8.57234 10.6667 5.99984 10.6667ZM3.08317 7.75001H8.9165V8.91667H3.08317V7.75001ZM5.00817 5.53334L3.89984 4.42501L3.08317 5.24167L5.00817 7.16667L8.9165 3.25834L8.09984 2.44167L5.00817 5.53334Z"
                                            fill="#4ECB71" />
                                    </svg>
                                </span>
                                <span class="sharetext">Unpublished</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BLOG-PAGINATION -->
            <div class="blog-footer">
                <nav aria-label="Page navigation example" aria-labelledby="nav">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="#" class="btn-previous" aria-label="Previous">
                                <span aria-hidden="true">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5" cy="17.5" r="17.5" fill="white" />
                                        <path
                                            d="M22 23.2375L16.4372 17.5L22 11.7625L20.2874 10L13 17.5L20.2874 25L22 23.2375Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <ul class="pagination-list">
                            <li class="page-item active" aria-current="page">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">...</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">9</a>
                            </li>
                        </ul>
                        <li class="page-item">
                            <a href="#" class="btn-next" aria-label="Next">
                                <span aria-hidden="true">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5" cy="17.5" r="17.5" fill="white" />
                                        <path
                                            d="M13 11.7625L18.5628 17.5L13 23.2375L14.7126 25L22 17.5L14.7126 10L13 11.7625Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
    <!-- MAIN-SECTION END -->
@endsection

@push('after-scripts')
    <script src="../../assets/js/selets/select.js"></script>
    <!-- PRELOADER -->
    <script src="../../assets/js/loader/loader.js"></script>
@endpush
