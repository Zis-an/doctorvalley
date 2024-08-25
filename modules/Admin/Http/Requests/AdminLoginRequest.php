<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return empty(auth()->guard('admin')->user());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username'=>['required', 'string'],
            'password'=>['required', 'min:8'],
            'remember'=>['nullable'],
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
            'username.required' => 'Username/Email is required',
            'username.string' => 'Username/Email must be string',
            'password.required' => 'Password is required',
            'password.min' => 'Password min 8 characters',
        ];
    }
}
