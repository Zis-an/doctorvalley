<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Feedback\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type'=>['required'],
            'feedback'=>['required'],
            'user_type'=>['nullable'],
            'user_id'=>['nullable'],
            'name'=>['nullable'],
            'email'=>['nullable'],
            'phone'=>['nullable'],
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
            'type.required' => 'Feedback Type is required',
            'feedback.required' => 'Feedback is required',
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
