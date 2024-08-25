<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Speciality\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Speciality\Models\Speciality;
use Modules\Speciality\Enums\SpecialityEnum;

class SpecialityDbRepository
{
    private Speciality $model;
    public function __construct()
    {
        $this->model=new Speciality();
    }

    public function getSpecialityData(): mixed
    {
        return $this->model
        ->whereNull('deleted_at')
        ->latest()
        ->get();
    }

    public function storeSpecialityData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getSpecialityDataById(int $id): object|null
    {
        return DB::table(SpecialityEnum::DB_TABLE)
            ->where(SpecialityEnum::ID, $id)
            ->first();
    }

    public function update(array $data, int $id): mixed
    {
        return $this->model
            ->where(SpecialityEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(SpecialityEnum::ID, $id)
            ->delete();
    }
}
