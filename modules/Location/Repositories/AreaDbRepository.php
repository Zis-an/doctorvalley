<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Repositories;

use Modules\Location\Models\Area;
use Illuminate\Support\Facades\DB;
use Modules\Location\Enums\AreaEnum;

class AreaDbRepository
{
    private Area $model;
    public function __construct()
    {
        $this->model=new Area();
    }

    public function getAreaData(): mixed
    {
        return $this->model
            ->with('city')
            ->whereNull('deleted_at')
            ->latest()
            ->get();
    }

    public function storeAreaData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getAreaDataById(int $id): object|null
    {
        return DB::table(AreaEnum::DB_TABLE)
            ->where(AreaEnum::ID, $id)
            ->first();
    }

    public function update(array $data, int $id): mixed
    {
        return $this->model
            ->where(AreaEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(AreaEnum::ID, $id)
            ->delete();
    }

    public function fetchAreaByCityId(int $cityId)
    {
        return $this->model
            ->where('city_id', $cityId)
            ->where(AreaEnum::AREA_STATUS, '1')
            ->whereNull('deleted_at')
            ->get();
    }
}
