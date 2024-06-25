<?php

namespace Modules\Chamber\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Modules\Chamber\Services\ChamberService;

class ChamberManagementController extends Controller
{
    private ChamberService $service;

    public function __construct()
    {
        $this->service = new ChamberService();
    }
}
