<?php

namespace Modules\Doctor\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorExperienceRequest extends FormRequest
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
            'organization_name.*'=>['required'],
            'designation.*'=>['required'],
            'from.*'=>['required'],
            'to.*'=>['required'],
            'current.*'=>['nullable', 'boolean'],
            'location.*'=>['required']
        ];
    }

    public function messages()
    {
        return [
            'doctor_id.required' => 'Doctor is required',

            'organization_name.*.required' => 'Organization Name is required',

            'designation.*.required' => 'Designation is required',

            'from.*.required' => 'From Date is required',

            'to.*.required' => 'To Date is required',

            'location.*.required' => 'Organization Address is required',
        ];
    }
}
