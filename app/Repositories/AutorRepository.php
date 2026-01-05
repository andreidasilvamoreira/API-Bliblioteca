<?php

namespace App\Repositories;

use App\Models\Autor;

class AutorRepository
{
    public function findAll()
    {
        return Autor::all();
    }

    public function find(int $id)
    {
        return Autor::find($id);
    }

    public function create(array $data)
    {
        return Autor::create($data);
    }
}
