<?php

namespace App\Services;

use App\Repositories\LivroRepository;

class LivroService
{
    protected LivroRepository $repository;

    public function __construct(LivroRepository $repository)
    {
        $this->repository = $repository;
    }

    public function findAll()
    {
        return $this->repository->findAll();
    }

    public function find(int $id)
    {
        $livro = $this->repository->find($id);

        if (!$livro) {
            abort(404, 'Livro não encontrado');
        }

        return $livro;
    }
    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(array $data, $id)
    {
        $livro = $this->repository->find($id);

        if (!$livro) {
            abort(404, 'Livro não encontrado');
        }
        $livro->update($data);

        return $livro;
    }

    public function delete($id)
    {
        $livro = $this->repository->find($id);

        if (!$livro) {
            abort(404, 'Livro não encontrado');
        }
        $livro->delete();
    }
}
