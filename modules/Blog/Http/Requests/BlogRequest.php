<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/


namespace Modules\Blog\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'blog_title' => ['required'],
            'thumb_path' => ['nullable'],
            'description' => ['required'],
            'tags' => ['nullable'],
            'authorable_id' => ['nullable'],
            'authorable_class' => ['nullable'],
            'total_view' => ['nullable'],
            'total_share' => ['nullable'],
            'meta_keys' => ['nullable'],
            'meta_description' => ['nullable'],
            'status' => ['required'],
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
            'blog_title.required' => 'Blog Title is required',
            'description.required' => 'Description is required',
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
