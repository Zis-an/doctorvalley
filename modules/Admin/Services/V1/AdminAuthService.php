<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Admin\Services\V1;

use Exception;
use Illuminate\Support\Facades\Auth;

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

        if (Auth::guard('admin')->attempt($credentials, $requestData['remember']??0)){
            request()->session()->regenerate();
            request()->session()->regenerateToken();
            return request()->user('admin')->toArray();
        }else{
            throw new Exception('Username/email and password not match');
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
            ? 'email'
            : 'username';
        request()->merge([$fieldName => $identity]);
        return $fieldName;
    }
}
