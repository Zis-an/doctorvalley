<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'country_name'=>['required', 'string', 'max:50'],
            'capital'=>['nullable', 'string'],
            'short_name'=>['nullable', 'string'],
            'country_code'=>['nullable', 'string', 'max:3'],
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
            'country_name.required' => 'Country Name is required',
            'country_name.string' => 'Country Name must be in Characters',
            'country_name.max' => 'Country Name Maximum 50 characters long',

            // 'capital.string' => 'Capital must be in Characters',

            // 'short_name.string' => 'Short Name must be in Characters',

            // 'country_code.required' => 'Country Code is required',
            // 'country_code.string' => 'Country Code must be string',
            // 'country_code.max' => 'Country Code Maximum 3 characters long',

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
