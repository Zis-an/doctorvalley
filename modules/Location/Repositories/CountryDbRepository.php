<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Repositories;

use Illuminate\Support\Facades\DB;
use Modules\Location\Models\Country;
use Modules\Location\Enums\CountryEnum;

class CountryDbRepository
{
    private Country $model;
    public function __construct()
    {
        $this->model = new Country();
    }


    /**
     * @return mixed
     */
    public function getCountryData(array $filters=[]): mixed
    {
        $query = $this->model
            ->whereNull('deleted_at')
            ->latest();

        $query = $this->getFilterQuery($query, $filters);

        return $query->paginate(10);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function storeCountryData( array $data): mixed
    {
        return $this->model->create($data);
    }

    /**
     * @param int $id
     * @return object|null
     */
    public function getCountryDataById( int $id): object|null
    {
        return DB::table(CountryEnum::DB_TABLE)
            ->where(CountryEnum::ID, $id)
            ->first();
    }

    /**
     * @param array $data
     * @param int $id
     * @return mixed
     */
    public function update( array $data, int $id): mixed
    {
        return $this->model
            ->where(CountryEnum::ID, $id)
            ->update($data);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteById(int $id): mixed
    {
        return $this->model
            ->where(CountryEnum::ID, $id)
            ->delete();
    }

    public function fetchCountriesForSelect()
    {
        return DB::table(CountryEnum::DB_TABLE)
            ->where(CountryEnum::COUNTRY_STATUS,'active')
            ->whereNull('deleted_at')
            ->select('id')
            ->selectRaw('CONCAT('.CountryEnum::COUNTRY_NAME.'," (", '.CountryEnum::COUNTRY_SHORT_NAME.',")" ) as country_info')
            ->get();
    }

    public function getCountryByIds(array $ids=[])
    {
        return DB::table(CountryEnum::DB_TABLE)
            ->whereIn(CountryEnum::ID, $ids)
            ->get();
    }

    private function getFilterQuery($query , array $filters=[])
    {
        if (!empty($filters['country'])) {
            $query = $query->where(function ($q) use ($filters) {
                $q->where('country_name', 'like', '%' . $filters['country'] . '%')
                    ->orWhere('capital', 'like', '%' . $filters['country'] . '%');
            });
        }

        return $query;
    }

}
