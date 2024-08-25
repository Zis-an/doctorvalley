<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Doctor\Services;

use Exception;
use Modules\Institute\Repositories\DoctorSpecialityDbRepository;

class DoctorSpecialityService
{
    private DoctorSpecialityDbRepository $repository;
    public function __construct()
    {
        $this->repository = new DoctorSpecialityDbRepository();
    }

    public function getDoctorSpecialityList(): mixed
    {
        $result = $this->repository->getDoctorSpecialityData();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function storeDoctorSpeciality(array $formData): mixed
    {
        $result = $this->repository->storeDoctorSpecialityData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    public function getDoctorSpecialityById(int $id): object
    {
        $result = $this->repository->getDoctorSpecialityDataById($id);
        if (empty($result)){
            throw new Exception('Doctor Speciality Data not found');
        }
        return $result;
    }

    public function updateData( int $id, array $formData): mixed
    {
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid Doctor Speciality update data');
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid Doctor Speciality info');
        }
        return $result;
    }
}
