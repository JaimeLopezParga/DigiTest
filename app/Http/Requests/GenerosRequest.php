<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenerosRequest extends FormRequest
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
            'genero_nombre' => 'required',
            'genero_descripcion' => 'required',
        ];
    }


    public function messages()
    {
        return[
            'genero_nombre.required' => 'Llene el campo "Nombre"',
            'genero_descripcion.required' => 'Llene el campo "Descripción"',
        ];
    }
}
