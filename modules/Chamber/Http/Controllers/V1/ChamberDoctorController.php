<?php

namespace Modules\Chamber\Http\Controllers\V1;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Modules\Chamber\Services\ChamberDoctorService;
use Modules\Doctor\Services\DoctorService;
use Illuminate\Contracts\Foundation\Application;
use Modules\Speciality\Services\SpecialityService;
use RealRashid\SweetAlert\Facades\Alert;

class ChamberDoctorController extends Controller
{

    private SpecialityService $specialityService;
    private DoctorService $doctorService;
    private ChamberDoctorService $chamberDoctorService;

    public function __construct()
    {
        $this->specialityService = new SpecialityService();
        $this->doctorService = new DoctorService();
        $this->chamberDoctorService = new  ChamberDoctorService();
    }

    public function findDoctors(Request $request): View|Factory|\Illuminate\Foundation\Application
    {
        $specialities = $this->specialityService->getSpecialityList($request->all());
        $doctors = $this->doctorService->getDoctorListWithFilter($request->all())->appends($request->all());
        $existingChamberDoctorIds = $this->chamberDoctorService->getChamberDoctorIdsByAuthChamber();
        return view('chamber.find-doctor', compact('specialities', 'doctors', 'existingChamberDoctorIds'));
    }

    public function doctorScheduleDate(Request $request): RedirectResponse
    {
        try {
            $this->chamberDoctorService->storeChamberDoctorData($request->all());
            Alert::success('Success', 'Doctor Schedule date added successfully');
            return redirect()->back()
                ->with('success', 'Doctor Schedule date added successfully');
        } catch (\Throwable $throwable) {
            Alert::error('Error', 'Doctor invalid data');
            return redirect()->back()->with('error', 'Doctor invalid data')->withInput($request->all());
        }
    }

    public function chamberDoctorsList(Request $request): View|Factory|Application
    {
        $doctors = $this->chamberDoctorService->getDoctorListByAuthChamber();
        return view('chamber.my-doctors', compact('doctors'));
    }
}
