<?php
/*
 * Author: Arup Kumer Bose
 * Email: arupkumerbose@gmail.com
 * Company Name: Brainchild Software <brainchildsoft@gmail.com>
 */

namespace Modules\Doctor\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Modules\Doctor\Http\Requests\DoctorExperienceRequest;
use Modules\Doctor\Http\Requests\DoctorImageRequest;
use Modules\Doctor\Http\Requests\DoctorQualificationRequest;
use Modules\Doctor\Http\Requests\DoctorStoreRequest;
use Modules\Doctor\Services\DoctorDetailService;
use Modules\Doctor\Services\DoctorExperienceService;
use Modules\Doctor\Services\DoctorQualificationService;
use Modules\Doctor\Services\DoctorService;
use Modules\Institute\Services\InstituteService;
use Modules\Location\Services\AreaService;
use Modules\Location\Services\CityService;
use Modules\Location\Services\ProvinceService;
use Modules\Speciality\Services\SpecialityService;

class DoctorManagementController extends Controller
{

    public function __construct(private DoctorService $service,
        private ProvinceService $provinceService,
        private CityService $cityService,
        private AreaService $areaService,
        private DoctorDetailService $detailService,
        private DoctorExperienceService $experienceService,
        private DoctorQualificationService $qualificationService,
        private InstituteService $instituteService,
        private SpecialityService $specialityService) {

    }

    public function index(): View | Factory | Application
    {
        try {
            $doctors = $this->service->getDoctorList();
            $designations = [];
            foreach ($doctors as $doctor) {
                $designations[$doctor->id] = $this->experienceService->getDoctorExperienceByDoctorId($doctor->id);
            }
            return view('backoffice.doctor.doctorList', compact('doctors', 'designations'));
        } catch (\Throwable $exception) {
            dd($exception->getMessage());
            abort(500);
        }
    }

    // public function create(): View|Factory|Application
    // {
    //     try{
    //         $doctors = $this->service->getDoctorList();
    //         $provinces = $this->provinceService->getProvinceList();
    //         $cities = $this->cityService->getCityList();
    //         $areas = $this->areaService->getAreaList();
    //         // return view('backoffice.doctor.createUpdateDoctor', compact('doctors', 'provinces', 'cities', 'areas'));
    //         return view('components.create-doctor.personal-info', compact('doctors', 'provinces', 'cities', 'areas'));
    //     }catch (\Throwable $exception){
    //         dd($exception->getMessage());
    //         abort(500);
    //     }
    // }

    public function personalInfo(): View | Factory | Application
    {
        try {
            $provinces = $this->provinceService->getProvinceList();
            $cities = $this->cityService->getCityList();
            $areas = $this->areaService->getAreaList();
            $specialities = $this->specialityService->getSpecialityList();
            $specialityList = $specialities->pluck('speciality_name')->toArray();
            return view('components.create-doctor.personal-info', compact('provinces', 'cities', 'areas', 'specialityList'));
        } catch (\Throwable $exception) {
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function professionalInfo(): View | Factory | Application
    {
        try {
            return view('components.create-doctor.professional-info');
        } catch (\Throwable $exception) {
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function educationalInfo(): View | Factory | Application
    {
        try {
            $degrees = config('global.degrees');
            $institutes = $this->instituteService->getInstituteList();
            return view('components.create-doctor.educational-info', compact('degrees', 'institutes'));
        } catch (\Throwable $exception) {
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function profileImage(): View | Factory | Application
    {
        try {
            return view('components.create-doctor.profile-image');
        } catch (\Throwable $exception) {
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function storePersonal(DoctorStoreRequest $request): RedirectResponse
    {
        try {
            $doctor = $this->service->storeDoctor($request->validated());
            return redirect()->route('backoffice.doctor.profile.professional', ['doctor_id' => $doctor->id])
                ->with('success', 'Personal Information stored successfully');
        } catch (\Throwable $throwable) {
            dd($throwable);
            return redirect()->back()->with('error', 'Doctor invalid data')->withInput($request->all());
        }
    }

    public function storeProfessional(DoctorExperienceRequest $request): RedirectResponse
    {
        try {
            $experience = $this->experienceService->storeDoctorExperience($request->validated());
            return redirect()->route('backoffice.doctor.profile.educational', ['doctor_id' => $experience->doctor_id])
                ->with('success', 'Experience stored successfully');
        } catch (\Throwable $throwable) {
            return redirect()->back()->with('error', 'Doctor invalid data')->withInput($request->all());
        }
    }

    public function storeQualification(DoctorQualificationRequest $request): RedirectResponse
    {
        try {
            $qualification = $this->qualificationService->storeDoctorQualification($request->validated());
            return redirect()->route('backoffice.doctor.profile.image', ['doctor_id' => $qualification->doctor_id])
                ->with('success', 'Qualification stored successfully');
        } catch (\Throwable $throwable) {
            // dd($throwable);
            return redirect()->back()->with('error', 'Doctor invalid data')->withInput($request->all());
        }
    }

    public function storeImage(DoctorImageRequest $request): RedirectResponse
    {
        try {
            $this->service->storeImage($request->validated());
            return redirect()->route('backoffice.doctor.index')
                ->with('success', 'Doctor stored successfully');
        } catch (\Throwable $throwable) {
            // dd($throwable);
            return redirect()->back()->with('error', 'Doctor invalid data')->withInput($request->all());
        }
    }

    public function info($id): View | Factory | Application
    {
        try {
            $doctor = $this->service->getDoctorById($id);
            $experiences = $this->experienceService->getDoctorExperienceByDoctorId($id);
            $qualifications = $this->qualificationService->getDoctorQualificationByDoctorId($id);
            return view('backoffice.doctor.doctorinfo', compact('doctor', 'experiences', 'qualifications'));
        } catch (\Throwable $exception) {
            dd($exception->getMessage());
            abort(500);
        }
    }

    // public function edit(int $id): Factory|View|Application
    // {
    //     try {
    //         $doctors = $this->service->getDoctorList();
    //         $doctor = $this->service->getDoctorById($id);
    //         return view('backoffice.doctor.index',compact('doctors','doctor'));
    //     }catch (\Throwable $throwable){
    //         return abort(500);
    //     }
    // }

    // public function update(DoctorStoreRequest $request, int $id): RedirectResponse
    // {
    //     try {
    //         $this->service->updateData($id, $request->validated());
    //         return redirect()->route('backoffice.doctor.index')->with('success', 'Doctor updated successfully');
    //     }catch (\Throwable $throwable){
    //         return redirect()->back()->with('error', 'Doctor invalid data')->withInput($request->all());
    //     }
    // }

    // public function destroy(int $id): RedirectResponse
    // {
    //     try {
    //         $this->service->deleteData($id);
    //         return redirect()->route('backoffice.doctor.index')->with('success', 'Doctor delete successfully');
    //     }catch (\Throwable $throwable){
    //         return redirect()->back()->with('error', 'Invalid Doctor information');
    //     }
    // }
}
