<?php

namespace Modules\Chamber\Repositories;

use Modules\Chamber\Models\Chamber;

class ChamberDBRepository
{

    private Chamber $model;
    public function __construct()
    {
        $this->model = new Chamber();
    }
}
