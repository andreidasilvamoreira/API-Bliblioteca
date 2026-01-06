<?php

namespace App\Http\Controllers;

use App\Services\AutorService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AutorController extends BaseController
{
    protected AutorService $autorService;
    public function __construct(AutorService $autorService) {
        $this->autorService = $autorService;
    }
    public function findAll()
    {
        return $this->autorService->findAll();
    }

    public function find($id)
    {
        return response()->json($this->autorService->find($id));
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|max:100',
        ]);

        return response()->json($this->autorService->create($validated), 201);
    }


}
