<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Location\Models\Province;
use Modules\Location\Enums\ProvinceEnum;

class ProvinceDbRepository
{
    private Province $model;
    public function __construct()
    {
        $this->model = new Province();
    }
    public function getProvinceData(): mixed
    {
        return $this->model
            ->with('country')
            ->whereNull('deleted_at')
            ->latest()
            ->get();
    }

    public function storeProvinceData( array $data): mixed
    {
        return $this->model->create($data);
    }

    public function getProvinceDataById( int $id): object|null
    {
        return DB::table(ProvinceEnum::DB_TABLE)
            ->where(ProvinceEnum::ID, $id)
            ->first();
    }

    public function update( array $data, int $id): mixed
    {
        return $this->model
            ->where(ProvinceEnum::ID, $id)
            ->update($data);
    }

    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(ProvinceEnum::ID, $id)
            ->delete();
    }

    public function fetchProvincesForSelect(): \Illuminate\Support\Collection
    {
        return DB::table(ProvinceEnum::DB_TABLE)
            ->where(ProvinceEnum::PROVINCE_STATUS, '1')
            ->whereNull('deleted_at')
            ->select('id','province_name')
//            ->selectRaw('CONCAT('.$this->model::COUNTRY_NAME.'," (", '.$this->model::COUNTRY_SHORT_NAME.',")" ) as country_info')
            ->get();
    }


    public function getProvinceFetchData(int $country_id): mixed
    {
        return $this->model
            ->where(ProvinceEnum::COUNTRY_ID,$country_id)
            ->get();
    }


    public function fetchProvincesByCountryId(int $countryId): array
    {
        return DB::table(ProvinceEnum::DB_TABLE)
            ->where(ProvinceEnum::COUNTRY_ID, $countryId)
            ->where(ProvinceEnum::PROVINCE_STATUS, '1')
            ->whereNull('deleted_at')
            ->select(ProvinceEnum::ID, ProvinceEnum::PROVINCE_NAME)
            ->get()
            ->toArray();
    }


}
