<?php

namespace App\Http\Controllers;

use App\Services\AutorService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Resources\AutorResource;
use App\Http\Requests\StoreAutorRequest;

class AutorController extends BaseController
{
    protected AutorService $autorService;
    public function __construct(AutorService $autorService) {
        $this->autorService = $autorService;
    }
    public function findAll()
    {
        $autores = $this->autorService->findAll();
        return response()->json([
            'data' => AutorResource::collection($autores)
        ], 200);
    }

    public function find($id)
    {
        $autor = $this->autorService->find($id);
        return response()->json(['data' => new AutorResource($autor)], 200);
    }

    public function create(StoreAutorRequest $request)
    {
        $autor = $this->autorService->create($request->validated());
        return response()->json([
            'data' => new AutorResource($autor),
            'message' => 'Autor criado com sucesso'
        ], 201);
    }
}
