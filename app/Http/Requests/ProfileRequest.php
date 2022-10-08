<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'location' => ['required', 'string', 'min:2'],
            'title' => ['required', 'string'],
            'salaries' => ['nullable', 'min:2'],
            // 'email' => ['required', 'email'],//a remettre
            'description' => ['required', 'string'],
        ];
    }
}
