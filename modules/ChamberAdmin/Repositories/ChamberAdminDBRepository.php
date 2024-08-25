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

    public function getChamberAdminData(): mixed
    {
        return $this->model
        ->whereNull('deleted_at')
        ->latest()
        ->get();
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
}
