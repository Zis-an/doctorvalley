<?php

namespace Modules\Doctor\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRegistrationRequest extends FormRequest
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
            'name'=>['required', 'string'],
            'bmdc'=>'required|unique:doctors,bmdc',
            'email'=>'required|email:rfc,dns|unique:doctors,email',
            'phone'=>'required|unique:doctors,phone',
            'password' => 'required|min:8|max:25|confirmed',
            'password_confirmation' => 'required|min:8|max:25',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name must be in Characters',

            'email.required' => 'Email is required',
            'email.unique' => 'This email is already registered.',

            'phone.required' => 'Phone number is required',
            'phone.unique' => 'This phone number already taken',

            'bmdc.required' => 'BMDC Number is required',
            'bmdc.unique' => 'This BMDC Number already taken',

            'password.required' => 'Password is required',

        ];
    }
}
