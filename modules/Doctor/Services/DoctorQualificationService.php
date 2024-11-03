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
                'to' => $formData['to'][$i] ?? null,
                'current' => $formData['current'][$i] ?? 0,
                'major' => $formData['major'][$i] ?? null,
            ];

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

    public function updateQualification(int $doctorId, array $formData): mixed
    {
        $existingEducationIds = $this->repository->getQualiticationIdsByDoctorId($doctorId);

        $numEntries = count($formData['degree_id']);
        for ($i = 0; $i < $numEntries; $i++) {
            $educationId = $formData['education_id'][$i] ?? null;

            $educationData = [
                'doctor_id' => $formData['doctor_id'],
                'degree_id' => $formData['degree_id'][$i],
                'institute_id' => $formData['institute_id'][$i],
                'major' => $formData['major'][$i] ?? null,
                'from' => $formData['from'][$i],
                'to' => $formData['to'][$i] ?? null,
                'current' => $formData['current'][$i],
            ];

            if ($educationId && in_array($educationId, $existingEducationIds)) {
                $this->repository->updateDoctorQualificationData($educationData, $educationId);
            } else {
                $this->repository->storeDoctorQualificationData($educationData);
            }
        }

        return true;
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
