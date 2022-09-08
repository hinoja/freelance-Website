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
                'category' => ['required'],
                'type' => ['required'],
                'salary' => ['required'],
                'tag' => ['required', 'string'],
                'startDate' => ['required', 'date'],
                'endDate' => ['required', 'date', 'after:startDate'],
                'summary' => ['required', 'string'],
                'companyName' => ['nullable'],
                'companyDescription' => ['nullable'],
                'company_name' => ['required', 'string'],


        ];
    }
}
