<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLivroRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo'    => 'sometimes|required|string|max:100',
            'descricao' => 'sometimes|required|string',
            'genero_id' => 'sometimes|required|exists:generos,id',
            'autor_id'  => 'sometimes|required|exists:autores,id',
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required'    => 'É necessário que tenha um título',
            'titulo.max'         => 'O título pode ter no máximo 100 caracteres',
            'descricao.required' => 'É necessário que tenha uma descrição',
            'genero_id.required' => 'É necessário que tenha um gênero',
            'genero_id.exists'   => 'O gênero precisa existir',
            'autor_id.required'  => 'É necessário que tenha um autor',
            'autor_id.exists'    => 'O autor precisa existir',
        ];
    }
}
