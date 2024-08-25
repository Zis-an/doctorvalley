<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Institute\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstituteRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'institute_name'=>['required', 'string'],
            'institute_address'=>['required', 'string'],
            'status'=>['required'],
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
            'institute_name.required' => 'Institute Name is required',
            'institute_name.string' => 'Institute Name must be in Characters',

            'institute_address.required' => 'Institute Address is required',

            'status.required' => 'Status is required',
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
