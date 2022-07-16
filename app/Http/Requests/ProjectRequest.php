<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'url' => 'required',
            'title' => 'required',
            'description' => 'required'
        ];
    }

    public function messages(){
        return [
            'url.required' => 'El proyecto necesita una URL',
            'title.required' => 'El proyecto necesita un título',
            'description.required' => 'El proyecto necesita una descripción',
        ];
    }
}
