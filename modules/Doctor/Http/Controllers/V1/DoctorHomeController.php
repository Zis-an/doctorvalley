<?php

namespace Modules\Doctor\Http\Controllers\V1;

use App\Http\Controllers\Controller;

class DoctorHomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:doctor');
    }

    public function index()
    {
        return view('doctor.dashboard');
    }

    public function profile()
    {
        return view('doctor.profile');
    }

    public function notification()
    {
        return view('doctor.notifications');
    }
}
