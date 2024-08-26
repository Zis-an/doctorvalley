<?php
/*
 * Author: Arup Kumer Bose
 * Email: arupkumerbose@gmail.com
 * Company Name: Brainchild Software <brainchildsoft@gmail.com>
 */

namespace Modules\Doctor\Services;

use Exception;
use Modules\Doctor\Repositories\DoctorExperienceDbRepository;

class DoctorExperienceService
{
    private DoctorExperienceDbRepository $repository;
    public function __construct()
    {
        $this->repository = new DoctorExperienceDbRepository();
    }

    public function getDoctorExperienceList(): mixed
    {
        $result = $this->repository->getDoctorExperienceData();
        if (empty($result)) {
            return [];
        }
        return $result;
    }

    public function storeDoctorExperience(array $formData): mixed
    {
        // Assuming all arrays have the same length
        $numEntries = count($formData['organization_name']);
        $experiences = [];
        for ($i = 0; $i < $numEntries; $i++) {
            $experiences[] = [
                'doctor_id' => $formData['doctor_id'],
                'organization_name' => $formData['organization_name'][$i],
                'designation' => $formData['designation'][$i],
                'from' => $formData['from'][$i],
                'to' => $formData['to'][$i],
                'current' => $formData['current'][$i],
                'location' => $formData['location'][$i],
            ];
        }
        // Store each row in the database
        foreach ($experiences as $experience) {
            $result = $this->repository->storeDoctorExperienceData($experience);
            if (empty($result)) {
                throw new Exception('Invalid data format');
            }
        }
        return $result;
    }

    public function getDoctorExperienceById(int $id): object
    {
        $result = $this->repository->getDoctorExperienceDataById($id);
        if (empty($result)) {
            throw new Exception('Doctor Experience Data not found');
        }
        return $result;
    }

    public function getDoctorExperienceByDoctorId(int $id): object
    {
        $result = $this->repository->getDoctorExperienceDataByDoctorId($id);
        if (empty($result)) {
            throw new Exception('Doctor Experience Data not found');
        }
        return $result;
    }

    public function updateExperience(int $id, array $formData): mixed
    {
        // Delete all existing records for the given doctor_id
        // $this->repository->deleteByDoctorId($id);

        $numEntries = count($formData['organization_name']);
        $experiences = [];
        for ($i = 0; $i < $numEntries; $i++) {
            $experiences[] = [
                'doctor_id' => $formData['doctor_id'],
                'organization_name' => $formData['organization_name'][$i],
                'designation' => $formData['designation'][$i],
                'from' => $formData['from'][$i],
                'to' => $formData['to'][$i],
                'current' => $formData['current'][$i],
                'location' => $formData['location'][$i],
            ];
        }
        // Store each row in the database
        foreach ($experiences as $experience) {
            $result = $this->repository->updateDoctorExperienceData($experience, $experience['doctor_id']);
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
            throw new Exception('Invalid Doctor Experience info');
        }
        return $result;
    }
}
