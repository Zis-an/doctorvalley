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

    public function update(array $data, int $id): mixed
    {
        return $this->model
            ->where(DoctorExperienceEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(DoctorExperienceEnum::ID, $id)
            ->delete();
    }
}