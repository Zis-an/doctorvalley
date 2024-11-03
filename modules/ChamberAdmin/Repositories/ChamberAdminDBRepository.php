<?php

namespace Modules\ChamberAdmin\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\ChamberAdmin\Models\ChamberAdmin;
use Modules\ChamberAdmin\Enums\ChamberAdminEnum;

class ChamberAdminDBRepository
{

    private ChamberAdmin $model;
    public function __construct()
    {
        $this->model = new ChamberAdmin();
    }

    public function getChamberAdminData(array $filters=[]): mixed
    {
        $query = $this->model
            ->with('chamber')
            ->whereNull('deleted_at')
            ->latest();

        // Check if the user is accessing from the chamber panel
        if (auth('chamber')->check()) {
            $chamberId = auth('chamber')->user()->chamber_id;
            $query->where('chamber_id', $chamberId);
        }

        $query = $this->getFilterQuery($query, $filters);

        return $query->paginate(10);
    }

    public function storeChamberAdminData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getChamberAdminDataById(int $id): object|null
    {
        return DB::table(ChamberAdminEnum::DB_TABLE)
            ->where(ChamberAdminEnum::ID, $id)
            ->first();
    }

    public function update(array $data, int $id): mixed
    {
        return $this->model
            ->where(ChamberAdminEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(ChamberAdminEnum::ID, $id)
            ->delete();
    }

    public function getChamberAdminByIdAndChamberId(int $id, int $chamberId): mixed
    {
        return $this->model
            ->where(ChamberAdminEnum::ID, $id)
            ->where(ChamberAdminEnum::CHAMBER_ID, $chamberId)
            ->first();
    }

    public function updateChamberAdminPassword(array $data): mixed
    {
        return $this->model
            ->where(ChamberAdminEnum::ID, $data['id'])
            ->where(ChamberAdminEnum::CHAMBER_ID, $data['chamber_id'])
            ->update($data);
    }


    private function getFilterQuery($query , array $filters=[])
    {

        // Filter by chamber admin name or phone or email
        if (!empty($filters['chamber_admin'])) {
            $query = $query->where(function ($q) use ($filters) {
                $q->where('name', 'like', '%' . $filters['chamber_admin'] . '%')
                    ->orWhere('phone', 'like', '%' . $filters['chamber_admin'] . '%')
                    ->orWhere('email', 'like', '%' . $filters['chamber_admin'] . '%');
            });
        }


        return $query;
    }


}
