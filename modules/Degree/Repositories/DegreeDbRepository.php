<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Degree\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Degree\Models\Degree;
use Modules\Degree\Enums\DegreeEnum;

class DegreeDbRepository
{
    private Degree $model;
    public function __construct()
    {
        $this->model=new Degree();
    }

    public function getDegreeData(array $filters=[]): mixed
    {
        $query = $this->model
            ->whereNull('deleted_at')
            ->latest();

        $query = $this->getFilterQuery($query, $filters);

        return $query->paginate(10);
    }

    public function getActiveDegreeData(): mixed
    {
        return $this->model
            ->whereNull('deleted_at')
            ->where(DegreeEnum::DEGREE_STATUS, 1)
            ->get();
    }

    public function storeDegreeData(array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getDegreeDataById(int $id): object|null
    {
        return DB::table(DegreeEnum::DB_TABLE)
            ->where(DegreeEnum::ID, $id)
            ->first();
    }

    public function update(array $data, int $id): mixed
    {
        return $this->model
            ->where(DegreeEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(DegreeEnum::ID, $id)
            ->delete();
    }


    private function getFilterQuery($query , array $filters=[])
    {
        if (!empty($filters['degree'])) {
            $query = $query->where(function ($q) use ($filters) {
                $q->where('degree_name', 'like', '%' . $filters['degree'] . '%');
            });
        }

        return $query;
    }


}
