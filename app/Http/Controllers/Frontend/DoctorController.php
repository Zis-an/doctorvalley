<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\VisitorCount;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Modules\Chamber\Models\Chamber;
use Modules\Chamber\Services\ScheduleService;
use Modules\Doctor\Models\Doctor;
use Modules\Doctor\Services\DoctorExperienceService;
use Modules\Doctor\Services\DoctorQualificationService;
use Modules\Doctor\Services\DoctorService;
use Modules\Doctor\Services\DoctorSpecialityService;
use Modules\Institute\Services\InstituteService;
use Modules\Location\Services\AreaService;
use Modules\Location\Services\CityService;
use Modules\Speciality\Services\SpecialityService;
class DoctorController extends Controller
{
    public function __construct(private SpecialityService $specialityService,
                                private CityService $cityService,
                                private AreaService $areaService,
                                private DoctorService $doctorService,
                                private DoctorSpecialityService $doctorSpecialityService,
                                private DoctorExperienceService $experienceService,
                                private DoctorQualificationService  $qualificationService,
                                private InstituteService $instituteService,
                                private ScheduleService  $scheduleService,)
    {

    }

    public function doctors(Request $request): Factory|Application|View
    {
        $specialities = $this->specialityService->getAllSpecialityList();
        $cities = $this->cityService->getAllCityList();
        $areas = $this->areaService->getAllAreaList();
        $days = ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        $doctors = $this->doctorService->getAllDoctorList();

        // Get the query builder for doctors
        $query = $this->doctorService->getAllDoctorList();

        if ($request->has('specialities') && $request->specialities) {
            $query->whereHas('specialities', function ($q) use ($request) {
                $q->where('specialities.id', $request->specialities);
            });
        }

        if ($request->has('cities') && $request->cities) {
            $query->where('city_id', $request->cities);
        }

        if ($request->has('areas') && $request->areas) {
            $query->where('area_id', $request->areas);
        }

        if ($request->has('gender') && $request->gender) {
            $query->where('gender', $request->gender);
        }

        // Execute the query and get the doctors collection
        $doctors = $query->get();

        $doctorSpecialities = $this->doctorSpecialityService->getDoctorSpecialityList();
        return view('frontend.doctors',
            compact('specialities', 'cities', 'areas', 'days', 'doctors', 'doctorSpecialities'));
    }

    public function doctor($id, Request $request): Factory|Application|View
    {
        // Retrieve doctor information by ID
        $doctor = $this->doctorService->getDoctorById($id);

        // Retrieve schedules associated with the doctor
        $schedules = $this->scheduleService->getScheduleByDoctorId($id);

        // Load chamber information for each schedule
        foreach ($schedules as $schedule) {
            if ($schedule->chamber_id) {
                $schedule->chamber = Chamber::find($schedule->chamber_id);
            }
        }

        // Get the speciality IDs for the doctor
        $speciality_ids = $this->doctorSpecialityService->getDoctorSpecialitiesByDoctorId($id)->pluck('speciality_id');

        // Retrieve suggested doctors by speciality
        $suggestedDoctors = $this->doctorService->getDoctorsBySpecialityIds($speciality_ids->toArray(), $id);

        // Get the list of specialities for the doctor
        $doctorSpecialities = $this->doctorSpecialityService->getDoctorSpecialityList();

        // Track visit by IP address (direct insertion into VisitorCount model)
        $ipAddress = $request->ip(); // Use the Request instance
        $doctor->visits()->create([
            'ip_address' => $ipAddress,
        ]);

        return view('frontend.doctorDetails', compact('doctor', 'schedules', 'suggestedDoctors', 'doctorSpecialities'));
    }
}
