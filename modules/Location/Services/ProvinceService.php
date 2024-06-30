<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Services;

use Modules\Location\Repositories\ProvinceDbRepository;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class ProvinceService
{
    private ProvinceDbRepository $repository;
    public function __construct()
    {
        $this->repository = new ProvinceDbRepository();
    }
    public function getProvinceList(): mixed
    {
        $result = $this->repository->getProvinceData();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function storeProvince(array $formData): mixed
    {
        $result = $this->repository->storeProvinceData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    public function getProvinceById(int $id): object
    {
        $result = $this->repository->getProvinceDataById($id);
        if (empty($result)){
            throw new Exception('Province Data not found');
        }
        return $result;
    }

    public function updateData( int $id, array $formData): mixed
    {
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid country update data');
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid Province info');
        }
        return $result;
    }

    public function getProvincesForSelect()
    {
        $result = $this->repository->fetchProvincesForSelect();
        if (empty($result)){
            throw new Exception('Invalid Province info');
        }
        return $result;
    }


    public function getProvinceFetch(int $country_id): mixed{
        $result = $this->repository->getProvinceFetchData($country_id);
        if (empty($result)){
            throw new Exception('Invalid Province Fetch');
        }
        return $result;
    }


    public function getProvinceByCountryId(int $countryId): array
    {
        return $this->repository->fetchProvincesByCountryId($countryId);
    }


}
