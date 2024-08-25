<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Doctor\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Doctor\Models\DoctorDetail;
use Modules\Doctor\Enums\DoctorDetailEnum;

class DoctorDetailDbRepository
{
    private DoctorDetail $model;
    public function __construct()
    {
        $this->model = new DoctorDetail();
    }

    public function getDoctorDetailData(): mixed
    {
        return $this->model
        ->whereNull('deleted_at')
        ->latest()
        ->get();
    }

    public function storeDoctorDetailData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getDoctorDetailDataById(int $id): object|null
    {
        return DB::table(DoctorDetailEnum::DB_TABLE)
            ->where(DoctorDetailEnum::ID, $id)
            ->first();
    }

    public function update(array $data, int $id): mixed
    {
        return $this->model
            ->where(DoctorDetailEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(DoctorDetailEnum::ID, $id)
            ->delete();
    }
}
