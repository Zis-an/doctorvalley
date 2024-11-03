<?php

namespace Modules\Doctor\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Modules\Chamber\Models\Chamber;
use Modules\Chamber\Services\ScheduleService;
use Modules\Doctor\Services\DoctorExperienceService;
use Modules\Doctor\Services\DoctorQualificationService;
use Modules\Doctor\Services\DoctorService;
use Modules\Location\Services\AreaService;
use Modules\Location\Services\CityService;
use Modules\Location\Services\ProvinceService;

class DoctorHomeController extends Controller
{

    public function __construct(private DoctorService $service,
                                private ProvinceService $provinceService,
                                private CityService $cityService,
                                private AreaService $areaService,
                                private DoctorExperienceService $experienceService,
                                private DoctorQualificationService $qualificationService,
                                private ScheduleService $scheduleService)
    {
        $this->middleware('auth:doctor');
    }

    public function index()
    {
        // Retrieve the logged-in doctor with schedules
        $doctor = $this->service->getDoctorById(auth()->user()->id);

        // Get today's day name, e.g., "tuesday"
        $today = strtolower(Carbon::now()->format('l'));

        // Filter schedules for today
        $todaySchedules = $doctor->schedules->filter(function ($schedule) use ($today) {
            return strtolower($schedule->schedule_day) === $today;
        });

        // Load chamber information for each schedule
        foreach ($todaySchedules as $schedule) {
            if ($schedule->chamber_id) {
                $schedule->chamber = Chamber::find($schedule->chamber_id);
            }
        }

        return view('doctor.dashboard', compact('doctor', 'todaySchedules'));
    }

//    public function profile()
//    {
//        $doctor = auth('doctor')->user();
//        $id = $doctor->id;
//        $experiences = $this->experienceService->getDoctorExperienceByDoctorId($id);
//        $qualifications = $this->qualificationService->getDoctorQualificationByDoctorId($id);
//        return view('doctor.profile', compact('doctor', 'experiences', 'qualifications'));
//    }

    public function notification()
    {
        return view('doctor.notifications');
    }

    public function schedule($id)
    {
        try {
            $schedule = $this->scheduleService->getScheduleByDoctorId($id);
            return view ('doctor.schedule', compact('schedule'));
        } catch (\Throwable $th) {
            return redirect()->route('doctor.schedule')->with('error', 'Unable to fetch the schedule. Please try again later.');
        }
    }
}
