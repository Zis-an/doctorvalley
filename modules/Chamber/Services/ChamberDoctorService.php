<?php

namespace Modules\Chamber\Services;

use Carbon\Carbon;
use Exception;
use Modules\Chamber\Enums\ChamberDoctorEnum;
use Modules\Chamber\Repositories\ChamberDoctorDBRepository;


class ChamberDoctorService
{

    private ChamberDoctorDBRepository $chamberDoctorDBRepository;

    public function __construct()
    {
        $this->chamberDoctorDBRepository = new ChamberDoctorDBRepository();
    }

    public function storeChamberDoctorData(array $data) : mixed
    {
        $prepareChamberDoctor = $this->prepareChamberDoctor($data);
        $chamberDoctor = $this->chamberDoctorDBRepository->storeChamberDoctorData($prepareChamberDoctor);
        if (empty($chamberDoctor)) {
            throw new Exception('Chamber doctor failed to store.');
        }
        return $chamberDoctor;
    }

    public function prepareChamberDoctor(array $data) : mixed
    {
        return [
            ChamberDoctorEnum::CHAMBER_ID => $data['chamber_id'],
            ChamberDoctorEnum::DOCTOR_ID => $data['doctor_id'],
            ChamberDoctorEnum::ADD_FROM => $data['add_from'],
            ChamberDoctorEnum::ADD_TO => $data['add_to'],
            'created_at' => Carbon::now(),
        ];
    }

    public function getDoctorListByAuthChamber(): mixed
    {
        $result = $this->chamberDoctorDBRepository->getDoctorListByAuthChamber();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function deleteChamberDoctorById($doctorId): mixed
    {
        $result= $this->chamberDoctorDBRepository->deleteChamberDoctorById($doctorId);
        if (empty($result)){
            throw new Exception('Doctor information not found.', 400);
        }
        return $result;
    }

    public function getChamberDoctorIdsByAuthChamber(): mixed
    {
        $result = $this->chamberDoctorDBRepository->getChamberDoctorIdsByAuthChamber();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function chamberDoctorsCountBySpeciality(): mixed
    {
        $result = $this->chamberDoctorDBRepository->chamberDoctorsCountBySpeciality();
        if (empty($result)){
            return [];
        }
        return $result;
    }



}
