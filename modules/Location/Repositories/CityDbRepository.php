<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Repositories;

use Modules\Location\Models\City;
use Illuminate\Support\Facades\DB;
use Modules\Location\Enums\CityEnum;

class CityDbRepository
{
    private City $model;
    public function __construct()
    {
        $this->model = new City();
    }

    public function getCityData(array $filters=[]): mixed
    {
        $query = $this->model
            ->with('province')
            ->whereNull('deleted_at')
            ->latest();

        $query = $this->getFilterQuery($query, $filters);

        return $query->paginate(10);
    }

    public function storeCityData( array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getCityDataById( int $id): object|null
    {
        return DB::table(CityEnum::DB_TABLE)
            ->where(CityEnum::ID, $id)
            ->first();
    }

    public function update( array $data, int $id): mixed
    {
        return $this->model
            ->where(CityEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(CityEnum::ID, $id)
            ->delete();
    }

    public function fetchCitiesForSelect()
    {
        return DB::table(CityEnum::DB_TABLE)
            ->where(CityEnum::CITY_STATUS, '1')
            ->whereNull('deleted_at')
            ->select('id','city_name')
            ->get();
    }

    public function fetchCitiesByProvinceId(int $provinceId): array
    {
        return DB::table(CityEnum::DB_TABLE)
            ->where(CityEnum::PROVINCE_ID, $provinceId)
            ->where(CityEnum::CITY_STATUS, '1')
            ->whereNull('deleted_at')
            ->select(CityEnum::ID, CityEnum::CITY_NAME)
            ->get()
            ->toArray();
    }

    private function getFilterQuery($query , array $filters=[])
    {
        if (!empty($filters['city'])) {
            $query = $query->where(function ($q) use ($filters) {
                $q->where('city_name', 'like', '%' . $filters['city'] . '%');
            });
        }

        return $query;
    }

    public function getAllCities()
    {
        return  $this->model
            ->whereNull('deleted_at')
            ->where('status', 1)
            ->get();
    }
}
