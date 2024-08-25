<?php

namespace Modules\ChamberAdmin\Http\Controllers\V1;

use App\Helpers\Util;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:chamber');
    }

    public function index()
    {
        return view('chamber.dashboard');
    }

    public function profile()
    {
        return view('chamber.profile');
    }

    public function notification()
    {
        return view('chamber.notifications');
    }
}
