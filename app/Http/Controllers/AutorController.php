<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AutorController extends BaseController
{
    public function retornaAutores()
    {
        return Autor::all();
    }

    public function criarAutor(Request $request)
    {
        $validacao = $request->validate([
            'nome' => 'required|max:100',
        ]);

        $autor = Autor::create($validacao);

        return response()->json($autor, 201);
    }

    public function mostrarAutor($id)
    {
        $autor = Autor::find($id);

        if (!$autor) {
            return response()->json(['message' => 'Autor não encontrado'], 404);
        }

        return response()->json($autor);
    }

    public function atualizarAutor(Request $request, $id)
    {
        $validacao = $request->validate([
            'nome' => 'sometimes|required|max:100',
            'biografia' => 'sometimes|nullable|max:1000',
        ]);

        $autor = Autor::find($id);

        if (!$autor) {
            return response()->json(['message' => 'Autor não encontrado'], 404);
        }

        $autor->update($validacao);

        return response()->json($autor);
    }

    public function excluirAutor($id)
    {
        $autor = Autor::find($id);

        if (!$autor) {
            return response()->json(['message' => 'Autor não encontrado'], 404);
        }

        $autor->delete();

        return response()->json(['message' => 'Autor excluído com sucesso']);
    }
}
