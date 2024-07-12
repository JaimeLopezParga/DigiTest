<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosRequest extends FormRequest
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
            'email' => 'required',
            'password' => 'required',
            'nombre' => 'required',
            'rol_id' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'email.required' => 'Llene el campo "Email"',
            'password.required' => 'Llene el campo "Contraseña"',
            'nombre.required' => 'Llene el campo "Nombre"',
            'rol_id.required' => 'Escoja un Rol',
        ];
    }
}
