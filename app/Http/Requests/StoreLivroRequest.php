<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLivroRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo' => 'required|max:100',
            'descricao' => 'required',
            'genero_id' => 'required|exists:generos,id',
            'autor_id' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.max' => 'O titulo pode ter no maximo 100 caracteres',
            'titulo.required' => 'É necessario que tenha um titulo',
            'descricao.required' => 'É necessario que tenha uma descrição',
            'genero_id.exists' => 'O gênero precisa existir',
            'genero_id.required' => 'É necessario que tenha um gênero',
            'autor_id.required' => 'É necessario que tenha um autor'
        ];
    }
}
