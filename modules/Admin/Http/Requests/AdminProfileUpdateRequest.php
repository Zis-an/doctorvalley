<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AdminProfileUpdateRequest extends FormRequest
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
        return [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email:rfc,dns|email|unique:admins,email,'.auth('admin')->user()->id,
            'phone_no' => 'required',
            'status' => 'required',
            'role_id' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'username.required' => 'Username is required',
            'email.required' => 'Email is required',
            'email.unique' => 'This email already taken try another',
            'phone_no.required' => 'Phone is required',
            'status.required' => 'Status is required',
            'role_id.required' => 'Role is required',
        ];
    }
}
