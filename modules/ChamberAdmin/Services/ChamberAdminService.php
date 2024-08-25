<?php

namespace Modules\ChamberAdmin\Services;

use Exception;
use Modules\ChamberAdmin\Repositories\ChamberAdminDBRepository;


class ChamberAdminService
{

    private ChamberAdminDBRepository $repository;

    public function __construct()
    {
        $this->repository = new ChamberAdminDBRepository();
    }

    public function getChamberAdminList(): mixed
    {
        $result = $this->repository->getChamberAdminData();
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
}
