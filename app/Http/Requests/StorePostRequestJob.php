<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequestJob extends FormRequest
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

            'title' => ['required', 'string'],
            'location' => ['required', 'string'],
            'category' => ['required', 'exists:categories,id'],
            'status_id' => ['required', 'exists:statuses,id'],
            'salary' => ['required', 'numeric'],
            'tag' => ['nullable', 'exists:tags,id'],
            'openingDate' => ['required', 'date'],
            'closingDate' => ['required', 'date', 'before:openingDate', 'before_or_equal:now'],
            'summary' => ['required', 'string'],
            'companyName' => ['nullable'],
            'companyDescription' => ['nullable'],
            'company_name' => ['required', 'string'],
            'requirements' => ['nullable'],

        ];
    }
}
