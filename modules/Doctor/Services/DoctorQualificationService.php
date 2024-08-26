<?php
/*
 * Author: Arup Kumer Bose
 * Email: arupkumerbose@gmail.com
 * Company Name: Brainchild Software <brainchildsoft@gmail.com>
 */

namespace Modules\Doctor\Services;

use Exception;
use Modules\Doctor\Repositories\DoctorQualificationDbRepository;

class DoctorQualificationService
{
    private DoctorQualificationDbRepository $repository;
    public function __construct()
    {
        $this->repository = new DoctorQualificationDbRepository();
    }

    public function getDoctorQualificationList(): mixed
    {
        $result = $this->repository->getDoctorQualificationData();
        if (empty($result)) {
            return [];
        }
        return $result;
    }

    public function storeDoctorQualification(array $formData): mixed
    {
        // Assuming all arrays have the same length
        $numEntries = count($formData['degree_id']);
        $qualifications = [];
        for ($i = 0; $i < $numEntries; $i++) {
            $qualification = [
                'doctor_id' => $formData['doctor_id'],
                'degree_id' => $formData['degree_id'][$i],
                'institute_id' => $formData['institute_id'][$i],
                'from' => $formData['from'][$i],
                'to' => $formData['to'][$i],
                'current' => $formData['current'][$i],
                'major' => $formData['major'][$i],
            ];

            if (!empty($formData['institute_name'][$i])) {
                $qualification['institute_name'] = $formData['institute_name'][$i];
            }

            $qualifications[] = $qualification;
        }
        // Store each row in the database
        foreach ($qualifications as $qualification) {
            $result = $this->repository->storeDoctorQualificationData($qualification);
            if (empty($result)) {
                throw new Exception('Invalid data format');
            }
        }
        return $result;
    }

    public function getDoctorQualificationById(int $id): object
    {
        $result = $this->repository->getDoctorQualificationDataById($id);
        if (empty($result)) {
            throw new Exception('Doctor Qualification Data not found');
        }
        return $result;
    }

    public function getDoctorQualificationByDoctorId(int $id): object
    {
        $result = $this->repository->getDoctorQualificationDataByDoctorId($id);
        if (empty($result)) {
            throw new Exception('Doctor Experience Data not found');
        }
        return $result;
    }

    public function updateQualification(int $id, array $formData): mixed
    {
        // $result = $this->repository->update($formData, $id);
        // if (empty($result)) {
        //     throw new Exception('Invalid Doctor Qualification update data');
        // }
        // return $result;

        $numEntries = count($formData['degree_id']);
        $qualifications = [];
        for ($i = 0; $i < $numEntries; $i++) {
            $qualification = [
                'doctor_id' => $formData['doctor_id'],
                'degree_id' => $formData['degree_id'][$i],
                'institute_id' => $formData['institute_id'][$i],
                'from' => $formData['from'][$i],
                'to' => $formData['to'][$i],
                'current' => $formData['current'][$i],
                'major' => $formData['major'][$i],
            ];

            if (!empty($formData['institute_name'][$i])) {
                $qualification['institute_name'] = $formData['institute_name'][$i];
            }

            $qualifications[] = $qualification;
        }
        // Store each row in the database
        foreach ($qualifications as $qualification) {
            $result = $this->repository->updateDoctorQualificationData($qualification, $qualification['doctor_id']);
            if (empty($result)) {
                throw new Exception('Invalid data format');
            }
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)) {
            throw new Exception('Invalid Doctor Qualification info');
        }
        return $result;
    }
}
