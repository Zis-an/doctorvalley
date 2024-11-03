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

    public function getAreaData(array $filters=[]): mixed
    {
        $query =  $this->model
            ->with('city')
            ->whereNull('deleted_at')
            ->latest();

        $query = $this->getFilterQuery($query, $filters);

        return $query->paginate(10);

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

    public function fetchAreasForSelect()
    {
        return DB::table(AreaEnum::DB_TABLE)
            ->where(AreaEnum::AREA_STATUS, '1')
            ->whereNull('deleted_at')
            ->select('id','area_name')
            ->get();
    }

    public function fetchAreaByCityId(int $cityId)
    {
        return $this->model
            ->where('city_id', $cityId)
            ->where(AreaEnum::AREA_STATUS, '1')
            ->whereNull('deleted_at')
            ->get();
    }

    private function getFilterQuery($query , array $filters=[])
    {
        if (!empty($filters['area'])) {
            $query = $query->where(function ($q) use ($filters) {
                $q->where('area_name', 'like', '%' . $filters['area'] . '%');
            });
        }

        return $query;
    }

    public function getAllAreas()
    {
        return  $this->model
            ->whereNull('deleted_at')
            ->where('status', 1)
            ->get();
    }

}
