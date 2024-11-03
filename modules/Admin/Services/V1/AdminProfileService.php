<?php

namespace Modules\Admin\Services\V1;

use Illuminate\Support\Facades\Hash;
use Modules\Admin\Repositories\AdminDbRepository;

class AdminProfileService
{
    private AdminDbRepository $adminDbRepository;

    public function __construct()
    {
        $this->adminDbRepository = new AdminDbRepository();
    }

    public function getAdminById(int $adminId): mixed
    {
        $result = $this->adminDbRepository->getAdminById($adminId);
           if(empty($result)) {
               throw new \Exception('Admin not found');
           }
       return $result;

    }

    public function updateProfileData(array $formData, int $adminId): mixed
    {
        $result = $this->adminDbRepository->updateProfileData($formData, $adminId);
        if(empty($result)){
            throw new \Exception('Invalid admin data');
        }
        return $result;
    }


    public function updateAdminPassword(array $formData): mixed
    {
        if (!Hash::check($formData['current_password'], auth('admin')->user()->password)) {
            // Throw an exception instead of returning a redirect
            throw new \Exception('Your current password does not match!');
        }

        $formData['password'] = Hash::make($formData['password']);
        unset($formData['current_password'], $formData['password_confirmation']);

        return $this->adminDbRepository->updateAdminPassword($formData);
    }


}
