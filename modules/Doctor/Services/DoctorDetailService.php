<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Doctor\Services;

use Exception;
use Modules\Doctor\Repositories\DoctorDetailDbRepository;

class DoctorDetailService
{
    private DoctorDetailDbRepository $repository;
    public function __construct()
    {
        $this->repository = new DoctorDetailDbRepository();
    }

    public function getDoctorDetailList(): mixed
    {
        $result = $this->repository->getDoctorDetailData();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function storeDoctorDetail(array $formData): mixed
    {
        $result = $this->repository->storeDoctorDetailData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    public function getDoctorDetailById(int $id): object
    {
        $result = $this->repository->getDoctorDetailDataById($id);
        if (empty($result)){
            throw new Exception('Doctor Detail Data not found');
        }
        return $result;
    }

    public function updateData( int $id, array $formData): mixed
    {
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid Doctor Detail update data');
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid Doctor Detail info');
        }
        return $result;
    }
}
