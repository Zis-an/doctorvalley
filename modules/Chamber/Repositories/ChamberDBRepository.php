<?php

namespace Modules\Chamber\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Chamber\Models\Chamber;
use Modules\Chamber\Enums\ChamberEnum;

class ChamberDBRepository
{

    private Chamber $model;
    public function __construct()
    {
        $this->model = new Chamber();
    }

    public function getChamberData(): mixed
    {
        return $this->model
        ->whereNull('deleted_at')
        ->latest()
        ->get();
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
}
