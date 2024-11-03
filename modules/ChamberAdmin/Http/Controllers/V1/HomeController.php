<?php

namespace Modules\ChamberAdmin\Http\Controllers\V1;

use App\Helpers\Util;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\Chamber\Enums\ScheduleEnum;
use Modules\Chamber\Http\Requests\ScheduleStoreRequest;
use Modules\Chamber\Services\ScheduleService;
use Modules\Chamber\Services\ChamberDoctorService;
use Modules\Doctor\Services\DoctorService;
use Modules\Speciality\Services\SpecialityService;

class HomeController extends Controller
{

    private SpecialityService $specialityService;
    private DoctorService $doctorService;
    private ChamberDoctorService $chamberDoctorService;
    private ScheduleService $scheduleService;
    public function __construct()
    {
        $this->middleware('auth:chamber');
        $this->specialityService = new SpecialityService();
        $this->doctorService = new DoctorService();
        $this->chamberDoctorService = new ChamberDoctorService();
        $this->scheduleService = new ScheduleService();
    }

    public function index(): View|Factory|Application
    {
        $todayDoctors = $this->scheduleService->getTodaysScheduleDoctor();
        $chamberDoctorsCountBySpeciality = $this->chamberDoctorService->chamberDoctorsCountBySpeciality();
        return view('chamber.dashboard', compact('todayDoctors', 'chamberDoctorsCountBySpeciality'));
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
