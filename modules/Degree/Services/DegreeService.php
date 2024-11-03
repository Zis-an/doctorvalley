<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Degree\Services;

use Modules\Degree\Repositories\DegreeDbRepository;
use Exception;

class DegreeService
{
    private DegreeDbRepository $repository;
    public function __construct()
    {
        $this->repository = new DegreeDbRepository();
    }

    public function getDegreeList(array $filterData): mixed
    {
        $result = $this->repository->getDegreeData($filterData);
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function getActiveDegreeList(): mixed
    {
        $result = $this->repository->getActiveDegreeData();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function storeDegree(array $formData): mixed
    {
        $result = $this->repository->storeDegreeData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    public function getDegreeById(int $id): object
    {
        $result = $this->repository->getDegreeDataById($id);
        if (empty($result)){
            throw new Exception('Degree Data not found');
        }
        return $result;
    }

    public function updateData( int $id, array $formData): mixed
    {
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid Degree update data');
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid Degree info');
        }
        return $result;
    }
}
