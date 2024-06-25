<?php

namespace Modules\Blog\Services;

use Modules\Blog\Models\Blog;
use Modules\Blog\Repositories\BlogDBRepository;

class BlogService
{

    private BlogDBRepository $repository;

    public function __construct()
    {
        $this->repository = new BlogDBRepository();
    }
}
