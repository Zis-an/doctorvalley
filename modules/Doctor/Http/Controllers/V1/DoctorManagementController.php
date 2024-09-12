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

    public function personalInfoEdit($id): View | Factory | Application
    {
        try {
            $doctor = $this->service->getDoctorById($id);
            $provinces = $this->provinceService->getProvinceList();
            $cities = $this->cityService->getCityList();
            $areas = $this->areaService->getAreaList();
            $specialities = $this->specialityService->getSpecialityList();
            $specialityList = $specialities->pluck('speciality_name')->toArray();
            return view('components.create-doctor.personal-info', compact('doctor', 'provinces', 'cities', 'areas', 'specialityList'));
        } catch (\Throwable $exception) {
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function professionalInfoEdit($id): View | Factory | Application
    {
        try {
            $experience = $this->experienceService->getDoctorExperienceByDoctorId($id);
            // dd($experience);
            // return view('components.create-doctor.professional-info', compact('experience'));
            return view('components.create-doctor.professional-info', ['experience' => $experience, 'doctor_id' => $id]);
        } catch (\Throwable $exception) {
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function educationalInfoEdit($id): View | Factory | Application
    {
        try {
            $qualification = $this->qualificationService->getDoctorQualificationByDoctorId($id);
            $degrees = config('global.degrees');
            $institutes = $this->instituteService->getInstituteList();
            return view('components.create-doctor.educational-info', compact('qualification', 'degrees', 'institutes'));
        } catch (\Throwable $exception) {
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function profileImageEdit($id): View | Factory | Application
    {
        try {
            $doctor = $this->service->getDoctorById($id);
            return view('components.create-doctor.profile-image', compact('doctor'));
        } catch (\Throwable $exception) {
            dd($exception->getMessage());
            abort(500);
        }
    }

    public function updatePersonal(DoctorStoreRequest $request, int $id): RedirectResponse
    {
        try {
            $doctor = $this->service->updateDoctor($id, $request->validated());
            return redirect()->route('backoffice.doctor.index')
                ->with('success', 'Personal Information updated successfully');
        } catch (\Throwable $throwable) {
            dd($throwable);
            return redirect()->back()->with('error', 'Doctor invalid data')->withInput($request->all());
        }
    }

    public function updateProfessional(DoctorExperienceRequest $request, int $id): RedirectResponse
    {
        try {
            dd($request->current);
            $doctor = $this->experienceService->updateExperience($id, $request->validated());
            return redirect()->route('backoffice.doctor.index')
                ->with('success', 'Professional Information updated successfully');
        } catch (\Throwable $throwable) {
            dd($throwable);
            return redirect()->back()->with('error', 'Doctor invalid data')->withInput($request->all());
        }
    }

    public function updateEducational(DoctorQualificationRequest $request, int $id): RedirectResponse
    {
        try {
            $doctor = $this->qualificationService->updateQualification($id, $request->validated());
            return redirect()->route('backoffice.doctor.index')
                ->with('success', 'Educational Information updated successfully');
        } catch (\Throwable $throwable) {
            dd($throwable);
            return redirect()->back()->with('error', 'Doctor invalid data')->withInput($request->all());
        }
    }

    public function updateImage(DoctorImageRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateImage($request->validated());
            return redirect()->route('backoffice.doctor.index')
                ->with('success', 'Doctor image updated successfully');
        } catch (\Throwable $throwable) {
            // dd($throwable);
            return redirect()->back()->with('error', 'Doctor invalid data')->withInput($request->all());
        }
    }



    // public function destroy(int $id): RedirectResponse
    // {
    //     try {
    //         $this->service->deleteData($id);
    //         return redirect()->route('backoffice.doctor.index')->with('success', 'Doctor delete successfully');
    //     }catch (\Throwable $throwable){
    //         return redirect()->back()->with('error', 'Invalid Doctor information');
    //     }
    // }

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
}
