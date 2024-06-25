<?php

if (!function_exists('role_base_user_info')) {
    function role_base_user_info()
    {
        if (!empty(auth('web')->user())){
            return [
                'id'=>auth('web')->id(),
                'name'=>'customer',
            ];
        }

        if (!empty(auth('adminauth')->user())){
            return [
                'id'=> auth('adminauth')->id(),
                'name'=>auth('adminauth')->user()->getRoleNames(),
            ];
        }

        return [
            'id'=>null,
            'name'=>null
        ];
    }
}
