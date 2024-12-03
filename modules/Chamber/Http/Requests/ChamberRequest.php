<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Chamber\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChamberRequest extends FormRequest
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
            'reg_no'=>['required'],
            'email'=>['required'],
            'phone_no'=>['required'],
            'province_id'=>['required'],
            'city_id'=>['required'],
            'area_id'=>['required'],
            'address'=>['required'],
            'chamber_type'=>['required'],
            'description'=>['nullable'],
            'links' => ['array'],
            'links.*' => ['nullable'],
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
            'chamber_name.required' => 'Chamber Name is required',
            'chamber_name.string' => 'Chamber Name must be in Characters',

            'reg_no.required' => 'Registration Number is required',

            'email.required' => 'Email is required',

            'phone_no.required' => 'Phone Number is required',

            'province_id.required' => 'Division is required',

            'city_id.required' => 'District is required',

            'area_id.required' => 'Thana is required',

            'address.required' => 'Address is required',

            'chamber_type.required' => 'Chamber Type is required',

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
