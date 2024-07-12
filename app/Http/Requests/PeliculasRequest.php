<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeliculasRequest extends FormRequest
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
            'pelicula_nombre' => 'required',
            'pelicula_precio' => 'required',
            'pelicula_stock' => 'required',
            'pelicula_estreno' => 'required',
            'pelicula_genero_id' => 'required',
            'pelicula_director_id' => 'required',
        ];
    }

    
    public function messages()
    {
        return[
            'pelicula_nombre.required' => 'Llene el campo "Nombre"',
            'pelicula_precio.required' => 'Llene el campo "Precio"',
            'pelicula_stock.required' => 'Llene el campo "Stock"',
            'pelicula_estreno.required' => 'Escoja una fecha',
            'pelicula_genero_id.required' => 'Escoja un "Genero"',
            'pelicula_director_id.required' => 'Escoja un "Director"',
        ];
    }
}
