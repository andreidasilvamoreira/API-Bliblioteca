<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LivroService;
use App\Http\Requests\StoreLivroRequest;
use App\Http\Requests\UpdateLivroRequest;
use App\Http\Resources\LivroResource;

class LivroController extends Controller
{
    protected LivroService $livroService;
    public function __construct(LivroService $livroService){
        $this->livroService = $livroService;
    }

    public function findAll()
    {
        $livros = $this->livroService->findAll();
        return response()->json([
            'data' => LivroResource::collection($livros)
        ], 200);
    }

    public function find($id)
    {
        $livro = $this->livroService->find($id);
        return response()->json([
            'data' => new LivroResource($livro)
        ]);
    }

    public function create(StoreLivroRequest $request)
    {
        $livro = $this->livroService->create($request->validated());
        return response()->json([
            'data' => new LivroResource($livro),
            'message' => 'Livro criado com sucesso!'
        ], 201);
    }

    public function update(UpdateLivroRequest $request, $id)
    {
        $livro = $this->livroService->update( $request->validated(),$id);
        return response()->json([
            'data' => new LivroResource($livro),
            'message' => 'Livro atualizado com sucesso!'], 200);
    }

    public function delete($id)
    {
        $this->livroService->delete($id);
        return response()->json(['message' => 'Livro excluído com sucesso'], 200);
    }
}
