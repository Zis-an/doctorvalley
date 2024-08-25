<?php

namespace Modules\Doctor\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorSpecialityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return false;
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
            'speciality_id'=>['required']
        ];
    }

    public function messages()
    {
        return [
            'doctor_id.required' => 'Doctor is required',

            'speciality_id.required' => 'Speciality is required'
        ];
    }
}
