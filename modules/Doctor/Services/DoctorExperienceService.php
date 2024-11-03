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
                'department' => $formData['department'][$i],
                'from' => $formData['from'][$i],
                'to' => $formData['to'][$i] ?? null,
                'current' => $formData['current'][$i] ?? 0,
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


    public function updateExperience(int $doctorId, array $formData): mixed
    {
        // Retrieve all existing experience IDs from the database for the given doctor
        $existingExperienceIds = $this->repository->getExperienceIdsByDoctorId($doctorId);

        $numEntries = count($formData['organization_name']);
        $newExperienceIds = [];

        // Loop through form data and handle both update and create scenarios
        for ($i = 0; $i < $numEntries; $i++) {
            $experienceId = $formData['experience_id'][$i] ?? null;  // Check if it's an existing record

            $experienceData = [
                'doctor_id' => $formData['doctor_id'],
                'organization_name' => $formData['organization_name'][$i],
                'designation' => $formData['designation'][$i],
                'department' => $formData['department'][$i],
                'from' => $formData['from'][$i],
                'to' => $formData['to'][$i] ?? null,
                'current' => $formData['current'][$i],
                'location' => $formData['location'][$i],
            ];

            if ($experienceId && in_array($experienceId, $existingExperienceIds)) {
                // Update existing experience
                $this->repository->updateDoctorExperienceData($experienceData, $experienceId);
            } else {
                // Create new experience
                $newExperience = $this->repository->storeDoctorExperienceData($experienceData);
            }
        }

        return true;
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
