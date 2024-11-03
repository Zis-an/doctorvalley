<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\ChamberAdmin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChamberAdminPasswordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'id' => ['required', 'integer'],
            'chamber_id' => ['required', 'integer'],
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'max:25', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:8', 'max:25',]
        ];

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'current_password.required' => 'Current password is required.',
            'password.required' => 'New password is required.',
            'password.min' => 'New password must be at least 8 characters.',
            'password.max' => 'New password not more than 25 characters.',
            'password.confirmed' => 'New password and confirm password does not match.',
            'password_confirmation.required' => 'Confirm password is required.',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
