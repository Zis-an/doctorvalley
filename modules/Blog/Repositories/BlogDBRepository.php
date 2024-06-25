<?php

namespace Modules\Blog\Repositories;

use Modules\Blog\Models\Blog;

class BlogDBRepository
{

    private Blog $model;
    public function __construct()
    {
        $this->model = new Blog();
    }
}
