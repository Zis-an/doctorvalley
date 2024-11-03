<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Doctor\Repositories;

use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Modules\Doctor\Models\DoctorExperience;
use Modules\Doctor\Enums\DoctorExperienceEnum;

class DoctorExperienceDbRepository
{
    private DoctorExperience $model;
    public function __construct()
    {
        $this->model = new DoctorExperience();
    }

    public function getDoctorExperienceData(): mixed
    {
        return $this->model
        ->whereNull('deleted_at')
        ->latest()
        ->get();
    }

    public function storeDoctorExperienceData(array $data): mixed
    {
        try{
            return $this->model->create($data);
        } catch(\Throwable $e) {
            dd($e);
        }
    }

    public function getDoctorExperienceDataById(int $id): object|null
    {
        return DB::table(DoctorExperienceEnum::DB_TABLE)
            ->where(DoctorExperienceEnum::ID, $id)
            ->first();
    }

    public function getDoctorExperienceDataByDoctorId(int $id): object|null
    {
        return DB::table(DoctorExperienceEnum::DB_TABLE)
            ->where(DoctorExperienceEnum::DOCTOR_ID, $id)
            ->get();
    }


    public function updateDoctorExperienceData(array $data, int $experienceId): mixed
    {
        return $this->model
            ->where('id', $experienceId)  // Make sure to update by experience_id
            ->update($data);  // Perform the update with provided data
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(DoctorExperienceEnum::DOCTOR_ID, $id)
            ->delete();
    }

    public function deleteByDoctorId(int $doctorId): mixed
    {
        return $this->model
            ->where(DoctorExperienceEnum::DOCTOR_ID, $doctorId)
            ->delete();
    }


    public function getExperienceIdsByDoctorId(int $doctorId): array
    {
        return $this->model->where('doctor_id', $doctorId)->pluck('id')->toArray();
    }








}
