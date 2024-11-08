<?php

namespace Modules\Doctor\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            'name'=>['required', 'string'],
            'email'=>['required'],
            'phone'=>['required'],
            'username'=>['nullable'],
            'bmdc'=>['required'],
            'gender'=>['required'],
            'speciality_id' => ['required', 'array'],
            'speciality_id.*' => ['required'],
            'country_id'=>['required'],
            'province_id'=>'required|exists:provinces,id',
            'city_id'=>'required|exists:cities,id',
            'area_id'=>'required|exists:areas,id',
            'address'=>['required'],
            'bio'=>['required'],
            'links'=>['nullable'],
            'password' => 'nullable',
            'password_confirmation' => 'nullable',
            'photo'=>['nullable'],
            'status'=>['required']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name must be in Characters',

            'email.required' => 'Email is required',

            'phone.required' => 'Phone number is required',

            'username.required' => 'Username is required',

            'bmdc.required' => 'BMDC Number is required',

            'gender.required' => 'Gender is required',

            'speciality_id.*.required' => 'Select at least one Speciality',

            'country_id.required' => 'Country is required',

            'province_id.required' => 'Division is required',

            'city_id.required' => 'District is required',

            'area_id.required' => 'Thana is required',

            'address.required' => 'Address is required',

            'bio.required' => 'Bio is required',

            // 'links.required' => 'Social Links are required',

            'password.required' => 'Password is required',

            // 'photo.required' => 'Photo is required',

            'status.required' => 'Status is required'
        ];
    }
}
