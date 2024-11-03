<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Doctor\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Doctor\Models\DoctorSpeciality;
use Modules\Doctor\Enums\DoctorSpecialityEnum;

class DoctorSpecialityDbRepository
{
    private DoctorSpeciality $model;
    public function __construct()
    {
        $this->model = new DoctorSpeciality();
    }

    public function getDoctorSpecialityData(): mixed
    {
        return $this->model
            ->with('speciality') // Eager load the speciality relationship
            ->whereNull('deleted_at')
            ->latest()
            ->get();
    }

    public function storeDoctorSpecialityData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getDoctorSpecialityDataById(int $id): object|null
    {
        return DB::table(DoctorSpecialityEnum::DB_TABLE)
            ->where(DoctorSpecialityEnum::ID, $id)
            ->first();
    }
    public function getDoctorSpecialitiesByDoctorId(int $id): object|null
    {
        return DB::table(DoctorSpecialityEnum::DB_TABLE)
            ->where(DoctorSpecialityEnum::DOCTOR_ID, $id)
            ->get();
    }

    public function update(array $data, int $id): mixed
    {
        return $this->model
            ->where(DoctorSpecialityEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(DoctorSpecialityEnum::ID, $id)
            ->delete();
    }

    public function storeOrUpdateDoctorSpeciality(array $data): mixed
    {
        return $this->model->updateOrCreate(
            ['doctor_id' => $data['doctor_id'], 'speciality_id' => $data['speciality_id']],
            ['doctor_id' => $data['doctor_id'], 'speciality_id' => $data['speciality_id']]
        );

    }
}
