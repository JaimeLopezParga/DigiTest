<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DirectoresRequest extends FormRequest
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
            'director_nombre' => 'required',
        ];
    }

    
    public function messages()
    {
        return[
            'director_nombre.required' => 'Llene el campo "Nombre"',
        ];
    }
}
