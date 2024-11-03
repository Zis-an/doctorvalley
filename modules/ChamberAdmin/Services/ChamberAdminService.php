<?php

namespace Modules\ChamberAdmin\Services;

use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\ChamberAdmin\Repositories\ChamberAdminDBRepository;
use RealRashid\SweetAlert\Facades\Alert;


class ChamberAdminService
{

    private ChamberAdminDBRepository $repository;

    public function __construct()
    {
        $this->repository = new ChamberAdminDBRepository();
    }

    public function getChamberAdminList(array $filterData): mixed
    {
        $result = $this->repository->getChamberAdminData($filterData);
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function storeChamberAdmin(array $formData): mixed
    {
        $result = $this->repository->storeChamberAdminData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    public function getChamberAdminById(int $id): object
    {
        $result = $this->repository->getChamberAdminDataById($id);
        if (empty($result)){
            throw new Exception('Chamber Admin Data not found');
        }
        return $result;
    }

    public function updateData( int $id, array $formData): mixed
    {
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid Chamber Admin update data');
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid Chamber Admin info');
        }
        return $result;
    }

    public function getChamberAdminByIdAndChamberId(int $id, int $chamberId): mixed
    {
        $result = $this->repository->getChamberAdminByIdAndChamberId($id, $chamberId);
        if (empty($result)){
            throw new Exception('Chamber Admin Data not found');
        }
        return $result;
    }

    public function updateChamberAdminPassword(array $formData): mixed
    {
        if (!Hash::check($formData['current_password'], auth('chamber')->user()->password)) {
            // Throw an exception instead of returning a redirect
            throw new \Exception('Your current password does not match!');
        }

        $formData['password'] = Hash::make($formData['password']);
        unset($formData['current_password'], $formData['password_confirmation']);

        return $this->repository->updateChamberAdminPassword($formData);
    }


}
