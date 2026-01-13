<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|min:10|max:100',
            'description' => 'required|min:30',
            'img' => 'image'
            
        ];
    }
    
    public function messages(): array
    {
        return [
            'title.required' => 'Questo campo e obbligatorio',
            'title.min' => 'Questo campo deve contenere almeno 10 caratteri',
            'title.max' => 'Questo campo deve contenere massimo 100 caratteri',
            'description.required' => 'Questo campo e obbligatorio',
            'description.min' => 'Questo campo deve contenere almeno 30 caratteri'
        ];
    }
}
