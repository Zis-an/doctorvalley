<?php

namespace Modules\Chamber\Http\Controllers\V1;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Modules\Chamber\Enums\ScheduleEnum;
use Modules\Chamber\Http\Requests\ScheduleStoreRequest;
use Modules\Chamber\Services\ScheduleService;
use Modules\Chamber\Services\ChamberDoctorService;
use Modules\Doctor\Services\DoctorService;
use Illuminate\Contracts\Foundation\Application;
use RealRashid\SweetAlert\Facades\Alert;

class ChamberScheduleController extends Controller
{

    private ChamberDoctorService $chamberDoctorService;
    private ScheduleService $scheduleService;
    private DoctorService $doctorService;

    public function __construct()
    {
        $this->chamberDoctorService = new ChamberDoctorService();
        $this->scheduleService = new ScheduleService();
        $this->doctorService = new DoctorService();
    }

    public function deleteChamberDoctor($doctorId): RedirectResponse
    {
        try{
            $this->chamberDoctorService->deleteChamberDoctorById($doctorId);
            Alert::success('Success', 'Doctor deleted from this chamber');
            return redirect()->back()->with('success', 'Doctor deleted from this chamber');

        }catch(\Throwable $throwable){
            Alert::error('Error', 'Doctor was not deleted!');
            return redirect()->back()-with('error',$throwable->getMessage());
        }
    }

    public function chamberSchedule(int $doctorId): View|Factory|\Illuminate\Foundation\Application
    {
        $doctor = $this->doctorService->getDoctorById($doctorId);
        $schedules = $this->scheduleService->getSchedulesForDoctorByChamber($doctorId);
        $scheduleDays = ScheduleEnum::SCHEDULE_DAY_LIST;
        return view('chamber.schedule.createUpdateSchedule', compact('doctor','schedules', 'scheduleDays'));
    }

    public function chamberStoreUpdateSchedule(ScheduleStoreRequest $request): RedirectResponse
    {
        try{
            $this->scheduleService->storeOrUpdateSchedule($request->validated());
            Alert::success('Success', 'Schedule created successfully');
            return redirect()->back()->with('success', 'Schedule created successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Schedule invalid data');
            return redirect()->back()->with('error', 'Schedule invalid data')->withInput($request->all());
        }
    }

    public function StoreScheduleSpecialNote(Request $request): RedirectResponse
    {
        try {
            $this->scheduleService->storeScheduleSpecialNote($request->all());
            Alert::success('Success', 'Schedule special note created successfully');
            return redirect()->back()->with('success', 'Schedule special note created successfully');
        }catch (\Throwable $throwable){
            Alert::error('Error', 'Schedule invalid data');
            return redirect()->back()->with('error', 'Schedule invalid data')->withInput($request->all());
        }
    }


    public function chamberWeeklySchedule(): View|Factory|Application
    {
        $weeklySchedules = $this->scheduleService->getChamberWeeklySchedules();
//        dd($weeklySchedules);
        $scheduleDays = ScheduleEnum::SCHEDULE_DAY_LIST;
        return view('chamber.schedule.index', compact('weeklySchedules', 'scheduleDays'));
    }


}
