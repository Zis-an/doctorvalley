<?php

namespace Modules\Doctor\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorQualificationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'doctor_id'=>['required'],
            'education_id.*'=>['nullable'],
            'degree_id.*'=>['required'],
            'institute_id.*'=>['required'],
            'major.*'=>['nullable'],
            'institute_name.*'=>['nullable'],
            'from.*'=>['required'],
            'to.*'=>['nullable'],
            'current.*'=>['nullable', 'boolean']
        ];
    }

    public function messages()
    {
        return [
            'doctor_id.required' => 'Doctor is required',

            'degree_id.*.required' => 'Degree is required',

            'institute_id.*.required' => 'Institute is required',

            'major.*.required' => 'Major is required',

            // 'institute_name.*.nullable' => 'Institute Name is required',

            'from.*.required' => 'Date is required',

//            'to.*.required' => 'Date is required',

            // 'current.required' => 'Current is required'
        ];
    }
}
