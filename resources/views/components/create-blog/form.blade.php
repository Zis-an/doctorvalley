<form action="{{ !empty($blog) ? route('backoffice.blog.update', $blog->id) : route('backoffice.blog.store') }}" method="POST" class="postform" enctype="multipart/form-data">
    @csrf
    @if (!empty($blog))
        @method('PUT')
    @endif
    <div class="row g-4">
        <div class="col-12">
            <div class="row g-4">
                <div class="col-md-8">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex flex-column gap-2">
                                <label for="post-title">Post Title</label>
                                <input type="text" name="blog_title" value="{{ !empty($blog) ? $blog->blog_title : '' }}" id="post-title" class="form-control"
                                    placeholder="Enter your blog title">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-flex flex-column gap-2">
                                <label for="post-title">Blog Image</label>
                                <div class="postimage">
                                    <div class="postimage-filename">
                                        <figure class="icon">
                                            <svg width="43" height="42" viewBox="0 0 43 42"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.5"
                                                    d="M37.1911 0H5.06637C2.29418 0 0.046875 2.23858 0.046875 5V37C0.046875 39.7614 2.29418 42 5.06637 42H37.1911C39.9633 42 42.2106 39.7614 42.2106 37V5C42.2106 2.23858 39.9633 0 37.1911 0Z"
                                                    fill="#A1A1A1" />
                                                <path
                                                    d="M30.1639 28V14C30.1623 13.4701 29.9503 12.9623 29.5741 12.5875C29.1979 12.2128 28.6881 12.0016 28.1561 12H14.1015C13.5695 12.0016 13.0598 12.2128 12.6836 12.5875C12.3074 12.9623 12.0953 13.4701 12.0938 14V28C12.0953 28.5299 12.3074 29.0377 12.6836 29.4125C13.0598 29.7872 13.5695 29.9984 14.1015 30H28.1561C28.6881 29.9984 29.1979 29.7872 29.5741 29.4125C29.9503 29.0377 30.1623 28.5299 30.1639 28ZM18.0168 22.98L20.1249 25.51L23.237 21.52C23.2846 21.4585 23.3458 21.4088 23.4159 21.375C23.4861 21.3411 23.5632 21.324 23.6411 21.325C23.719 21.3259 23.7957 21.345 23.8649 21.3806C23.9342 21.4161 23.9942 21.4673 24.0401 21.53L27.5638 26.21C27.6198 26.2843 27.6538 26.3726 27.6622 26.4651C27.6706 26.5576 27.6529 26.6506 27.6112 26.7336C27.5695 26.8167 27.5055 26.8865 27.4262 26.9353C27.3469 26.9841 27.2555 27.01 27.1623 27.01H15.1255C15.0314 27.0096 14.9393 26.9828 14.8598 26.9327C14.7802 26.8827 14.7164 26.8114 14.6756 26.7269C14.6348 26.6425 14.6186 26.5483 14.6289 26.4551C14.6392 26.3619 14.6757 26.2735 14.734 26.2L17.2337 23C17.2784 22.9392 17.3365 22.8894 17.4035 22.8545C17.4705 22.8196 17.5447 22.8004 17.6203 22.7985C17.6959 22.7965 17.771 22.8119 17.8397 22.8434C17.9084 22.8748 17.969 22.9216 18.0168 22.98Z"
                                                    fill="black" />
                                            </svg>
                                        </figure>

                                        <div class="fileinfo">
                                            <p class="filename">Upload Blog Thumbnail</p>
                                            <button type="button" class="btn-remove">
                                                <svg width="24" height="25" viewBox="0 0 24 25"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.2"
                                                        d="M12 0.439941C14.3734 0.439941 16.6935 1.14373 18.6668 2.46231C20.6402 3.78088 22.1783 5.65503 23.0866 7.84774C23.9948 10.0405 24.2324 12.4533 23.7694 14.781C23.3064 17.1088 22.1635 19.247 20.4853 20.9252C18.8071 22.6035 16.6689 23.7463 14.3411 24.2094C12.0133 24.6724 9.60051 24.4347 7.4078 23.5265C5.21509 22.6182 3.34094 21.0802 2.02236 19.1068C0.703788 17.1334 0 14.8133 0 12.4399C0 9.25734 1.26428 6.2051 3.51472 3.95466C5.76515 1.70422 8.8174 0.439941 12 0.439941V0.439941Z"
                                                        fill="#F04130" />
                                                    <path
                                                        d="M17.0917 8.37292L16.0657 7.34692L11.9997 11.4139L7.93274 7.34692L6.90674 8.37292L10.9737 12.4399L6.90674 16.5059L7.93274 17.5319L11.9997 13.4649L16.0667 17.5319L17.0927 16.5059L13.0257 12.4389L17.0917 8.37292Z"
                                                        fill="#F04130" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <input type="file" name="thumb_path" id="readUrl" multiple hidden>
                                    <label class="btn-upload" for="readUrl" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Upload Blog Image">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.4 9.99997H8.99V15C8.99 15.2652 9.09536 15.5195 9.28289 15.7071C9.47043 15.8946 9.72478 16 9.99 16H13.99C14.2552 16 14.5096 15.8946 14.6971 15.7071C14.8846 15.5195 14.99 15.2652 14.99 15V9.99997H16.58C16.7786 10.0011 16.9731 9.94311 17.1386 9.8333C17.3041 9.7235 17.4332 9.5669 17.5094 9.38345C17.5855 9.20001 17.6054 8.99804 17.5663 8.80329C17.5272 8.60854 17.431 8.42984 17.29 8.28997L12.7 3.69997C12.5126 3.51372 12.2592 3.40918 11.995 3.40918C11.7308 3.40918 11.4774 3.51372 11.29 3.69997L6.7 8.28997C6.55958 8.42924 6.46361 8.60703 6.42422 8.80084C6.38484 8.99465 6.40381 9.19579 6.47873 9.37882C6.55366 9.56186 6.68117 9.71856 6.84516 9.82913C7.00914 9.93969 7.20223 9.99914 7.4 9.99997ZM5 19C5 19.2652 5.10536 19.5195 5.29289 19.7071C5.48043 19.8946 5.73478 20 6 20H18C18.2652 20 18.5196 19.8946 18.7071 19.7071C18.8946 19.5195 19 19.2652 19 19C19 18.7348 18.8946 18.4804 18.7071 18.2929C18.5196 18.1053 18.2652 18 18 18H6C5.73478 18 5.48043 18.1053 5.29289 18.2929C5.10536 18.4804 5 18.7348 5 19Z"
                                                fill="#292E3E" />
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex flex-column gap-2">
                        <label>Image Preview</label>
                        <figure class="upload-thumbnail">
                            <img id="uploadedImage"
                            {{-- value="{{ !empty($blog) ? (asset('test_image/' . $blog->thumb_path) : '') }}" --}}
                                src="{{ asset('dashboard/assets/images/uploaded/default-thumbnail.jpg') }}"
                                alt="Uploaded Image" accept="image/png, image/jpeg">
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="d-flex flex-column gap-2">
                <label for="editor">Blog Description</label>
                <textarea name="description" id="editor">{{ !empty($blog) ? (strip_tags($blog->description)) : '' }}</textarea>
            </div>
        </div>

        <div class="col-12">
            <div class="inputbox">
                <label for="status" class="inputlabel">
                    Status <span>*</span>
                </label>
                <select id="selectstatus" name="status" class="form-control" autocomplete="off">
                    <option value="" selected disabled>Select Status</option>
                    <option value="1" {{ !empty($blog) ? ($blog->status == 1 ? 'selected' : '') : '' }}>Active</option>
                    <option value="2" {{ !empty($blog) ? ($blog->status == 2 ? 'selected' : '') : '' }}>Inactive</option>
                </select>
                {{-- <p class="error-message d-none">This field is required</p> --}}
                @if ($errors->has('status'))
                    <p class="error-message">{{ $errors->first('status') }}</p>
                @endif
            </div>
        </div>

    </div>

    <div class="col-12">
        <div class="edubtns justify-content-end">
            <button type="submit" class="btn-profile-add">Save</button>
        </div>
    </div>
</form>
