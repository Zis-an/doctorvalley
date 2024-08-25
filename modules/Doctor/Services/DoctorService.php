<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Doctor\Services;

use Exception;
use Modules\Doctor\Repositories\DoctorDbRepository;

class DoctorService
{
    private DoctorDbRepository $repository;
    public function __construct()
    {
        $this->repository = new DoctorDbRepository();
    }

    public function getDoctorList(): mixed
    {
        $result = $this->repository->getDoctorData();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function storeDoctor(array $formData): mixed
    {
        $formData['speciality'] = json_encode($formData['speciality']);
        $formData['links'] = json_encode($formData['links']);
        $result = $this->repository->storeDoctorData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    public function storeImage(array $formData)
    {
        if (!empty($formData['photo'])) {
            $image = $formData['photo'];
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = public_path('doctor_images/');
            $image->move($path, $filename);
            $photoPath = 'doctor_images/' . $filename; // Store relative path
            $this->repository->updateDoctorPhoto($formData['doctor_id'], $photoPath);
        } else {
            $formData['photo'] = null;
        }
    }

    public function getDoctorById(int $id): object
    {
        $result = $this->repository->getDoctorDataById($id);
        if (empty($result)){
            throw new Exception('Doctor Data not found');
        }
        return $result;
    }

    public function updateData( int $id, array $formData): mixed
    {
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid Doctor update data');
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid Doctor info');
        }
        return $result;
    }
}
