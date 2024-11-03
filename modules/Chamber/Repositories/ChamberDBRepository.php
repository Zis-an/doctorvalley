<?php

namespace Modules\Chamber\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Chamber\Models\Chamber;
use Modules\Chamber\Enums\ChamberEnum;
use Modules\ChamberAdmin\Models\ChamberAdmin;

class ChamberDBRepository
{

    private Chamber $model;
    private ChamberAdmin $chamberAdmin;
    public function __construct()
    {
        $this->model = new Chamber();
        $this->chamberAdmin = new ChamberAdmin();
    }

    public function getChamberData(array $filters=[]): mixed
    {
        $query = $this->model
            ->with('province', 'city', 'area')
            ->whereNull('deleted_at')
            ->latest();
        $query = $this->getFilterQuery($query, $filters);

        return $query->paginate(10);

    }

    public function storeChamberData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getChamberDataById(int $id): object|null
    {
        return DB::table(ChamberEnum::DB_TABLE)
            ->where(ChamberEnum::ID, $id)
            ->first();
    }

    public function update(array $data, int $id): mixed
    {
        return $this->model
            ->where(ChamberEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(ChamberEnum::ID, $id)
            ->delete();
    }


    private function getFilterQuery($query , array $filters=[])
    {
        // Filter by chamber name or phone or email
        if (!empty($filters['search_chamber'])) {
            $query = $query->where(function ($q) use ($filters) {
                $q->where('chamber_name', 'like', '%' . $filters['search_chamber'] . '%')
                    ->orWhere('phone_no', 'like', '%' . $filters['search_chamber'] . '%')
                    ->orWhere('email', 'like', '%' . $filters['search_chamber'] . '%');
            });
        }

        if (!empty($filters['chamber_type'])){
            $query = $query->where(function ($q) use ($filters) {
                $q->where('chamber_type', $filters['chamber_type']);
            });
        }

        if (!empty($filters['province_id'])){
            $query = $query->whereHas('province', function ($q) use ($filters) {
                $q->where('provinces.id', $filters['province_id']);
            });
        }

        if (!empty($filters['city_id'])){
            $query = $query->whereHas('city', function ($q) use ($filters) {
                $q->where('cities.id', $filters['city_id']);
            });
        }

        if (!empty($filters['area_id'])){
            $query = $query->whereHas('area', function ($q) use ($filters) {
                $q->where('areas.id', $filters['area_id']);
            });
        }

        return $query;
    }

}
