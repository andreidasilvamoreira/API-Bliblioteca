<?php

namespace App\Services;

use App\Repositories\AutorRepository;

class AutorService
{
    protected AutorRepository $repository;
    public function __construct(AutorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function findAll() {
        return $this->repository->findAll();
    }

    public function find(int $id) {
        $autor = $this->repository->find($id);

        if (!$autor) {
            abort(404, 'Autor nao encontrado');
        }
        return $autor;
    }

    public function create(array $data) {
        return $this->repository->create($data);
    }
}
