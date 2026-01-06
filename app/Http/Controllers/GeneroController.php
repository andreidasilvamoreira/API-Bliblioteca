<?php

namespace App\Http\Controllers;

use App\Services\GeneroService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class GeneroController extends BaseController
{
    protected GeneroService $generoService;
    public function __construct(GeneroService $generoService) {
        $this->generoService = $generoService;
    }

    public function findAll()
    {
        return $this->generoService->findAll();
    }

    public function find($id)
    {
        return response()->json($this->generoService->find($id));
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|max:50',
        ]);

        return response()->json($this->generoService->create($validated), 201);
    }



}
