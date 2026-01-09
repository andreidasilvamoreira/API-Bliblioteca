<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGeneroRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|max:50',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.max' => 'Tipo de gênero deve ter no maximo 50 caracteres',
            'nome.required' => 'É necessario que tenha um Gênero'
        ];
    }
}
