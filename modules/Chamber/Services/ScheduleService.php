<?php

namespace Modules\Chamber\Services;

use Carbon\Carbon;
use Modules\Chamber\Enums\ScheduleEnum;
use Modules\Chamber\Repositories\ScheduleDbRepository;

class ScheduleService
{
    private ScheduleDbRepository $scheduleDbRepository;
    public function __construct()
    {
        $this->scheduleDbRepository = new ScheduleDbRepository();
    }

    public function getSchedulesForDoctorByChamber(int $doctorId): mixed
    {
        $chamberId = auth()->guard('chamber')->user()->chamber_id;
        return $this->scheduleDbRepository->getSchedulesForDoctorByChamber($chamberId, $doctorId);
    }

    public function storeSchedule(array $data): mixed
    {
        try {
            $schedules = [];

            foreach ($data['schedule_day'] as $day) {
                if (!empty($data['start_time'][$day]) && !empty($data['end_time'][$day])) {
                    $schedules[] = [
                        ScheduleEnum::CHAMBER_ID => auth()->guard('chamber')->user()->chamber_id,
                        ScheduleEnum::DOCTOR_ID => $data['doctor_id'],
                        ScheduleEnum::SCHEDULE_DAY => $day,
                        ScheduleEnum::START_FROM => $data['start_time'][$day],
                        ScheduleEnum::END_FROM => $data['end_time'][$day],
                        ScheduleEnum::NOTE => $data['note'] ?? null,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }
            }
//            dd($schedules);

            if (empty($schedules)) {
                throw new \Exception('No schedules to store');
            }

            $storeSchedules = $this->scheduleDbRepository->storeSchedules($schedules);

            return $storeSchedules;

        } catch (\Exception $exception) {
            throw new \Exception("Error storing schedules: " . $exception->getMessage());
        }
    }


    public function storeOrUpdateSchedule(array $data): mixed
    {
        $chamberId = auth()->guard('chamber')->user()->chamber_id;
        $doctorId = $data['doctor_id'];

        // Step 1: Fetch existing schedule days from the database
        $existingScheduleDays = $this->scheduleDbRepository->getDoctorSchedulesByChamber($doctorId, $chamberId);

        $schedulesToKeep = [];
        $schedulesToCreateOrUpdate = [];

        // Step 2: Loop through the provided schedule days
        foreach ($data['schedule_day'] as $day) {
            if (!empty($data['start_time'][$day]) && !empty($data['end_time'][$day])) {
                $scheduleData = [
                    ScheduleEnum::CHAMBER_ID => $chamberId,
                    ScheduleEnum::DOCTOR_ID => $doctorId,
                    ScheduleEnum::SCHEDULE_DAY => $day,
                    ScheduleEnum::START_FROM => $data['start_time'][$day],
                    ScheduleEnum::END_FROM => $data['end_time'][$day],
                    ScheduleEnum::NOTE => $data['note'] ?? null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
                $schedulesToCreateOrUpdate[] = $scheduleData;
                $schedulesToKeep[] = $day;
            }
        }

        // Step 3: Delete schedules that were unchecked
        $daysToDelete = array_diff($existingScheduleDays, $schedulesToKeep);
        if (!empty($daysToDelete)) {
            $this->scheduleDbRepository->deleteDoctorSchedulesByChamber($doctorId, $chamberId, $daysToDelete);
        }

        // Step 4: Insert or update the schedules
        if (!empty($schedulesToCreateOrUpdate)) {
            foreach ($schedulesToCreateOrUpdate as $schedule) {
                $this->scheduleDbRepository->updateOrCreateSchedule(
                    [
                        ScheduleEnum::CHAMBER_ID => $schedule[ScheduleEnum::CHAMBER_ID],
                        ScheduleEnum::DOCTOR_ID => $schedule[ScheduleEnum::DOCTOR_ID],
                        ScheduleEnum::SCHEDULE_DAY => $schedule[ScheduleEnum::SCHEDULE_DAY],
                    ],
                    $schedule
                );
            }
        }

        return $schedulesToCreateOrUpdate;
    }



    public function storeScheduleSpecialNote(array $data): mixed
    {
        $result = $this->scheduleDbRepository->storeScheduleSpecialNote($data);
        if(empty($result)){
            throw  new \Exception('Invalid data');
        }
        return $result;
    }

    public function getTodaysScheduleDoctor(): mixed
    {
        $result = $this->scheduleDbRepository->getTodaysScheduleDoctor();
        if(empty($result)){
            throw  new \Exception('Invalid data');
        }
        return $result;
    }

    public function getChamberWeeklySchedules(): mixed
    {
        $result = $this->scheduleDbRepository->getChamberWeeklySchedules();
        if(empty($result)){
            return [];
        }
        return $result;
    }

    public function getScheduleByDoctorId(int $id): mixed
    {
        $result = $this->scheduleDbRepository->getScheduleDataByDoctorId($id);
        if(empty($result)){
            throw  new \Exception('Invalid data');
        }
        return $result;
    }
}
