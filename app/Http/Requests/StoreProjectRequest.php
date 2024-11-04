<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:255',
            'title' => 'required|string|min:3|max:255',
            'description' => 'required|min:10|string',
            'url' => 'required|url',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'programming_language' => 'required|string|max:50',
        ];
    }
}
