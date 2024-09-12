<?php

namespace Modules\Doctor\Http\Controllers\V1;

use App\Http\Controllers\Controller;
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
                                private DoctorQualificationService $qualificationService)
    {
        $this->middleware('auth:doctor');
    }

    public function index()
    {
        $doctor = auth('doctor')->user();
        return view('doctor.dashboard', compact('doctor'));
    }

    public function profile()
    {
        $doctor = auth('doctor')->user();
        $id = $doctor->id;
        $experiences = $this->experienceService->getDoctorExperienceByDoctorId($id);
        $qualifications = $this->qualificationService->getDoctorQualificationByDoctorId($id);
        return view('doctor.profile', compact('doctor', 'experiences', 'qualifications'));
    }

    public function notification()
    {
        $doctor = auth('doctor')->user();
        return view('doctor.notifications', compact('doctor'));
    }

    public function blog()
    {
        $doctor = auth('doctor')->user();
        return view('doctor.blogs.index', compact('doctor'));
    }

    public function schedule()
    {
        $doctor = auth('doctor')->user();
        return view('doctor.schedule', compact('doctor'));
    }

    public function feedback()
    {
        $doctor = auth('doctor')->user();
        return view('doctor.feedback', compact('doctor'));
    }
}
