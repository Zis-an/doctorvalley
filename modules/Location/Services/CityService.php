<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Services;

use Modules\Location\Repositories\CityDbRepository;
use Exception;

class CityService
{
    private CityDbRepository $repository;
    public function __construct()
    {
        $this->repository = new CityDbRepository();
    }

    public function getCityList(array $filterData): mixed
    {
        $result = $this->repository->getCityData($filterData);
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function storeCity(array $formData): mixed
    {
        $result = $this->repository->storeCityData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    public function getCityById(int $id): object
    {
        $result = $this->repository->getCityDataById($id);
        if (empty($result)){
            throw new Exception('City Data not found');
        }
        return $result;
    }

    public function updateData( int $id, array $formData): mixed
    {
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid City update data');
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid City info');
        }
        return $result;
    }

    public function getCitiesForSelect()
    {
        $result = $this->repository->fetchCitiesForSelect();
        if (empty($result)){
            throw new Exception('Invalid City info');
        }
        return $result;
    }

    public function getCityByProvinceId(int $provinceId): array
    {
        return $this->repository->fetchCitiesByProvinceId($provinceId);
    }

    public function getAllCityList(): mixed
    {
        $result = $this->repository->getAllCities();
        if (empty($result)){
            return [];
        }
        return $result;
    }
}
