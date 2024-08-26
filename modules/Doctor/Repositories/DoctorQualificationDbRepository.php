<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Doctor\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Doctor\Models\DoctorQualification;
use Modules\Doctor\Enums\DoctorQualificationEnum;

class DoctorQualificationDbRepository
{
    private DoctorQualification $model;
    public function __construct()
    {
        $this->model = new DoctorQualification();
    }

    public function getDoctorQualificationData(): mixed
    {
        return $this->model
        ->whereNull('deleted_at')
        ->latest()
        ->get();
    }

    public function storeDoctorQualificationData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getDoctorQualificationDataById(int $id): object|null
    {
        return DB::table(DoctorQualificationEnum::DB_TABLE)
            ->where(DoctorQualificationEnum::ID, $id)
            ->first();
    }

    public function getDoctorQualificationDataByDoctorId(int $id): object|null
    {
        return DB::table(DoctorQualificationEnum::DB_TABLE)
            ->where(DoctorQualificationEnum::DOCTOR_ID, $id)
            ->get();
    }

    public function updateDoctorQualificationData(array $data, int $id): mixed
    {
        return $this->model
            ->where(DoctorQualificationEnum::DOCTOR_ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(DoctorQualificationEnum::ID, $id)
            ->delete();
    }
}
