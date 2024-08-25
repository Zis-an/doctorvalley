<?php

namespace Modules\Chamber\Services;

use Module\Chamber\Models\Chamber;
use Modules\Chamber\Repositories\ChamberDBRepository;
use Exception;

class ChamberService
{

    private ChamberDBRepository $repository;

    public function __construct()
    {
        $this->repository = new ChamberDBRepository();
    }

    public function getChamberList(): mixed
    {
        $result = $this->repository->getChamberData();
        if (empty($result)){
            return [];
        }
        return $result;
    }

    public function storeChamber(array $formData): mixed
    {
        $formData['links'] = json_encode($formData['links']);
        $result = $this->repository->storeChamberData($formData);
        if (empty($result)){
            throw new Exception('Invalid data format');
        }
        return $result;
    }

    public function getChamberById(int $id): object
    {
        $result = $this->repository->getChamberDataById($id);
        if (empty($result)){
            throw new Exception('Chamber Data not found');
        }
        return $result;
    }

    public function updateData( int $id, array $formData): mixed
    {
        $formData['links'] = json_encode($formData['links']);
        $result = $this->repository->update($formData, $id);
        if (empty($result)){
            throw new Exception('Invalid Chamber update data');
        }
        return $result;
    }

    public function deleteData(int $id): mixed
    {
        $result = $this->repository->deleteById($id);
        if (empty($result)){
            throw new Exception('Invalid Chamber info');
        }
        return $result;
    }
}
