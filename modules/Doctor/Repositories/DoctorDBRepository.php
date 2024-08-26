<?php
/*
 * Author: Arup Kumer Bose
 * Email: arupkumerbose@gmail.com
 * Company Name: Brainchild Software <brainchildsoft@gmail.com>
 */

namespace Modules\Doctor\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Doctor\Enums\DoctorEnum;
use Modules\Doctor\Models\Doctor;

class DoctorDbRepository
{
    private Doctor $model;
    public function __construct()
    {
        $this->model = new Doctor();
    }

    public function getDoctorData(): mixed
    {
        return $this->model
            ->whereNull('deleted_at')
            ->latest()
            ->get();
    }

    public function storeDoctorData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getDoctorPhoto(int $id): ?string
    {
        return $this->model
            ->where(DoctorEnum::ID, $id)
            ->value(DoctorEnum::DOCTOR_PHOTO); // Get the photo path directly
    }

    public function updateDoctorPhoto(int $id, string $photoPath): bool
    {
        return $this->model
            ->where(DoctorEnum::ID, $id)
            ->update([DoctorEnum::DOCTOR_PHOTO => $photoPath]);
    }

    public function getDoctorDataById(int $id): object | null
    {
        $doctor = DB::table(DoctorEnum::DB_TABLE)
            ->where(DoctorEnum::ID, $id)
            ->first();

        if ($doctor && $doctor->province_id) {
            $province = DB::table('provinces')
                ->where('id', $doctor->province_id)
                ->first();
            $doctor->province = $province;
        }

        if ($doctor && $doctor->city_id) {
            $city = DB::table('cities')
                ->where('id', $doctor->city_id)
                ->first();
            $doctor->city = $city;
        }

        if ($doctor && $doctor->area_id) {
            $area = DB::table('areas')
                ->where('id', $doctor->area_id)
                ->first();
            $doctor->area = $area;
        }

        return $doctor;
    }

    public function updateDoctorData(array $data, int $id): mixed
    {
        return $this->model
            ->where(DoctorEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(DoctorEnum::ID, $id)
            ->delete();
    }
}
