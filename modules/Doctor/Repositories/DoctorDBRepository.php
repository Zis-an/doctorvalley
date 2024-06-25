<?php

namespace Modules\Doctor\Repositories;

use Modules\Doctor\Models\Doctor;

class DoctorDBRepository
{

    private Doctor $model;
    public function __construct()
    {
        $this->model = new Doctor();
    }
}
