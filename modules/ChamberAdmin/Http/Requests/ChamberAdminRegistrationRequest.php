<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\ChamberAdmin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChamberAdminRegistrationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'chamber_name'=>['required', 'string'],
            'name'=>['required', 'string'],
            'reg_no'=>['required'],
            'email'=>'required|email:rfc,dns|unique:chamber_admin,email',
            'phone'=>'required',
            'password' => 'required|min:8|max:25|confirmed',
            'password_confirmation' => 'required|min:8|max:25',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'chamber_name.required' => 'Chamber Name is required',

            'name.required' => 'Name is required',
            'name.string' => 'Name must be in Characters',

            'email.required' => 'Email is required',
            'email.unique' => 'This email is already registered.',

            'phone.required' => 'Phone number is required',

            'reg_no.required' => 'Registration Number is required',

            'password.required' => 'Password is required',


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
