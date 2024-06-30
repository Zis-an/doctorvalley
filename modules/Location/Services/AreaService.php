<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Services;

use Modules\Location\Repositories\AreaDbRepository;
use Exception;

class AreaService
{
    private AreaDbRepository $repository;
    public function __construct()
    {
        $this->repository = new AreaDbRepository();
    }

    public function getAreaList(): mixed
    {
        $result = $this->repository->getAreaData();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function storeArea(array $formData): mixed
    {
        $result = $this->repository->storeAreaData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    public function getAreaByCityId (int $cityId){
        return $this->repository->fetchAreaByCityId($cityId);
    }

    public function getAreaById(int $id): object
    {
        $result = $this->repository->getAreaDataById($id);
        if (empty($result)){
            throw new Exception('Area Data not found');
        }
        return $result;
    }

    public function updateData( int $id, array $formData): mixed
    {
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid Area update data');
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid Area info');
        }
        return $result;
    }





}
