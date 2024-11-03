<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\DB;
use Modules\Blog\Services\BlogService;
use Modules\Chamber\Services\ScheduleService;
use Modules\Doctor\Services\DoctorExperienceService;
use Modules\Doctor\Services\DoctorQualificationService;
use Modules\Doctor\Services\DoctorService;
use Modules\Doctor\Services\DoctorSpecialityService;
use Modules\Institute\Services\InstituteService;
use Modules\Location\Services\AreaService;
use Modules\Location\Services\CityService;
use Modules\Speciality\Services\SpecialityService;

class FrontendController extends Controller
{
    public function __construct(private SpecialityService $specialityService,
                                private CityService $cityService,
                                private AreaService $areaService,
                                private DoctorService $doctorService,
                                private DoctorSpecialityService $doctorSpecialityService,
                                private DoctorExperienceService $experienceService,
                                private DoctorQualificationService  $qualificationService,
                                private InstituteService $instituteService,
                                private ScheduleService  $scheduleService,
                                private BlogService $blogService)
    {

    }

    public function index(): Factory|Application|View
    {
        $doctors = $this->doctorService->getAllDoctorList();
        $query = $this->doctorService->getAllDoctorList();
        $doctors = $query->get();
        $doctorSpecialities = $this->doctorSpecialityService->getDoctorSpecialityList();
        $blogs = $this->blogService->getAllBlogS();
        $specialities = $this->specialityService->getAllSpecialityList();
        $countDoctorsBySpeciality = function () {
            // Get the count of doctor_ids grouped by speciality_id
            return DB::table('doctor_specialities') // Replace with your actual table name
            ->select('speciality_id', DB::raw('count(doctor_id) as doctor_count'))
                ->groupBy('speciality_id')
                ->get();
        };
        $doctorCounts = $countDoctorsBySpeciality();
        $timezone = date_default_timezone_get(); // Get current PHP timezone
        $today = strtolower(Carbon::now($timezone)->format('l'));
        $schedules = DB::table('schedules')->get();
        return view('frontend.index',
            compact('doctors', 'doctorSpecialities', 'blogs', 'specialities', 'doctorCounts', 'today', 'schedules'));
    }

    public function hospitals(): Factory|Application|View
    {
        return view('frontend.hospitals');
    }

    public function terms(): Factory|Application|View
    {
        return view('frontend.terms');
    }

    public function privacy(): Factory|Application|View
    {
        return view('frontend.privacyPolicy');
    }

}
