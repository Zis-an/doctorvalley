<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPasswordUpdateRequest extends FormRequest
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
    public function rules(): array
    {
        $rules = [
            'id' => ['required', 'integer'],
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'max:25', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:8', 'max:25',]
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'current_password.required' => 'Current password is required.',
            'password.required' => 'New password is required.',
            'password.min' => 'New password must be at least 8 characters.',
            'password.max' => 'New password not more than 25 characters.',
            'password.confirmed' => 'New password and confirm password does not match.',
            'password_confirmation.required' => 'Confirm password is required.',
        ];
    }
}
