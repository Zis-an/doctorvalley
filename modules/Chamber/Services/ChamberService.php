<?php

namespace Modules\Chamber\Services;

use Module\Chamber\Models\Chamber;
use Modules\Chamber\Repositories\ChamberDBRepository;

class ChamberService
{

    private ChamberDBRepository $repository;

    public function __construct()
    {
        $this->repository = new ChamberDBRepository();
    }
}
