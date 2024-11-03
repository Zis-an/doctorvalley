<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Doctor\Services;

use Exception;
use Illuminate\Support\Facades\Hash;
use Modules\Doctor\Enums\DoctorEnum;
use Modules\Doctor\Repositories\DoctorDBRepository;

class DoctorRegistrationService
{
    private DoctorDbRepository $repository;
    public function __construct()
    {
        $this->repository = new DoctorDbRepository();
    }

    public function doctorRegistration(array $data): mixed
    {
       $doctorInfo = $this->prepareDoctorInfo($data);
       $doctor = $this->repository->storeDoctorData($doctorInfo);
       if(empty($doctor)) {
           throw new Exception('Doctor not registered. Invalid data format');
       }
       return $doctor;
    }

    public function prepareDoctorInfo(array $data): array
    {
        return [
            DoctorEnum::DOCTOR_NAME => $data['name'],
            DoctorEnum::DOCTOR_BMDC => $data['bmdc'],
            DoctorEnum::DOCTOR_EMAIL => $data['email'],
            DoctorEnum::DOCTOR_PHONE => $data['phone'],
            DoctorEnum::DOCTOR_PASSWORD => Hash::make($data['password']),

            DoctorEnum::DOCTOR_USER_NAME => $data['email'],
            DoctorEnum::COUNTRY_ID => 1,
            DoctorEnum::PROVINCE_ID => 1,
            DoctorEnum::CITY_ID => 1,
            DoctorEnum::AREA_ID => 1,
            DoctorEnum::DOCTOR_ADDRESS => 'Mymensingh',
            DoctorEnum::DOCTOR_BIO => 'Doctor',
            DoctorEnum::DOCTOR_STATUS => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }


}
