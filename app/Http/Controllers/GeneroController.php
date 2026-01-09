<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGeneroRequest;
use App\Http\Resources\GeneroResource;
use App\Services\GeneroService;
use Illuminate\Routing\Controller as BaseController;

class GeneroController extends BaseController
{
    protected GeneroService $generoService;
    public function __construct(GeneroService $generoService) {
        $this->generoService = $generoService;
    }

    public function findAll()
    {
        $generos = $this->generoService->findAll();
        return response()->json([
            'data' => GeneroResource::collection($generos)
        ], 200);
    }

    public function find($id)
    {
        $genero = $this->generoService->find($id);
        return response()->json([
            'genero' => new GeneroResource($genero)
        ], 200);
    }

    public function create(StoreGeneroRequest $request)
    {
        $genero = $this->generoService->create($request->validated());
        return response()->json([
            'data' => new GeneroResource($genero),
            'message' => 'Livro criado com sucesso'
        ], 201);
    }
}
