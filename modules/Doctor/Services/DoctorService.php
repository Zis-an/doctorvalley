<?php

namespace Modules\Doctor\Services;

use Module\Doctor\Models\Doctor;
use Modules\Doctor\Repositories\DoctorDBRepository;

class DoctorService
{

    private DoctorDBRepository $repository;

    public function __construct()
    {
        $this->repository = new DoctorDBRepository();
    }
}
