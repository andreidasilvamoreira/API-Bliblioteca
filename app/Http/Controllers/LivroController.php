<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class LivroController extends BaseController
{
    public function retornaLivros()
    {
        return Livro::with(['autor', 'genero'])->get();
    }

    public function criarLivro(Request $request)
    {
        $validacao = $request->validate([
            'titulo' => 'required|max:100',
            'descricao' => 'required',
            'genero_id' => 'required',
            'autor_id' => 'required'
        ]);

        $livro = Livro::create($validacao);

        return response()->json($livro, 201);
    }

    public function mostrarLivro($id)
    {
        $livro = Livro::with(['autor', 'genero'])->find($id);

        if (!$livro) {
            return response()->json(['message' => 'Livro não encontrado'], 404);
        }

        return response()->json($livro);
    }

    public function atualizarLivro(Request $request, $id)
    {
        $validacao = $request->validate([
            'titulo' => 'sometimes|required|max:100',
            'descricao' => 'sometimes|required',
            'genero_id' => 'sometimes|required|exists:generos,id',
            'autor_id' => 'sometimes|required|exists:autores,id'
        ]);

        $livro = Livro::find($id);

        if (!$livro) {
            return response()->json(['message' => 'Livro não encontrado'], 404);
        }

        $livro->update($validacao);

        return response()->json($livro);
    }

    public function excluirLivro($id)
    {
        $livro = Livro::find($id);

        if (!$livro) {
            return response()->json(['message' => 'Livro não encontrado'], 404);
        }

        $livro->delete();

        return response()->json(['message' => 'Livro excluído com sucesso']);
    }
}
