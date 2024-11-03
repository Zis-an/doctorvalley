<?php

namespace Modules\Chamber\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Chamber\Enums\ScheduleEnum;
use Modules\Chamber\Models\Schedules;
use Modules\Chamber\Models\ScheduleSpecialNote;

class ScheduleDbRepository
{
    private Schedules $schedules;
    private ScheduleSpecialNote $scheduleSpecialNote;

    public function __construct()
    {
        $this->schedules = new Schedules();
        $this->scheduleSpecialNote = new ScheduleSpecialNote();
    }

    public function getSchedulesForDoctorByChamber(int $chamberId, int $doctorId): mixed
    {
        return $this->schedules
            ->with('chamber')
            ->where(ScheduleEnum::CHAMBER_ID, $chamberId)
            ->where(ScheduleEnum::DOCTOR_ID, $doctorId)
            ->get();
    }

    public function storeSchedules(array $data) : mixed
    {
        return $this->schedules->insert($data);
    }

    public function updateOrCreateSchedule(array $conditions, array $data)
    {
        return $this->schedules->updateOrCreate($conditions, $data);
    }

    // Get existing schedule days for the doctor in the chamber
    public function getDoctorSchedulesByChamber(int $doctorId, int $chamberId): array
    {
        return $this->schedules
            ->where(ScheduleEnum::CHAMBER_ID, $chamberId)
            ->where(ScheduleEnum::DOCTOR_ID, $doctorId)
            ->pluck(ScheduleEnum::SCHEDULE_DAY)
            ->toArray();
    }

// Delete schedules for specific days
    public function deleteDoctorSchedulesByChamber(int $doctorId, int $chamberId, array $days): int
    {
        return $this->schedules
            ->where(ScheduleEnum::CHAMBER_ID, $chamberId)
            ->where(ScheduleEnum::DOCTOR_ID, $doctorId)
            ->whereIn(ScheduleEnum::SCHEDULE_DAY, $days)
            ->delete();
    }



    public function storeScheduleSpecialNote(array $data) : mixed
    {
        return $this->scheduleSpecialNote->create($data);
    }

    public function getTodaysScheduleDoctor(): mixed
    {
        $today = strtolower(now()->format('l'));

        return $this->schedules
            ->whereNull('deleted_at')
            ->where(ScheduleEnum::CHAMBER_ID, auth()->guard('chamber')->user()->chamber_id)
            ->where(ScheduleEnum::SCHEDULE_DAY, $today)
            ->whereHas('doctor', function ($query) {
                $query->whereNull('deleted_at');
            })
            ->with([
                'doctor' => function ($query) {
                    $query->whereNull('deleted_at')
                        ->with(['experiences', 'qualification']);
                }
            ])
            ->latest()
            ->get();
    }

    public function getChamberWeeklySchedules(): mixed
    {
        $chamberId = auth()->guard('chamber')->user()->chamber_id;

        return $this->schedules
            ->with(['doctor.specialities'])
            ->where(ScheduleEnum::CHAMBER_ID, $chamberId)
            ->whereHas('doctor', function ($query) {
                $query->whereNull('deleted_at');
            })
            ->orderBy('start_from')
            ->get()
            ->groupBy(ScheduleEnum::SCHEDULE_DAY);
    }


//    public function getScheduleDataByDoctorId($id) : mixed
//    {
//        return DB::table(ScheduleEnum::DB_TABLE)
//            ->where(ScheduleEnum::DOCTOR_ID, $id)
//            ->get();
//    }

    public function getScheduleDataByDoctorId($id) : mixed
    {
        return Schedules::with('chamber')
        ->where(ScheduleEnum::DOCTOR_ID, $id)
            ->get();
    }
}
