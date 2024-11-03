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

    public function getInstituteData(array $filters=[]): mixed
    {
        $query = $this->model
            ->whereNull('deleted_at')
            ->latest();

        $query = $this->getFilterQuery($query, $filters);

        return $query->paginate(10);
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


    private function getFilterQuery($query , array $filters=[])
    {
        if (!empty($filters['institute'])) {
            $query = $query->where(function ($q) use ($filters) {
                $q->where('institute_name', 'like', '%' . $filters['institute'] . '%')
                    ->orWhere('institute_address', 'like', '%' . $filters['institute'] . '%');
            });
        }

        return $query;
    }


}
