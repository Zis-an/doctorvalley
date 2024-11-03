<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Speciality\Services;

use Modules\Speciality\Repositories\SpecialityDbRepository;
use Exception;

class SpecialityService
{
    private SpecialityDbRepository $repository;
    public function __construct()
    {
        $this->repository = new SpecialityDbRepository();
    }

    public function getSpecialityList(array $filterData): mixed
    {
        $result = $this->repository->getSpecialityData($filterData);
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function storeSpeciality(array $formData): mixed
    {
        $result = $this->repository->storeSpecialityData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    public function getSpecialityById(int $id): object
    {
        $result = $this->repository->getSpecialityDataById($id);
        if (empty($result)){
            throw new Exception('Speciality Data not found');
        }
        return $result;
    }

    public function updateData( int $id, array $formData): mixed
    {
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid Speciality update data');
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid Speciality info');
        }
        return $result;
    }

    public function getAllSpecialityList(): mixed
    {
        $result = $this->repository->getAllSpecialities();
        if (empty($result)){
            return [];
        }
        return $result;
    }
}
