<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAutorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome do autor é obrigatorio.',
            'nome.string' => 'O nome do autor tem que ser um texto',
            'nome.max' => 'O nome do autor tem que ter no maximo :max caracteres.'
        ];
    }
}
