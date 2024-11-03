<?php
/*
 * Author: Arup Kumer Bose
 * Email: arupkumerbose@gmail.com
 * Company Name: Brainchild Software <brainchildsoft@gmail.com>
 */

namespace Modules\Doctor\Services;

use Carbon\Carbon;
use Exception;
use Throwable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Chamber\Services\ChamberDoctorService;
use Modules\Doctor\Models\Doctor;
use Modules\Doctor\Repositories\DoctorDBRepository;
use Modules\Doctor\Repositories\DoctorSpecialityDbRepository;
use BCS\Uploader\V1\Services\UploaderService;

class DoctorService
{
    private DoctorDBRepository $repository;
    private DoctorSpecialityDbRepository $doctorSpecialityDbRepository;
    private ChamberDoctorService $chamberDoctorService;
    private UploaderService $uploaderService;
    public function __construct()
    {
        $this->repository = new DoctorDBRepository();
        $this->doctorSpecialityDbRepository  = new DoctorSpecialityDbRepository();
        $this->chamberDoctorService = new ChamberDoctorService();
        $this->uploaderService = new UploaderService();
    }

    public function getDoctorList(array $filterData=[]): mixed
    {
        $result = $this->repository->getDoctorData($filterData);
        if (empty($result)) {
            return [];
        }
        return $result;
    }

    public function storeDoctor(array $formData): mixed
    {
        if (empty($formData['password'])) {
            $formData['password'] = Hash::make('password'); // Default password
        } else {
            // Hash the provided password
            $formData['password'] = Hash::make($formData['password']);
        }

        $formData['links'] = json_encode($formData['links']);

        $doctor = $this->repository->storeDoctorData($formData);
        if (empty($doctor)) {
            throw new Exception('Invalid data format');
        }
        if (!empty($formData['speciality_id'])  && is_array($formData['speciality_id']) ) {
            foreach ($formData['speciality_id'] as $specialityId) {
                $this->doctorSpecialityDbRepository->storeDoctorSpecialityData([
                    'doctor_id' => $doctor->id,
                    'speciality_id' => $specialityId
                ]);
            }
        }
        if(auth('chamber')->check()) {
            $chamberId = Auth::guard('chamber')->user()->chamber_id;
            $addForm = date('Y-m-d');
            $addTo = Carbon::createFromFormat('Y-m-d', $addForm)->addYear()->format('Y-m-d');
            $data = [
                'chamber_id' => $chamberId,
                'doctor_id' => $doctor->id,
                'add_from' => $addForm,
                'add_to' => $addTo,
            ];
            $this->chamberDoctorService->storeChamberDoctorData($data);
        }

        return $doctor;

    }

    public function storeImage(array $formData)
    {
        if (!empty($formData['photo'])) {
            $imageData = $this->singleUpload($formData['photo']);
            $formData['photo'] = $imageData['fullPath'];
            $this->repository->updateDoctorPhoto($formData['doctor_id'], $formData['photo']);
        }
    }

    public function updateImage(array $formData)
    {
        if (!empty($formData['photo'])) {
            $imageData = $this->singleUpload($formData['photo']);
            $formData['photo'] = $imageData['fullPath'];
            $this->repository->updateDoctorPhoto($formData['doctor_id'], $formData['photo']);
        }
    }

    public function getDoctorById(int $id): object
    {
        $result = $this->repository->getDoctorDataById($id);
        if (empty($result)) {
            throw new Exception('Doctor Data not found');
        }
        return $result;
    }

    public function updateDoctor(int $id, array $formData): mixed
    {
        // Remove speciality_id from $formData before updating the doctor
        $specialityIds = $formData['speciality_id'];
        unset($formData['speciality_id']);

        // Convert links to JSON
        $formData['links'] = json_encode($formData['links']);

        // Update the doctor’s basic info
        $doctor = $this->repository->updateDoctorData($formData, $id);
        if (empty($doctor)) {
            throw new Exception('Invalid Doctor update data');
        }

        // Update or create the doctor’s specialities
        if (!empty($specialityIds)) {
            foreach ($specialityIds as $specialityId) {
                $this->doctorSpecialityDbRepository->storeOrUpdateDoctorSpeciality([
                    'doctor_id' => $id,
                    'speciality_id' => $specialityId
                ]);
            }
        }

        return $doctor;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)) {
            throw new Exception('Invalid Doctor info');
        }
        return $result;
    }

    public function getDoctorListWithFilter(array $filterData): mixed
    {
        $result = $this->repository->getDoctorListWithFilter($filterData);
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function getDoctorsBySpecialityIds(array $specialityIds, $currentDoctorId)
    {
        $result = $this->repository->getDoctorListBySpecialityIds($specialityIds, $currentDoctorId);
        if ($result->isEmpty()) {
            return []; // Return an empty array if no results found
        }
        return $result;
    }

    public function getAllDoctorList(): mixed
    {
        return $this->repository->getAllDoctors();
    }

    private function singleUpload($file): \Throwable|Exception|array
    {
        $uploadResponse = $this->uploaderService
            ->setUploadPath('/doctor_images/')
            ->setFileSystem('public')
            ->upload($file);
        if ($uploadResponse instanceof Throwable){
            throw new Exception($uploadResponse->getMessage());
        }
        return $uploadResponse;
    }
}
