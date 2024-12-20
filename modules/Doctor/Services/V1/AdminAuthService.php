<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Doctor\Services\V1;

use Exception;
use Illuminate\Support\Facades\Auth;
use Modules\ChamberAdmin\Enums\ChamberAdminEnum;

class AdminAuthService
{
    /**
     * @param array $requestData
     * @return array
     * @throws Exception
     */
    public function authLogin(array $requestData): array
    {
        $credentials = [
            $this->username($requestData['username']) => $requestData['username'],
            'password' => $requestData['password'],
            'status' => config('global.status.active')
        ];

        if (Auth::guard('doctor')->attempt($credentials, $requestData['remember']??0)){
            request()->session()->regenerate();
            request()->session()->regenerateToken();
            return request()->user('doctor')->toArray();
        }else{
            throw new Exception('Username/email and password not match');
        }
    }

    public function authLogout(): void
    {
        try {
            // Perform logout for the 'doctor' guard
            Auth::guard('doctor')->logout();

            // Invalidate and regenerate the session to ensure a clean logout
            request()->session()->invalidate();
            request()->session()->regenerateToken();
        } catch (\Throwable $throwable) {
            // Throw exception if anything goes wrong during logout
            throw new Exception('An error occurred during logout. Please try again.');
        }
    }

    /**
     * Check either username or email.
     * @param $identity
     * @return string
     */
    private function username($identity): string
    {
        $fieldName = filter_var($identity, FILTER_VALIDATE_EMAIL)
            ? ChamberAdminEnum::CHAMBER_ADMIN_EMAIL
            : ChamberAdminEnum::USER_NAME;
        request()->merge([$fieldName => $identity]);
        return $fieldName;
    }
}
