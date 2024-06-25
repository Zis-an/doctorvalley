<?php

namespace Modules\Blog\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Modules\Blog\Services\BlogService;

class BlogManagementController extends Controller
{

    private BlogService $service;

    public function __construct()
    {
        $this->service = new BlogService();
    }

    public function index()
    {

    }
}
