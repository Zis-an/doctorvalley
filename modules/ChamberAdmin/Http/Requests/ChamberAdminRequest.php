<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\ChamberAdmin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChamberAdminRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => ['required', 'string'],
            'username' => ['required'],
            'email' => 'required',
            'phone' => ['required'],
            'chamber_id' => ['required'],
            'status' => ['required'],
//            'role_id' => ['required', 'integer'],
        ];

        if ($this->isMethod('post')) {
            $rules['password'] = ['required'];
        }

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
            'name.required' => 'Name is required',
            'name.string' => 'Name must be in Characters',

            'username.required' => 'Username is required',

            'email.required' => 'Email is required',
            'email.unique' => 'This email already taken try another',

            'phone.required' => 'Phone is required',

            'chamber_id.required' => 'Chamber is required',

            'password.required' => 'Password is required',

            'status.required' => 'Status is required',

//            'role_id.required' => 'Role is required',
//            'role_id.integer' => 'Role must have to be a number',
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
