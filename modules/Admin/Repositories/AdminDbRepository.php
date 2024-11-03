<?php

namespace Modules\Admin\Repositories;

use Modules\Admin\Models\Admin;
use Modules\Admin\Enums\AdminEnum;

class AdminDbRepository
{
    private Admin $admin;

    public function __construct()
    {
        $this->admin = new Admin();
    }

    public function getAdminById(int $adminId): mixed
    {
        return $this->admin->findOrFail($adminId);
    }

    public function updateProfileData(array $formData, int $adminId): mixed
    {
        return $this->admin
            ->where(AdminEnum::ID, $adminId)
            ->update($formData);
    }

    public function updateAdminPassword(array $data): mixed
    {
        return $this->admin
            ->where(AdminEnum::ID, $data['id'])
            ->update($data);
    }

}
