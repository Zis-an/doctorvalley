<?php

namespace Modules\Admin\Http\Controllers\V1;

use App\Helpers\Util;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        return view('backoffice.dashboard');
    }

    public function profile()
    {
        return view('backoffice.dashboard');
    }

    public function notification()
    {
        return view('backoffice.notifications');
    }
}
