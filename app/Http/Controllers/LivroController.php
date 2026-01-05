<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LivroService;
class LivroController extends Controller
{
    protected LivroService $livroService;
    public function __construct(LivroService $livroService){
        $this->livroService = $livroService;
    }

    public function retornaLivros()
    {
        return response()->json($this->livroService->findAll());
    }

    public function mostrarLivro($id)
    {
        return response()->json($this->livroService->find($id));
    }

    public function criarLivro(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:100',
            'descricao' => 'required',
            'genero_id' => 'required|exists:generos,id',
            'autor_id' => 'required'
        ]);

        return response()->json($this->livroService->create($validated), 201);
    }

    public function atualizarLivro(Request $request, $id)
    {
        $validated = $request->validate([
            'titulo' => 'sometimes|required|max:100',
            'descricao' => 'sometimes|required',
            'genero_id' => 'sometimes|required|exists:generos,id',
            'autor_id' => 'sometimes|required|exists:autores,id'
        ]);

        return response()->json($this->livroService->update($validated, $id), 200);
    }

    public function excluirLivro($id)
    {
        $this->livroService->delete($id);
        return response()->json(['message' => 'Livro excluído com sucesso'], 200);
    }
}
