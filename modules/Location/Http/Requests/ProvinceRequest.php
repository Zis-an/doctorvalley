<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProvinceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
             'country_id'=>['required'],
=======
            // 'country_id'=>['required'],
>>>>>>> 34453fb87d97e94bd10833b7fb74e3827ffbb3a4
            'province_name'=>['required', 'string'],
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
<<<<<<< HEAD
             'country_id.required' => 'Select a Country ',
=======
            // 'country_id.required' => 'Select a Country ',
>>>>>>> 34453fb87d97e94bd10833b7fb74e3827ffbb3a4

            'province_name.required' => 'Province Name is required',
            'province_name.string' => 'Province must be in Characters',

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
