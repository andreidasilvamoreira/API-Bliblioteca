<?php

namespace App\Repositories;

use App\Models\Livro;

class LivroRepository
{
    public function findAll()
    {
        return Livro::with(['autor', 'genero'])->get();
    }

    public function find(int $id)
    {
        return Livro::with(['autor', 'genero'])->find($id);
    }

    public function create(array $data)
    {
        return Livro::create($data);
    }

    public function update(Livro $livro, array $data)
    {
        $livro->update($data);
        return $livro;
    }

    public function delete(Livro $livro)
    {
        $livro->delete();
    }
}
