<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Institute\Services;

use Modules\Institute\Repositories\InstituteDbRepository;
use Exception;

class InstituteService
{
    private InstituteDbRepository $repository;
    public function __construct()
    {
        $this->repository = new InstituteDbRepository();
    }

    public function getInstituteList(array $filterData): mixed
    {
        $result = $this->repository->getInstituteData($filterData);
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function storeInstitute(array $formData): mixed
    {
        $result = $this->repository->storeInstituteData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    public function getInstituteById(int $id): object
    {
        $result = $this->repository->getInstituteDataById($id);
        if (empty($result)){
            throw new Exception('Institute Data not found');
        }
        return $result;
    }

    public function updateData( int $id, array $formData): mixed
    {
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid Institute update data');
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid Institute info');
        }
        return $result;
    }
}
