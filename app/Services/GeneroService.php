<?php

namespace App\Services;

use App\Repositories\GeneroRepository;

class GeneroService
{
    protected GeneroRepository $repository;

    public function __construct(GeneroRepository $repository) {
        $this->repository = $repository;
    }

    public function findAll()
    {
        return $this->repository->findAll();
    }

    public function find(int $id)
    {
        $genero = $this->repository->find($id);

        if (!$genero) {
            abort(404, 'Gênero nao encontrado');
        }

        return $genero;
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }
}
