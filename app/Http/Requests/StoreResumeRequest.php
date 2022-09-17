<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResumeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           
            'start_date' => ['nullable', 'array'],
            'start_date.*' => ['nullable', 'date', 'nullable'],
            'end_date' => ['nullable', 'array'],
            'end_date.*' => ['date', 'nullable', 'nullable', 'after_or_equal:start_date.*'],
            'company' => ['nullable', 'array'],
            'company.count.*' => ['nullable', 'string', 'nullable'],
            'job_title' => ['nullable',  'array'],
            'job_title.count.*' => ['nullable',  'string', 'nullable'],
            'url' => ['nullable',  'array'],
            'url.*' => ['nullable'],
            'name_url' => ['nullable',  'array'],
            'name_url.*' => ['nullable', 'string'],
        ];
    }
}
