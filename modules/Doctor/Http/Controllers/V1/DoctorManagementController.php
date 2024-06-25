<?php

namespace Modules\Doctor\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Modules\Doctor\Services\DoctorService;

class DoctorManagementController extends Controller
{
    private DoctorService $service;

    public function __construct()
    {
        $this->service = new DoctorService();
    }
}
