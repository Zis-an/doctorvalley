<?php

namespace Modules\ChamberAdmin\Services;

use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Chamber\Enums\ChamberEnum;
use Modules\Chamber\Repositories\ChamberDBRepository;
use Modules\ChamberAdmin\Enums\ChamberAdminEnum;
use Modules\ChamberAdmin\Repositories\ChamberAdminDBRepository;
use RealRashid\SweetAlert\Facades\Alert;


class ChamberAdminRegistrationService
{

    private ChamberAdminDBRepository $repository;
    private ChamberDBRepository $chamberDBRepository;

    public function __construct()
    {
        $this->repository = new ChamberAdminDBRepository();
        $this->chamberDBRepository = new ChamberDBRepository();
    }

    public function registration(array $data): mixed
    {
        $prepareChamber = $this->prepareChamberData($data);
        $chamber = $this->chamberDBRepository->storeChamberData($prepareChamber);
        if(empty($chamber)){
            throw new Exception('Chamber Do not stored.');
        }

        $prepareChamberAdmin = $this->prepareChamberAdminData($data, $chamber->id);
        $chamberAdmin = $this->repository->storeChamberAdminData($prepareChamberAdmin);
        if(empty($chamberAdmin))
        {
            throw new Exception('Chamber Admin Do not stored.');
        }
        return $chamberAdmin;
    }

    public function prepareChamberData(array $data): array
    {
        return [
            ChamberEnum::CHAMBER_NAME => $data['chamber_name'],
            ChamberEnum::REG_NO => $data['reg_no'],
            ChamberEnum::CHAMBER_EMAIL => $data['email'],
            ChamberEnum::CHAMBER_PHONE => $data['phone'],
            ChamberEnum::STATUS => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    public function prepareChamberAdminData(array $data, $chamberId): mixed
    {
        return [
            ChamberAdminEnum::CHAMBER_ADMIN_NAME => $data['name'],
            ChamberAdminEnum::CHAMBER_ID => $chamberId,
            ChamberAdminEnum::USER_NAME => $data['email'],
            ChamberAdminEnum::CHAMBER_ADMIN_EMAIL => $data['email'],
            ChamberAdminEnum::CHAMBER_ADMIN_PHONE => $data['phone'],
            ChamberAdminEnum::CHAMBER_ADMIN_PASSWORD => Hash::make($data['password']),
            ChamberAdminEnum::CHAMBER_ADMIN_STATUS => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

    }



}
