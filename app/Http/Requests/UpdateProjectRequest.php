<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if(Auth::check()){
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3','max:255',
            Rule::unique('projects')->ignore($this->project)
            ],
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['required', 'min:10', 'string'],
            'url' => ['required', 'url'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'programming_language' => ['required', 'string', 'max:50'],
            'type_id' => ['required','numeric', 'integer', 'exists:types,id'],
            'technologies'=> ['required','array', 'exists:technologies,id']
        ];
    }
}
