@extends('layouts.backend')
@section('content')
    <!-- MAIN-SECTION START -->
    <main class="myprofile" id="main-section">
        <div class="personalinfo">
            <div class="myprofile-detail">
                <div class="d-flex justify-content-between w-100">
                    <div class="d-flex align-items-center gap-3">
                        <figure class="icon">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="30" r="30" fill="#F04130" fill-opacity="0.2" />
                                <g clip-path="url(#usericon-1)">
                                    <path
                                        d="M37.0625 19.5625C37.0625 23.1855 34.123 26.125 30.5 26.125C26.877 26.125 23.9375 23.1855 23.9375 19.5625C23.9375 15.9395 26.877 13 30.5 13C34.123 13 37.0625 15.9395 37.0625 19.5625ZM29.4062 29.9531V48L26.0977 46.3457C24.6689 45.6348 23.124 45.1836 21.5312 45.0264L14.9688 44.3701C13.8545 44.2539 13 43.3174 13 42.1895V28.3125C13 27.1025 13.9775 26.125 15.1875 26.125H17.2588C21.6064 26.125 25.8447 27.4648 29.4062 29.9531ZM31.5938 48V29.9531C35.1553 27.4648 39.3936 26.125 43.7412 26.125H45.8125C47.0225 26.125 48 27.1025 48 28.3125V42.1895C48 43.3105 47.1455 44.2539 46.0312 44.3633L39.4688 45.0195C37.8828 45.1768 36.3311 45.6279 34.9023 46.3389L31.5938 48Z"
                                        fill="#F04130" />
                                </g>
                                <defs>
                                    <clipPath id="usericon-1">
                                        <rect width="35" height="35" fill="white" transform="translate(13 13)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </figure>

                        <div class="detail w-auto">
                            <h2 class="profile-title">BLOG LIST</h2>
                        </div>
                    </div>

                    <div class="filteroptions">
                        <button type="button" class="btn-search" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.9028 11.4444H12.1347L11.8625 11.1819C12.8153 10.0736 13.3889 8.63472 13.3889 7.06944C13.3889 3.57917 10.5597 0.75 7.06944 0.75C3.57917 0.75 0.75 3.57917 0.75 7.06944C0.75 10.5597 3.57917 13.3889 7.06944 13.3889C8.63472 13.3889 10.0736 12.8153 11.1819 11.8625L11.4444 12.1347V12.9028L16.3056 17.7542L17.7542 16.3056L12.9028 11.4444V11.4444ZM7.06944 11.4444C4.64861 11.4444 2.69444 9.49028 2.69444 7.06944C2.69444 4.64861 4.64861 2.69444 7.06944 2.69444C9.49028 2.69444 11.4444 4.64861 11.4444 7.06944C11.4444 9.49028 9.49028 11.4444 7.06944 11.4444Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="blogsearch px-4">
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

            <div class="personalinfo-info">
                <div class="details align-items-start">
                    <div class="details-body w-100">
                        <div class="table-responsive">
                            <table class="table" aria-describedby="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Blog Title</th>
                                        <th scope="col">Blog Image</th>
                                        <th scope="col">Blog Description</th>
                                        <th scope="col">Published Date</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Blog title 1</td>
                                        <td>
                                            <figure class="blogimg">
                                                <img src="assets/images/blogs/blog-1.jpg" alt="blog-thumb">
                                            </figure>
                                        </td>
                                        <td>
                                            <div class="description">
                                                <p class="blogtext">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis totam
                                                    voluptatem voluptas, ab eum modi sint culpa libero saepe nostrum.
                                                </p>
                                            </div>
                                        </td>
                                        <td>28 June 2023</td>
                                        <td>Ratul Al Mamun</td>
                                        <td>
                                            <div class="actions">
                                                <a href="blogdescription.html" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="View Blog Details"
                                                    class="btn-view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                        <path
                                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    </svg>
                                                </a>

                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="tabletoggle-1">
                                                    <label class="form-check-label" for="tabletoggle-1"></label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Blog title 2</td>
                                        <td>
                                            <figure class="blogimg">
                                                <img src="assets/images/blogs/blog-2.jpg" alt="blog-thumb">
                                            </figure>
                                        </td>
                                        <td>
                                            <div class="description">
                                                <p class="blogtext">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis totam
                                                    voluptatem voluptas, ab eum modi sint culpa libero saepe nostrum.
                                                </p>
                                            </div>
                                        </td>
                                        <td>28 June 2023</td>
                                        <td>Ratul Al Mamun</td>
                                        <td>
                                            <div class="actions">
                                                <a href="blogdescription.html" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="View Blog Details"
                                                    class="btn-view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                        <path
                                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    </svg>
                                                </a>

                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="tabletoggle-1">
                                                    <label class="form-check-label" for="tabletoggle-1"></label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Blog title 3</td>
                                        <td>
                                            <figure class="blogimg">
                                                <img src="assets/images/blogs/blog-3.jpg" alt="blog-thumb">
                                            </figure>
                                        </td>
                                        <td>
                                            <div class="description">
                                                <p class="blogtext">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis totam
                                                    voluptatem voluptas, ab eum modi sint culpa libero saepe nostrum.
                                                </p>
                                            </div>
                                        </td>
                                        <td>28 June 2023</td>
                                        <td>Ratul Al Mamun</td>
                                        <td>
                                            <div class="actions">
                                                <a href="blogdescription.html" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="View Blog Details"
                                                    class="btn-view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                        <path
                                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    </svg>
                                                </a>

                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="tabletoggle-1">
                                                    <label class="form-check-label" for="tabletoggle-1"></label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Blog title 4</td>
                                        <td>
                                            <figure class="blogimg">
                                                <img src="assets/images/blogs/blog-4.jpg" alt="blog-thumb">
                                            </figure>
                                        </td>
                                        <td>
                                            <div class="description">
                                                <p class="blogtext">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis totam
                                                    voluptatem voluptas, ab eum modi sint culpa libero saepe nostrum.
                                                </p>
                                            </div>
                                        </td>
                                        <td>28 June 2023</td>
                                        <td>Ratul Al Mamun</td>
                                        <td>
                                            <div class="actions">
                                                <a href="blogdescription.html" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="View Blog Details"
                                                    class="btn-view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                        <path
                                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    </svg>
                                                </a>

                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="tabletoggle-1">
                                                    <label class="form-check-label" for="tabletoggle-1"></label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Blog title 5</td>
                                        <td>
                                            <figure class="blogimg">
                                                <img src="assets/images/blogs/blog-5.jpg" alt="blog-thumb">
                                            </figure>
                                        </td>
                                        <td>
                                            <div class="description">
                                                <p class="blogtext">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis totam
                                                    voluptatem voluptas, ab eum modi sint culpa libero saepe nostrum.
                                                </p>
                                            </div>
                                        </td>
                                        <td>28 June 2023</td>
                                        <td>Ratul Al Mamun</td>
                                        <td>
                                            <div class="actions">
                                                <a href="blogdescription.html" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="View Blog Details"
                                                    class="btn-view">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                        <path
                                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    </svg>
                                                </a>

                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="tabletoggle-1">
                                                    <label class="form-check-label" for="tabletoggle-1"></label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="mt-5 d-flex justify-content-center">
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
        </div>
    </main>
    <!-- MAIN-SECTION END -->
@endsection