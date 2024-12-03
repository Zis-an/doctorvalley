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
        try {
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
        } catch (\Throwable $exception) {
            // Log exception and return a redirect response with error handling
            return $this->redirectWithExceptionLog(
                exception: $exception,
                logContext: 'DOCTOR_DASHBOARD_ERROR'
            );
        }

    }

    public function profile()
    {
        try{
            $doctor = auth('doctor')->user();
            $id = $doctor->id;
            $experiences = $this->experienceService->getDoctorExperienceByDoctorId($id);
            $qualifications = $this->qualificationService->getDoctorQualificationByDoctorId($id);
            return view('doctor.profile', compact('doctor', 'experiences', 'qualifications'));
        } catch (\Throwable $exception) {
            // Log exception and return a redirect response with error handling
            return $this->redirectWithExceptionLog(
                exception: $exception,
                logContext: 'DOCTOR_PROFILE_VIEW_ERROR'
            );
        }

    }

    public function notification()
    {
        try {
            return view('doctor.notifications');
        } catch (\Throwable $exception) {
            // Log the exception and return an appropriate response
            return $this->redirectWithExceptionLog(
                exception: $exception,
                logContext: 'DOCTOR_NOTIFICATION_VIEW_ERROR'
            );
        }
    }

    public function schedule($id)
    {
        try {
            $schedule = $this->scheduleService->getScheduleByDoctorId($id);
            return view ('doctor.schedule', compact('schedule'));
        } catch (\Throwable $th) {
            return $this->redirectWithExceptionLog(
                exception: $th,
                logContext: 'DOCTOR_SCHEDULE_FETCH_ERROR'
            );
        }
    }
}
