<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class GeneroController extends BaseController
{
    public function retornaGeneros()
    {
        return Genero::all();
    }

    public function criarGenero(Request $request)
    {
        $validacao = $request->validate([
            'nome' => 'required|max:50',
        ]);

        $genero = Genero::create($validacao);

        return response()->json($genero, 201);
    }

    public function mostrarGenero($id)
    {
        $genero = Genero::find($id);

        if (!$genero) {
            return response()->json(['message' => 'Gênero não encontrado'], 404);
        }

        return response()->json($genero);
    }

    public function atualizarGenero(Request $request, $id)
    {
        $validacao = $request->validate([
            'nome' => 'sometimes|required|max:50',
            'descricao' => 'sometimes|nullable|max:255',
        ]);

        $genero = Genero::find($id);

        if (!$genero) {
            return response()->json(['message' => 'Gênero não encontrado'], 404);
        }

        $genero->update($validacao);

        return response()->json($genero);
    }

    public function excluirGenero($id)
    {
        $genero = Genero::find($id);

        if (!$genero) {
            return response()->json(['message' => 'Gênero não encontrado'], 404);
        }

        $genero->delete();

        return response()->json(['message' => 'Gênero excluído com sucesso']);
    }
}
