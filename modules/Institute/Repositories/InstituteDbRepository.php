<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Institute\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Institute\Models\Institute;
use Modules\Institute\Enums\InstituteEnum;

class InstituteDbRepository
{
    private Institute $model;
    public function __construct()
    {
        $this->model=new Institute();
    }

    public function getInstituteData(): mixed
    {
        return $this->model
        ->whereNull('deleted_at')
        ->latest()
        ->get();
    }

    public function storeInstituteData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getInstituteDataById(int $id): object|null
    {
        return DB::table(InstituteEnum::DB_TABLE)
            ->where(InstituteEnum::ID, $id)
            ->first();
    }

    public function update(array $data, int $id): mixed
    {
        return $this->model
            ->where(InstituteEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(InstituteEnum::ID, $id)
            ->delete();
    }
}
