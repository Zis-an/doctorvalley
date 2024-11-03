<?php

namespace Modules\Chamber\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleStoreRequest extends FormRequest
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
            'doctor_id' => 'required|exists:doctors,id',
            'schedule_day' => 'required|array|min:1', // Must select at least one day
            'schedule_day.*' => 'required|in:sunday,monday,tuesday,wednesday,thursday,friday,saturday',
            'start_time' => 'required|array',
            'end_time' => 'required|array',
            'note' => 'nullable|string',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $scheduleDays = $this->input('schedule_day', []);

            foreach ($scheduleDays as $day) {
                $startTime = $this->input('start_time.' . $day);
                $endTime = $this->input('end_time.' . $day);

                if (is_null($startTime)) {
                    $validator->errors()->add("start_time.{$day}", "Start time required for : {$day}");
                }

                if (is_null($endTime)) {
                    $validator->errors()->add("end_time.{$day}", "End time required for : {$day}");
                }

                if (!is_null($startTime) && !is_null($endTime) && strtotime($startTime) >= strtotime($endTime)) {
                    $validator->errors()->add("end_time.{$day}", "End time must be after start time for : {$day}");
                }
            }
        });
    }

    public function messages(): array
    {
        return [
            'schedule_day.required' => 'At least one schedule day must be selected.',
            'start_time.required' => 'Start time is required.',
            'end_time.required' => 'End time is required.',
        ];
    }

}
