<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivroSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('livros')->insert([
            [
                'titulo' => 'Dom Casmurro',
                'descricao' => 'Romance clássico da literatura brasileira',
                'genero_id' => 1,
                'autor_id' => 1,
            ],
            [
                'titulo' => '1984',
                'descricao' => 'Distopia política',
                'genero_id' => 3,
                'autor_id' => 2,
            ],
            [
                'titulo' => 'O Senhor dos Anéis',
                'descricao' => 'Fantasia épica',
                'genero_id' => 2,
                'autor_id' => 3,
            ],
        ]);
    }
}
