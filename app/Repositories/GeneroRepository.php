<?php

namespace App\Repositories;

use App\Models\Genero;

class GeneroRepository
{
    public function findAll()
    {
        return Genero::all();
    }

    public function find(int $id)
    {
        return Genero::find($id);
    }

    public function create(array $data)
    {
        return Genero::create($data);
    }
}
