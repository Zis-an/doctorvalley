<?php
/*
 * Author: Arup Kumer Bose
 * Email: arupkumerbose@gmail.com
 * Company Name: Brainchild Software <brainchildsoft@gmail.com>
 */

namespace Modules\Doctor\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Degree\Services\DegreeService;
use Modules\Doctor\Http\Requests\DoctorExperienceRequest;
use Modules\Doctor\Http\Requests\DoctorImageRequest;
use Modules\Doctor\Http\Requests\DoctorQualificationRequest;
use Modules\Doctor\Http\Requests\DoctorStoreRequest;
use Modules\Doctor\Http\Requests\DoctorUpdateRequest;
use Modules\Doctor\Services\DoctorDetailService;
use Modules\Doctor\Services\DoctorExperienceService;
use Modules\Doctor\Services\DoctorQualificationService;
use Modules\Doctor\Services\DoctorService;
use Modules\Doctor\Services\DoctorSpecialityService;
use Modules\Institute\Services\InstituteService;
use Modules\Location\Services\AreaService;
use Modules\Location\Services\CityService;
use Modules\Location\Services\ProvinceService;
use Modules\Speciality\Services\SpecialityService;
use RealRashid\SweetAlert\Facades\Alert;

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
        private SpecialityService $specialityService,
        private DoctorSpecialityService $doctorSpecialityService,
        private DegreeService $degreeService) {

    }

    public function index(Request $request)
    {
        try {
            throw new Exception("dbajbsd");
            $doctors = $this->service->getDoctorList($request->all());
            $specialities = $this->specialityService->getSpecialityList($request->all());
            $provinces = $this->provinceService->getProvinceList($request->all());
            $cities = $this->cityService->getCityList($request->all());
            $areas = $this->areaService->getAreaList($request->all());
            $designations = [];
            foreach ($doctors as $doctor) {
                $designations[$doctor->id] = $this->experienceService->getDoctorExperienceByDoctorId($doctor->id);
            }
            return view('backoffice.doctor.doctorList', compact('doctors', 'designations','specialities', 'provinces', 'cities', 'areas'));
        } catch (\Throwable $exception) {
            return $this->redirectWithExceptionLog(
                exception: $exception,
                logContext: 'DOCTOR_LIST_ERROR'
            );
        }
    }

    public function personalInfo(Request $request)
    {
        try {
            $provinces = $this->provinceService->getProvinceList($request->all());
            $cities = $this->cityService->getCityList($request->all());
            $areas = $this->areaService->getAreaList($request->all());
            $specialities = $this->specialityService->getSpecialityList($request->all());
            return view('components.create-doctor.personal-info', compact('provinces', 'cities', 'areas', 'specialities'));
        } catch (\Throwable $exception) {
            return $this->redirectWithExceptionLog(
                exception: $exception,
                logContext: 'DOCTOR_PERSONAL_PROFILE_ERROR'
            );
        }
    }

    public function professionalInfo()
    {
        try {
            // Retrieve doctor_id from session
            $doctor_id = session('doctor_id');

            // If doctor_id is not in the session, redirect to personal info
            if (!$doctor_id) {
                return redirect()->route('doctor.profile.personal')
                    ->with('error', 'Please provide personal information first.');
            }

            // Load the professional information form
            return view('components.create-doctor.professional-info', compact('doctor_id'));
        } catch (\Throwable $exception) {
            return $this->redirectWithExceptionLog(
                exception: $exception,
                logContext: 'DOCTOR_PROFESSIONAL_PROFILE_ERROR'
            );
        }
    }

    public function educationalInfo(Request $request)
    {
        try {
            $degrees = $this->degreeService->getActiveDegreeList();
            $institutes = $this->instituteService->getInstituteList($request->all());
            // Retrieve doctor_id from session
            $doctor_id = session('doctor_id');

            // If doctor_id is not in the session, redirect to personal info
            if (!$doctor_id) {
                return redirect()->route('doctor.profile.professional')
                    ->with('error', 'Please provide professional information first.');
            }

            return view('components.create-doctor.educational-info', compact('degrees', 'institutes', 'doctor_id'));
        } catch (\Throwable $exception) {
            return $this->redirectWithExceptionLog(
                exception: $exception,
                logContext: 'DOCTOR_PROFESSIONAL_PROFILE_ERROR'
            );
        }
    }

    public function profileImage(): View | Factory | Application | RedirectResponse
    {
        try {
            // Retrieve doctor_id from session
            $doctor_id = session('doctor_id');

            // If doctor_id is not in the session, redirect to personal info
            if (!$doctor_id) {
                return redirect()->route('doctor.profile.educational')
                    ->with('error', 'Please provide educational information first.');
            }
            // Clear doctor_id from session after final step
            session()->forget('doctor_id');

            return view('components.create-doctor.profile-image', compact('doctor_id'));
        } catch (\Throwable $exception) {
            return $this->redirectWithExceptionLog(
                exception: $exception,
                logContext: 'DOCTOR_PROFILE_IMAGE_ERROR'
            );
        }
    }

    public function storePersonal(DoctorStoreRequest $request): RedirectResponse
    {
        try {
            $doctor = $this->service->storeDoctor($request->validated());
            // Store doctor_id persistently in the session
            session(['doctor_id' => $doctor->id]);
            // Redirect to the professional information page
            Alert::success('Success', 'Personal Information stored successfully');
            return redirect()->route('doctor.profile.educational')
                ->with('success', 'Personal Information stored successfully');
        } catch (\Throwable $throwable) {
            Alert::error('Error', 'Personal Info invalid data');
            return redirect()->back()->with('error', 'Personal Info')->withInput($request->all());
        }
    }

    public function storeProfessional(DoctorExperienceRequest $request): RedirectResponse
    {
        try {
            $experience = $this->experienceService->storeDoctorExperience($request->validated());
            // Store doctor_id in the session for subsequent forms
            session(['doctor_id' => $experience->doctor_id]);
            Alert::success('Success', 'Professional Information stored successfully');
            return redirect()->route('doctor.profile.image')
                ->with('success', 'Professional Information stored successfully');
        } catch (\Throwable $throwable) {
            Alert::error('Error', 'Professional Info invalid data');
            return redirect()->back()->with('error', 'Professional Info invalid data')->withInput($request->all());
        }
    }

    public function storeQualification(DoctorQualificationRequest $request): RedirectResponse
    {
        try {
            $qualification = $this->qualificationService->storeDoctorQualification($request->validated());
            // Store doctor_id in the session for subsequent forms
            session(['doctor_id' => $qualification->doctor_id]);
            Alert::success('Success', 'Educational Information stored successfully');
            return redirect()->route('doctor.profile.professional')
                ->with('success', 'Educational Information stored successfully');
        } catch (\Throwable $throwable) {
             Alert::error('Error', 'Educational Info invalid data');
            return redirect()->back()->with('error', 'Educational Info invalid data')->withInput($request->all());
        }
    }

    public function storeImage(DoctorImageRequest $request): RedirectResponse
    {
        try {
            $this->service->storeImage($request->validated());

            if(auth('admin')->check()) {
                return redirect()->route('doctor.index')
                    ->with('success', 'Doctor stored successfully');
            }
            if(auth('chamber')->check()) {
                return redirect()->route('chamber.my-doctors')
                    ->with('success', 'Chamber Doctor stored successfully');
            }

        } catch (\Throwable $throwable) {
            Alert::error('Error', 'Doctor invalid data');
            return $this->redirectWithExceptionLog(
                exception: $throwable,
                logContext: 'DOCTOR_PROFILE_IMAGE_ERROR'
            );
        }
    }

    public function personalInfoEdit(Request $request,$id): View | Factory | Application
    {
        try {
            $doctor = $this->service->getDoctorById($id);
            $provinces = $this->provinceService->getProvinceList($request->all());
            $cities = $this->cityService->getCityList($request->all());
            $areas = $this->areaService->getAreaList($request->all());
            $specialities = $this->specialityService->getSpecialityList($request->all());
            $doctorSpecialities = $this->doctorSpecialityService->getDoctorSpecialitiesByDoctorId($id);
            return view('components.create-doctor.personal-info', compact('doctor', 'provinces', 'cities', 'areas', 'specialities', 'doctorSpecialities'));
        } catch (\Throwable $exception) {
            abort(500);
        }
    }

    public function professionalInfoEdit($id): View | Factory | Application
    {
        try {
            $doctor = $this->service->getDoctorById($id);
            $experience = $this->experienceService->getDoctorExperienceByDoctorId($id);
            return view('components.create-doctor.professional-info', ['experience' => $experience, 'doctor_id' => $id, 'doctor' => $doctor]);
        } catch (\Throwable $exception) {
            abort(500);
        }
    }

    public function educationalInfoEdit(Request $request, $id): View | Factory | Application
    {
        try {
            $doctor = $this->service->getDoctorById($id);
            $educations = $this->qualificationService->getDoctorQualificationByDoctorId($id);
            $degrees = $this->degreeService->getActiveDegreeList();
            $institutes = $this->instituteService->getInstituteList($request->all());
            return view('components.create-doctor.educational-info',
                ['educations' => $educations, 'degrees' => $degrees, 'institutes' => $institutes, 'doctor_id' => $id, 'doctor' => $doctor]);
        } catch (\Throwable $exception) {
            abort(500);
        }
    }

    public function profileImageEdit($id): View | Factory | Application
    {
        try {
            $doctor = $this->service->getDoctorById($id);
            return view('components.create-doctor.profile-image', compact('doctor'));
        } catch (\Throwable $exception) {
            abort(500);
        }
    }

    public function updatePersonal(DoctorUpdateRequest $request, int $id): RedirectResponse
    {
        try {
            $doctor = $this->service->updateDoctor($id, $request->validated());
            Alert::success('Success', 'Personal Information updated successfully');
            return redirect()->route('doctor.index')
                ->with('success', 'Personal Information updated successfully');
        } catch (\Throwable $throwable) {
            Alert::error('Error', 'Personal Information invalid data');
            return redirect()->back()->with('error', 'Personal Information invalid data')->withInput($request->all());
        }
    }

    public function updateProfessional(DoctorExperienceRequest $request, int $id): RedirectResponse
    {
        try {
            $doctor = $this->experienceService->updateExperience($id, $request->validated());
            Alert::success('Success', 'Professional Information updated successfully');
            return redirect()->route('doctor.index')
                ->with('success', 'Professional Information updated successfully');
        } catch (\Throwable $throwable) {
            Alert::error('Error', 'Professional Information invalid data');
            return redirect()->back()->with('error', 'Professional Information invalid data')->withInput($request->all());
        }
    }

    public function updateEducational(DoctorQualificationRequest $request, int $id): RedirectResponse
    {
        try {
            $doctor = $this->qualificationService->updateQualification($id, $request->validated());
            Alert::success('Success', 'Educational Information updated successfully');
            return redirect()->route('doctor.index')
                ->with('success', 'Educational Information updated successfully');
        } catch (\Throwable $throwable) {
            Alert::error('Error', 'Educational Information invalid data');
            return redirect()->back()->with('error', 'Educational Information invalid data')->withInput($request->all());
        }
    }

    public function updateImage(DoctorImageRequest $request, int $id): RedirectResponse
    {
        try {
            $this->service->updateImage($request->validated());
            Alert::success('Success', 'Doctor image updated successfully');
            return redirect()->route('doctor.index')
                ->with('success', 'Doctor image updated successfully');
        } catch (\Throwable $throwable) {
            Alert::error('Error', 'Doctor invalid data');
            return $this->redirectWithExceptionLog(
                exception: $throwable,
                logContext: 'DOCTOR_PROFILE_IMAGE_ERROR'
            );
        }
    }


    public function destroy(int $id): RedirectResponse
     {
         try {
             $this->service->deleteData($id);
             Alert::success('Success', 'Doctor delete successfully');
             return redirect()->route('doctor.index')->with('success', 'Doctor delete successfully');
         }catch (\Throwable $throwable){
             Alert::error('Error', 'Invalid Doctor information');
             return redirect()->back()->with('error', 'Invalid Doctor information');
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
            abort(500);
        }
    }
}
